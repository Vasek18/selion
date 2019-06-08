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
    ];
    public    $timestamps = false;

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
