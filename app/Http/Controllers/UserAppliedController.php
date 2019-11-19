<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event03;
use Carbon\Carbon;

class UserAppliedController extends Controller
{
    public function createAviotLive03Form()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $close = Carbon::parse('2019-11-21 00:00:00');

        return view('user.form.2019.aviot_live_03',[
            'now' => $now,
            'close' => $close,
        ]);
    }

    public function confirmAviotLive03Form(Request $request)
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

    public function storeAviotLive03Form(Request $request)
    {
        $submit = $request->all();

        if ($request->action =="修正") 
        {
            return redirect()->route('form.top')->withInput($submit);
        }

        $request->session()->regenerateToken();
        $form = Event03::create($submit);

        return view('user.form.thanks');
        
    }
}
