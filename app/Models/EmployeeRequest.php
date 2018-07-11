<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeRequest extends Model
{
  public function employeerel() {
    return $this->hasOne('App\Models\Employee', 'user_id', 'employee');
  }
}
