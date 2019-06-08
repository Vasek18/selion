<?php

namespace App\Http\Controllers;

class EmployerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['user_type' => 'employer']);
    }
}
