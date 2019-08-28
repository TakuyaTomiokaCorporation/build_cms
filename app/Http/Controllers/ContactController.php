<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 
    // Inqury functions
    //

    public function getInqury()
    {
        return view('user.inqury.index');
    }

    public function getInquryConfirm()
    {
        return view('user.inqury.confirm');
    }

    public function getInquryThanks()
    {
        return view('user.inqury.thanks');
    }
}
