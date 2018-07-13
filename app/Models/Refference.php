<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refference extends Model
{
    CONST REFERRENCE_STATUS_PENDING = "Pending";
    CONST REFERRENCE_STATUS_ACCEPTED = "Accepted";
    CONST REFERRENCE_STATUS_REJECTED = "Rejected";

    public function referrer() {
        return $this->belongsTo('App\Models\Employee', 'refferer_id', 'user_id');
    }

    public function job() {
        return $this->belongsTo('App\Models\JobRequest', 'job_id');
    }
}
