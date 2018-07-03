<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReferredJobController extends Controller
{
    public function index() {
        return view('layouts.employee.referredjoblist');
    }
}
