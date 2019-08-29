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

    public function getConfirm(UserRegister $request)
    {
        $validatedData = $request;
        // dd($validatedData);
        return view('user.support.confirm', compact('validatedData'));
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
