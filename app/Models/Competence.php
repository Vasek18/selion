<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $table      = 'competences';
    protected $fillable   = [
        'name',
    ];
    public    $timestamps = false;
}
