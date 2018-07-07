<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Models\JobRequest;
use App\Models\EmployeeRequest;
use App\Models\Location;
use App\Models\Category;

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
        $job = $job->where('status',JobRequest::JOB_REQUEST_STATUS_AWAITING)
        ->paginate(2);
        $job->load(['category', 'user']);
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
    public function referrenceJob() {

    }
}
