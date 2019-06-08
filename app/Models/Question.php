<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table      = 'questions';
    protected $fillable   = [
        'test_id',
        'name',
        'description',
        'type_id',
        'required',
    ];
    public    $timestamps = false;

    public function type()
    {
        return $this->belongsTo('App\Models\QuestionType', 'type_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
