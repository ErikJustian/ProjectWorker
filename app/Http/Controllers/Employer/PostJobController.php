<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\Category;
use App\Models\Location;
use App\Models\JobRequest;
// 
use Auth;

class PostJobController extends Controller
{
    public function index() {
        $category = Category::get();
        $locations = Location::get();
        $data['category'] = $category;
        $data['locations'] = $locations;
        return view('layouts.employer.postjob', $data);
    }
    
    public function post(Request $request) {
        $request->jobtitle;
        $request->category;
        $request->location;
        $request->requirement;
        $request->detail;
        $request->due_date;
        $user = Auth::user();
        $job= new JobRequest;
        $job->employer = $user->id;
        $job->title = $request->jobtitle;
        $job->detail = $request->detail;
        $job->salary= $request->salary;
        $job->requirement = $request->requirement;
        $job->category_id = $request->category;
        $job->location_id = $request->location;
        $job->status = JobRequest::JOB_REQUEST_STATUS_AWAITING;
        $job->promoted = false;
        $job->due_date = $request->due_date;
        $job->save();
        return redirect('employer/postjob')->with('status', 'Job Posted');
    }
}
