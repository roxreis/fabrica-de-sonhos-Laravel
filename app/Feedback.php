<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['feedback','emailFeedback'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'feedbacks';
}
