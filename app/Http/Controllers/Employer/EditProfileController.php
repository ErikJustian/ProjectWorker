<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditProfileController extends Controller
{
    public function index() {
        return view('layouts.employer.employereditprofile');
    }
}
