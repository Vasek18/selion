<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\UserType');
    }

    public function universities()
    {
        return $this->belongsToMany('App\Models\University', 'user_universities', 'user_id', 'university_id');
    }

    public function university()
    {
        return $this->universities()->first();
    }

    public function getSpecialty()
    {
        $pivot = DB::table('user_universities')->where('user_id', $this->id)->first();

        return $pivot ? $pivot->specialty : '';
    }

    public function competences()
    {
        return $this->hasMany('App\Models\UserCompetence');
    }
}
