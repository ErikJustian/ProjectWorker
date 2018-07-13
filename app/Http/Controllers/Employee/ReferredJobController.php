<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Refference;
use App\Models\JobTaken;
use App\Models\JobRequest;
use App\Models\EmployeeRequest;
use Auth;

class ReferredJobController extends Controller
{
    public function index() {
        $referrences = Refference::where('refferal_id', Auth::user()->id)
                                    ->where('status', Refference::REFERRENCE_STATUS_PENDING)
                                    ->get();

        return view('layouts.employee.referredjoblist', ['referrences' => $referrences]);
    }

    public function processReferrence(Request $request){
        $referrence = Refference::find($request->request_id);

        if($request->decision == 'accept') {
            $employee_request = new EmployeeRequest;
            $employee_request->job_id = $referrence->job->id;
            $employee_request->employee = Auth::user()->id;
            $employee_request->refferal_id = $referrence->refferer_id;
            $employee_request->status = JobRequest::JOB_REQUEST_STATUS_AWAITING;
            $employee_request->save();

            // $take_job = new JobTaken;

            // $take_job->job_id = $referrence->job->id;
            // $take_job->employee = Auth::user()->id;
            // $take_job->status = JobRequest::JOB_REQUEST_STATUS_TAKEN;
            // $take_job->save();

            $referrence->status = Refference::REFERRENCE_STATUS_ACCEPTED;
            $referrence->save();
        }
        else {
            $referrence->status = Refference::REFERRENCE_STATUS_REJECTED;
            $referrence->save();
        }

        return redirect()->route('referredjob');

        // $employee_request->status = "Cancelled";
        // $employee_request->save();
        // return redirect()->back();
    }
}
