<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function index()
    {
        return view('user.interview.index');
    }

    public function showProfessionals()
    {
        return view('user.interview.audio_professionals');
    }

    public function showSample()
    {
        return view('user.interview.kounoike');
    }
}
