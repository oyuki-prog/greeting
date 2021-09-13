<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreewordController extends Controller
{
    public function word($word)
    {
        return view('freeword.word', ['word' => $word]);
    }//
}
