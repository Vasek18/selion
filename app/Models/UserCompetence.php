<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCompetence extends Model
{
    protected $table    = 'user_competences';
    protected $fillable = [
        'competence_id',
        'user_id',
        'progress',
    ];

    public function competence()
    {
        return $this->belongsTo('App\Models\Competence');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}