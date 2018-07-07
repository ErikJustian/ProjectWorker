<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
  CONST JOB_REQUEST_STATUS_AWAITING = 'Awaiting Request';
  CONST JOB_REQUEST_STATUS_TAKEN = "TAKEN";
  
  public function user() {
    return $this->belongsTo('App\Models\Employer', 'employer', 'user_id');
  }

  public function category() {
    return $this->belongsTo('App\Models\Category', 'category_id');
  }
 
}
