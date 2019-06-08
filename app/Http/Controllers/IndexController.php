<?php

namespace App\Http\Controllers;

use App\Models\UserType;

class IndexController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view(
            'welcome',
            [
                'user_types' => UserType::all(),
            ]
        );
    }
}
