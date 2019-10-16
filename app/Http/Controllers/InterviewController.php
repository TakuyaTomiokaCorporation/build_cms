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

    public function show1()
    {
        return view('user.interview.kounoike');
    }

    public function show2()
    {
        return view('user.interview.iwai');
    }

    public function show3()
    {
        return view('user.interview.orihara');
    }

    public function show4()
    {
        return view('user.interview.unakami');
    }

    public function show5()
    {
        return view('user.interview.takahashi');
    }

    public function show6()
    {
        return view('user.interview.nomura');
    }

    public function show7()
    {
        return view('user.interview.yamamoto');
    }
}
