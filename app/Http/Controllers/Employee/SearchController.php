<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\JobRequest;

class SearchController extends Controller
{
    public function index() {
        $job = JobRequest::get()->where('status',JobRequest::JOB_REQUEST_STATUS_AWAITING);
        dd($job);
    }
    // Untuk mengambil job
    public function takeJob() {
        
    }
    // Untuk reference job
    public function referrenceJob() {

    }
}
