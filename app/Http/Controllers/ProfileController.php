<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function indexEmployer() {
        $user = Auth::user();
        $profile['username'] = $user->username;
        $profile['role'] = $user->role;
        $profile['type'] = $user->employer->type;
        $profile['name'] = $user->employer->name;
        $profile['job_requested'] = $user->employer->job_requested;
        $profile['detail'] = $user->employer->detail;
        $profile['phone_number'] = $user->employer->phone_number;
        $profile['address'] = $user->employer->address;
        $profile['birthdate'] = $user->employer->birthdate;
        return view('layouts.employer.employerprofile', $profile);
    }
    public function indexEmployee() {
        $user= Auth::user();
        $profile['fullname'] = $user->employee->fullname;
        if($user->employee->success_job != 0) {
            $profile['rating'] = number_format($user->employee->rating / $user->employee->success_job, '2');    
        }
        else {
            $profile['rating'] = number_format(0, '2');
        }
        $profile['phone'] = $user->employee->phone_number;
        $profile['email'] = $user->employee->email;
        $profile['gender'] = $user->employee->gender;
        $profile['address'] = $user->employee->address;
        $profile['birthdate'] = $user->employee->birthdate;

        return view('layouts.employee.employeeprofile', $profile);
    }
    
}
