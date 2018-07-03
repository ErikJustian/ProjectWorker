<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantController extends Controller
{
    public function index() {
        return view('layouts.employer.applicantslist');
    }
}
