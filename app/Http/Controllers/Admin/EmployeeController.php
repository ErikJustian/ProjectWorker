<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// Model
use App\Models\Employee;
use App\Models\User;
class EmployeeController extends Controller
{
    public function index() {
        return view('admin.employee.employeetable');
    }

    public function form() {
        return view('admin.employee.employeeform');
    }

    public function editForm($id) {
        $user = User::find($id);
        $data['id'] = $user->id;
        $data['username'] = $user->username;
        $data['fullname'] = $user->employee->fullname;
        $data['phone_number'] = $user->employee->phone_number;
        $data['gender'] = $user->employee->gender;
        // return $data;
        return view('admin.employee.employeeedit', $data);
    }

    public function edit(Request $request) {
        $user = User::find($request->id);
        if($request->password!=null) {
            $user->password = Hash::make($request->password);
        }
        $user->username = $request->username;
        $user->save();
        $employee = $user->employee;
        $employee->user_id = $user->id;
        $employee->fullname = $request->fullname;
        $employee->email = $request->username;
        $employee->phone_number = $request->phone_number;
        $employee->gender = $request->gender;
        $employee->save();
        return redirect()->route('employeeindex');
    }

    public function register(Request $request) {
        $user = new User();
        $user->username = $request->username;
        $user->role = User::USER_ROLE_EMPLOYEE;
        $user->password = Hash::make($request->password);
        $user->save();
        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->fullname = $request->fullname;
        $employee->email = $request->username;
        $employee->phone_number = $request->phone_number;
        $employee->gender = $request->gender;
        $employee->job_taken = 0;
        $employee->rating = 0;
        $employee->success_job = 0;
        $employee->class_id = 1;
        $employee->commission = 0;
        $employee->deposit_tab = 0;
        $employee->save();
        return redirect()->route('employeeindex');
    }

    public function data() {
        $employee = User::where('role', User::USER_ROLE_EMPLOYEE);
        $employee = $employee->get()->load('employee');
        return $employee;
    }

    public function delete(Request $request) {
        $user = User::find($request->id);
        $employee = Employee::where('user_id', $request->id);
        $user->delete();
        $employee->delete();
        return back();
    }
}
