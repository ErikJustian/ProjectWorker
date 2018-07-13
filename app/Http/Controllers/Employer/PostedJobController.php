<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
// Models
use App\Models\JobRequest;
use App\Models\JobTaken;
use App\Models\Employee;
use App\Models\Classes;

class PostedJobController extends Controller
{
    public function index() {
        $job = JobRequest::where('status', '<>','Finished')
            ->where('status', '<>', "Cancelled")
            ->where('employer', Auth::user()->id)
            ->paginate(10);
        $data['jobs'] = $job;
        return view('layouts.employer.employerpostedjob', $data);
    }

    public function start(Request $request) {
        $job = JobRequest::find($request->job_id);
        $job->status = JobRequest::JOB_REQUEST_STATUS_ON_PROCESS;
        $job->save();
        $jobtaken = JobTaken::where('job_id', $request->job_id)->first();
        $jobtaken->status = JobRequest::JOB_REQUEST_STATUS_ON_PROCESS;
        $jobtaken->save();
        return redirect()->back();
    }

    public function end(Request $request) {
        $job = JobRequest::find($request->job_id);
        $job->status = JobRequest::JOB_REQUEST_STATUS_FINISHED;
        $job->save();
        $jobtaken = JobTaken::where('job_id', $request->job_id)->first();
        $jobtaken->status = JobRequest::JOB_REQUEST_STATUS_FINISHED;
        if($request->complain ==null) {
            $jobtaken->complain = "";
        } else {
            $jobtaken->complain = $request->complain;
        }
        $jobtaken->rating = $request->stars;
        $jobtaken->save();
        $employee = $jobtaken->employeeDetail;
        $employee->rating = $employee->rating + $request->stars;
        
        $multiplier = $employee->class->discount;
        $debt = $jobtaken->employeeDetail->deposit_tab;
        $salary = $job->salary;

        $employee->deposit_tab = $debt + ($salary * $multiplier);
        $employee->success_job = $employee->success_job + 1;

        $class = Classes::find($employee->class_id);
        if($employee->success_job > $class->successjob) {
            $employee->class_id = Classes::where('successjob', '>', $employee->success_job)->first()->id;
        }
        $employee->save();
        if($jobtaken->refferer_id != null) {
            $refferer = Employee::where('user_id', $jobtaken->refferer_id)->first();
            $refferer->commission += ($salary * 0.04);
            $refferer->save();
        }
        return redirect()->back();        
    }

    public function cancel(Request $request) {
        $job = JobRequest::find($request->job_id);
        $job->status = JobRequest::JOB_REQUEST_STATUS_ON_PROCESS;
        $job->save();
        $jobtaken = JobTaken::where('job_id', $request->job_id->first());
        $jobtaken->status = JobRequest::JOB_REQUEST_STATUS_ON_PROCESS;
        $jobtaken->save();
        return redirect()->back();

    }
}
