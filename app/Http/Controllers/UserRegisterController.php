<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegister;

class UserRegisterController extends Controller
{
    public function getSupport()
    {
        return view('user.support');
    }

    public function getProductRegistration()
    {
        return view('user.support.registration');
    }

    public function getConfirm(Request $request)
    {
        $confirm = $request -> all();
        // dd($confirm);
        return view('user.support.confirm')->with($confirm);
    }

    public function getProductThanks()
    {
        return view('user.support.thanks');
    }

    public function getPnkThanks()
    {
        return view('user.support.pnk_thanks');
    }

}
