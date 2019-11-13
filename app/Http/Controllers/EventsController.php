<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EventsController extends Controller
{
    public function getAviotLive02()
    {
        return view('user.events.2019.aviot_live_02');
    }

    public function getAviotLive03()
    {
        return view('user.events.2019.aviot_live_03');
    }
}
