<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($time)
    {
        $timezone = '';
        $greet = '';

        if($time == 'morning') {
            $timezone = '朝';
            $greet = 'おはようございます';
        } elseif($time == 'afternoon') {
            $timezone = '昼';
            $greet = 'こんにちは';
        } elseif($time == 'evening') {
            $timezone = '夕方';
            $greet = 'こんばんは';
        } elseif($time == 'night') {
            $timezone = '夜';
            $greet = 'おやすみ';
        } else {
            $timezone = 'え？いつ';
            $greet = 'スペルミスなのではないでしょうか';
        }

        return view('greeting.greet', [
            'timezone' => $timezone,
            'greet' => $greet
        ]);
    }

    public function random()
    {
        $greetNumber = rand(1, 4);
        $greet = '';

        switch ($greetNumber) {
            case 1:
                $greet = 'おはよう';
                break;
            case 2:
                $greet = 'こんにちは';
                break;
            case 3:
                $greet = 'こんばんは';
                break;
            case 4:
                $greet = 'おやすみ';
                break;
            default:
                $greet = '予期せぬエラーが発生している模様';
                break;
        }

        return view('greeting.random', ['greet' => $greet]);
    }//
}
