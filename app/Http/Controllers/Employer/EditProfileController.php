<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
class EditProfileController extends Controller
{
    public function index() {
        $user = Auth::user()->employer;
        return view('layouts.employer.employereditprofile', $user);
    }

    public function edit(Request $request) {
        $user = Auth::user()->employer;
        $user->name = $request->fullname;
        $user->phone_number = $request->phone_number;
        $user->detail = $request->detail;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('employerprofile');
    }
}
