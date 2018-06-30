<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Category;
use App\Models\JobRequest;
// 
use Auth;

class PostJobController extends Controller
{
    public function index() {
        $category = Category::get();
        $data['category'] = $category;
        return view('postjob', $data);
    }
    public function post(Request $request) {
        $request->jobtitle;
        $request->category;
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
        $job->status = JobRequest::JOB_REQUEST_STATUS_AWAITING;
        $job->promoted = false;
        $job->due_date = $request->due_date;
        $job->save();
        return redirect('postjob')->with('status', 'Job Posted');
    }
}
