<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table      = 'universities';
    protected $fillable   = [
        'name',
        'city_id',
    ];
    public    $timestamps = false;

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
