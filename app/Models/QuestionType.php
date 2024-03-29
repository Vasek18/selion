<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    protected $table      = 'question_types';
    protected $fillable   = [
        'name',
        'code',
    ];
    public    $timestamps = false;
}
