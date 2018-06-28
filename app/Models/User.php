<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    CONST USER_ROLE_EMPLOYER = 'Employer';
    CONST USER_ROLE_EMPLOYEE = 'Employee';
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $fillable = ['username','password','role'];

    public function employee() {
        return $this->hasOne('App\Models\Employee');
    }

    public function employer() {
        return $this->hasOne('App\Models\Employer', 'user_id', "id");
    }
}
