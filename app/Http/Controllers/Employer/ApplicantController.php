<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Models\EmployeeRequest;
use App\Models\JobRequest;
use App\Models\JobTaken;

class ApplicantController extends Controller
{
    public function index($id) {
        $job = JobRequest::find($id)->load('category');
        if($job->employer != Auth::user()->id) {
            return redirect()->back();
        }
        $employee = EmployeeRequest::where('job_id', $id)->where('status', JobRequest::JOB_REQUEST_STATUS_AWAITING)
        ->paginate(5);
        $employee->load('employeerel');
        $data['employeerequest'] = $employee;
        $data['job'] = $job;
        return view('layouts.employer.applicantslist', $data);
    }

    public function acceptApplicant(Request $request) {
        // Sisi Request
        $employeerequest = EmployeeRequest::where('job_id', $request->job_id)
            ->where('employee', $request->employee_id)->first();
        $employeerequest->status ="Accepted";
        $employeerequest->save();
        $jobrequest = JobRequest::find($employeerequest->job_id);
        $jobrequest->status = JobRequest::JOB_REQUEST_STATUS_TAKEN;
        $jobrequest->save();
        // Sisi Take
        $jobtaken = new JobTaken;
        $jobtaken->status = JobRequest::JOB_REQUEST_STATUS_TAKEN;
        $jobtaken->job_id = $request->job_id;
        $jobtaken->employee = $request->employee_id;
        if($employeerequest->refferal_id != null) {
            $jobtaken->refferer_id = $employeerequest->refferal_id;
        }
        $jobtaken->complain = "";
        $jobtaken->rating = "0";
        $jobtaken->save();
        // Job Taken Employee ++
        $employee = $jobtaken->employeeDetail;
        $employee->job_taken = $employee->job_taken + 1;
        $employee->save();
        EmployeeRequest::where('job_id', $request->job_id)
            ->where('employee', '<>', $request->employee_id)
            ->update(['status' => 'Declined']);;
        return redirect()->route('postedjob');
    }

    public function declineApplicant(Request $request) {
        $employeerequest = EmployeeRequest::where('job_id', $request->job_id)
            ->where('employee', $request->employee_id)->first();
        $employeerequest->status ="Declined";
        $employeerequest->save();
        return redirect()->back();
    }
}
