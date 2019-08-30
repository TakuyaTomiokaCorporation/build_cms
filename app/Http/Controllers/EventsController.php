<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function getAviotLive02()
    {
        return view('user.events.2019.aviot_live_02');
    }
}
