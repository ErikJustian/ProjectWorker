<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobTaken extends Model
{
  public function employeeDetail() {
    return $this->belongsTo('App\Models\Employee', 'employee', 'user_id');
  }
}
