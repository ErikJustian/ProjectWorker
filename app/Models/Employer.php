<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
  protected $fillable = ['type','user_id','name','job_requested','detail','phone_number'];
}
