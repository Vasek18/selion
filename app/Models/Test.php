<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Test extends Model
{
    protected $table      = 'tests';
    protected $fillable   = [
        'name',
        'employer_id',
    ];
    public    $timestamps = false;

    public function competences()
    {
        return $this->belongsToMany('App\Models\Competence', 'test_competences', 'test_id', 'competence_id');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    public function getAnsweredQuestionsCountBy($userId)
    {
        $questionsIds = $this->questions()->get()->pluck('id')->toArray();

        return QuestionUserAnswer
            ::whereIn('question_id', $questionsIds)
            ->where('user_id', $userId)
            ->where('is_right', true)
            ->count();
    }

    // todo походу нужно переделать схему базы с появлением сущности "Пройденные тесты"
    public function scopePassedBy($query, $userID)
    {
        $answeredQuestionsIds = array_unique(
            QuestionUserAnswer::where('user_id', $userID)->pluck('question_id')->toArray()
        );
        $answeredTestsIds = array_unique(Question::whereIn('id', $answeredQuestionsIds)->pluck('test_id')->toArray());

        return $query->whereIn('id', $answeredTestsIds);
    }

    public function scopeCompetence($query, $competenceID)
    {
        $testIDs = DB::table('test_competences')->where('competence_id', $competenceID)->pluck('test_id')->toArray();

        return $query->where(
            'id',
            $testIDs
        );
    }

    public function scopeEmployer($query, $employerID)
    {
        return $query->where('employer_id', $employerID);
    }
}
