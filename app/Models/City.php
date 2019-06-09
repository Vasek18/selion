<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table      = 'cities';
    protected $fillable   = [
        'name',
        'coordinates',
    ];
    public    $timestamps = false;
}
