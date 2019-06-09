<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Employer;
use App\Models\Question;
use App\Models\QuestionUserAnswer;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $data['user'] = $user;

        $data['competences'] = $user->competences()->orderBy('progress', 'desc')->get();

        return view('student.profile', $data);
    }

    public function tests(Request $request)
    {
        $data = [];
        $data['competences'] = Competence::all();
        $data['employers'] = Employer::all();

        $tests = false;
        if ($request->employer && !$request->competence) {
            $tests = Test::with(['competences'])->employer($request->employer)->get();
        }
        if ($request->competence && !$request->employer) {
            $tests = Test::with(['competences'])->competence($request->competence)->get();
        }
        if ($request->competence && $request->employer) {
            $tests = Test::with(['competences'])->competence($request->competence)->employer($request->employer)->get();
        }
        if (!$tests) {
            $tests = Test::with(['competences'])->get();
        }
        $data['tests'] = $tests;

        return view('student.tests.index', $data);
    }

    public function showTest(Request $request, Test $test)
    {
        $data = [];

        $data['test'] = $test;
        $data['questions'] = $test->questions()->with(['answers', 'type'])->get();

        return view('student.tests.detail', $data);
    }

    public function answerTest(Request $request, Test $test)
    {
        $userAnswers = [];

        foreach ($request->question as $questionID => $answer) {
            $question = Question::find($questionID);
            $userAnswers[] = [
                'user_id'     => Auth::id(),
                'question_id' => $question->id,
                'is_right'    => $question->isRight($answer),
                'answer'      => $answer,
            ];
        }
        QuestionUserAnswer::insert($userAnswers);

        return redirect(action('StudentController@tests'))->with(['answered' => true]);
    }

    public function university(Request $request)
    {
        $data = [];

        return view('student.university', $data);
    }

    public function portfolio(Request $request)
    {
        $data = [];

        return view('student.portfolio', $data);
    }
}
