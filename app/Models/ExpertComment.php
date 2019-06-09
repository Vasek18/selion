<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertComment extends Model
{
    protected $table    = 'expert_comments';
    protected $fillable = [
        'user_id',
        'test_id',
        'comment',
    ];

    public function scopeUser($query, $userID)
    {
        return $query->where('user_id', $userID);
    }

    public function scopeTest($query, $testID)
    {
        return $query->where('test_id', $testID);
    }

}
