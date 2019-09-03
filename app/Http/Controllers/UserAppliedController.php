<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppliedForEvents;

class UserAppliedController extends Controller
{
    public function createAviotLive02Form()
    {
        return view('user.form.2019.aviot_live_02');
    }

    public function confirmAviotLive02Form(Request $request)
    {
        $confirm = $request->all();

        $rules = [
            'email' => 'required|email|unique:applied_for_events,email',
        ];

        $messages = [
            'email.unique' => '入力されたEメールアドレスはすでに使用されています。',
        ];

        $this->validate($request, $rules, $messages);

        return view('user.form.confirm')->with($confirm);
    }

    public function storeAviotLive02Form(Request $request)
    {
        $submit = $request->all();

        if ($request->action =="修正") 
        {
            return redirect()->route('form.top')->withInput($submit);
        }

        $request->session()->regenerateToken();
        $form = AppliedForEvents::create($submit);

        return view('user.form.thanks');
        
    }
}
