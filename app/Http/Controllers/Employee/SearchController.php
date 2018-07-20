<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Models\JobRequest;
use App\Models\User;
use App\Models\EmployeeRequest;
use App\Models\Location;
use App\Models\Category;
use App\Models\Refference;

class SearchController extends Controller
{
    public function index(Request $request) {
        $job = JobRequest::where('status', JobRequest::JOB_REQUEST_STATUS_AWAITING);
        if($request->query('category')) {
           $job = $job->where('category_id', $request->query('category'));
        }
        if($request->query('location')) {
            $job = $job->where('location_id', $request->query('location'));
        }

        $job = $job->where('status',JobRequest::JOB_REQUEST_STATUS_AWAITING)->paginate(2);
        $promotedjobs = JobRequest::where('status', JobRequest::JOB_REQUEST_STATUS_AWAITING)
            ->where('promoted', true)->limit(5)->get();

        $job->load(['category', 'user']);
        $data['promotedjobs'] = $promotedjobs;
        $data['jobs'] = $job;
        // Untuk tarek data location
        $location = Location::all();
        $data['locations'] = $location;
        // Untuk tarek data category
        $category = Category::all();
        $data['categories'] = $category;

        return view('layouts.employee.searchjob', $data);
    }
    // Untuk mengambil job
    public function takeJob(Request $request) {
        $employee_request = new EmployeeRequest;
        $employee_request->job_id = $request->job_id;
        $employee_request->employee = Auth::user()->id;
        if($request->has('refferal_id')) {
            $employee_request->refferal_id = $request->refferal_id;
        }
        $employee_request->status = JobRequest::JOB_REQUEST_STATUS_AWAITING;
        $employee_request->save();
        return redirect()->route('employeeprofile');
    }
    // Untuk reference job
    public function referrenceJob(Request $request) {
        $refferal = User::where('username', $request->username)->where('role', 'Employee')->first();
        if($refferal==null){
            $errors['username'] =  'No such username!';
            return redirect()->back()
            ->withErrors($errors);
        }
        $refference = new Refference;
        $refference->refferer_id = Auth::user()->id;
        $refference->job_id = $request->job_id;
        $refference->refferal_id = $refferal->id;
        $refference->status = 'Pending';
        $refference->save();
        return redirect()->back()->with('status', 'Referrence Send!');
    }

    public function viewProfile($id) {
        $user = User::find($id)->first();
        $profile['username'] = $user->username;
        $profile['role'] = $user->role;
        $profile['type'] = $user->employer->type;
        $profile['name'] = $user->employer->name;
        $profile['job_requested'] = $user->employer->job_requested;
        $profile['detail'] = $user->employer->detail;
        $profile['phone_number'] = $user->employer->phone_number;
        $profile['address'] = $user->employer->address;
        return view('layouts.employee.viewemployer', $profile);
    }
}
