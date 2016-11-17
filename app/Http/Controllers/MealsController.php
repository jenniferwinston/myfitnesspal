<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function send(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        return view('home');
    }
}
