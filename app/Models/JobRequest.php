<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
  CONST JOB_REQUEST_STATUS_AWAITING = 'Awaiting Request';
  CONST JOB_REQUEST_STATUS_TAKEN = "TAKEN";
}
