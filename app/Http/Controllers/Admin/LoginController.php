<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function showLogin() {
        return view('admin.login');
    }

    public function authenticate(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['username' => $email, 'password' => $password, 'role' => 'Admin'])) {
            return redirect()->intended('admin/dashboard');
        }
        $errors['email'] =  'Credential wrong';
        return redirect()->back()
        ->withErrors($errors);
        return back()->withErrors(['email', 'Credential Wrong Please Insert The Correct Credential']);
    }

    public function dashboard() {
        $data['user'] = Auth::user()->username;
        return view('admin.dashboard', $data);
    }

    public function logout() {
        Auth::logout();
        return dump(Auth::user());
    }
}
