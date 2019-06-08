<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Employer;
use App\Models\Test;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['user_type' => 'student']);
    }

    public function tests(Request $request)
    {
        $this->middleware('auth');

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

        return view('student.tests', $data);
    }
}
