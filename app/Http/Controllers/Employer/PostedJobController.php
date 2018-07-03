<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostedJobController extends Controller
{
    public function index() {
        return view('layouts.employer.employerpostedjob');
    }
}
