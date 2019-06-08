<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Employer;
use App\Models\Test;
use Illuminate\Support\Facades\Request;

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
        $data['tests'] = Test::all(); // todo фильтрация

        return view('student.tests', $data);
    }
}
