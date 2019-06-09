<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view(
            'auth.login'
        );
    }
}
