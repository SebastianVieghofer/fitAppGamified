<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ReadController extends Controller
{
    public function randomWorkout(){
        $randomUser = User::all()->random();
        return view('workout')->with('randomUser', $randomUser);
        //return User::all();
    }
}
