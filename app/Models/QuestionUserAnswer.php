<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionUserAnswer extends Model
{
    protected $table      = 'question_user_answers';
    protected $fillable   = [
        'user_id',
        'question_id',
        'is_right',
        'answer',
    ];
    public    $timestamps = false;
}
