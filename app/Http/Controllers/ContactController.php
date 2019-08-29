<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // 
    // Inqury functions
    //

    public function create()
    {
        return view('user.inqury.index');
    }

    public function confirm(Request $request)
    {
        $contact_confirm = $request -> all();

        // dd($contact_confirm);

        return view('user.inqury.confirm')->with($contact_confirm);
    }

    public function sent(Request $request)
    {
        $contact_sent = $request -> all();

        if($request->action === 'back')
        {
            return redirect()->route('inquiry')->withInput($contact_sent);
        }

        $request->session()->regenerateToken();
        
        Mail::to('support@v-trade.co.jp')->send(new Contact($contact_sent));
        
        return view('user.inqury.thanks');
    }
}
