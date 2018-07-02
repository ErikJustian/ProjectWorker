<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Model 
use App\Models\User;
// Auth
use Auth;

class AdminController extends Controller
{
    public function index() {
        return view('admin.addadmin');
    }

    public function data() {
        $user = User::where('role', 'Admin')->where('id', '!=', Auth::user()->id)->get();
        return $user;
    }
    
    public function add(Request $request) {
        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role = 'Admin';
        $user->save();
        return redirect('admin/add');
    }

    public function form(Request $request) {
        return view('admin.addnewuser');
    }

    public function delete(Request $request) {
        $user = User::where('id', $request->id)->first();
        $user->delete();
        return back();
    }
}
