<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'username' => 'required|string|email',
            'type' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        $user = User::create([
            'username' => $data['username'],
            'role' => 'Employer',
            'password' => Hash::make($data['password']),
        ]);

        $user->Employer= Employer::create([
            'user_id' => $user->id,
            'type' => $data['type'],
            'name' => $data['name'],
            'detail' => $data['detail'],
            'job_requested' => '0',
            'phone_number' => $data['phone_number'],
            'gender' => $data['gender'],
            'address' => $data['address']
        ]); 
        return $user;
    }
}
