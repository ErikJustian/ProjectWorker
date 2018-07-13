<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobRequest;
use App\Models\JobTaken;
use App\Models\EmployeeRequest;

class JobTakenController extends Controller
{
    public function index() {
        $jobs_request = EmployeeRequest::select(
            'job_requests.id as job_id',
            'employee_requests.id as request_id',
            'job_requests.title',
            'job_requests.detail',
            'job_requests.status as job_status',
            'employee_requests.status as request_status',
            'job_requests.due_date',
            'employers.name as employer_name',
            'job_requests.employer as employer_id',
            'employers.phone_number'
        )
        ->join('job_requests', 'employee_requests.job_id', '=', 'job_requests.id')
        ->join('employers', 'job_requests.employer', '=', 'employers.user_id')
        ->where('employee_requests.status', '<>', 'Declined')
        ->where('employee_requests.status', '<>', 'Cancelled')
        ->where('job_requests.status', '<>', 'Finished')
        ->where('job_requests.status', '<>', 'Cancelled')
        ->get();

        return view('layouts.employee.jobtaken', ['jobs' => $jobs_request]);
    }

    public function cancelApply(Request $request) {
        $employee_request = EmployeeRequest::find($request->request_id);
        $employee_request->status = "Cancelled";
        $employee_request->save();
        return redirect()->back();
    }
}
