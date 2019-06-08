<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table      = 'answers';
    protected $fillable   = [
        'question_id',
        'answer',
        'is_right',
    ];
    public    $timestamps = false;

    public function questions()
    {
        return $this->belongsToMany('App\Models\Question');
    }
}
