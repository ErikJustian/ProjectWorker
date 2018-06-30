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
        return view('layouts.employer.employerprofile', $profile);
    }
    public function indexEmployee() {
        $user= Auth::user();
        $profile['username'] = $user->username;
    }
    
}