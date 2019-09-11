<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EventsController extends Controller
{
    public function getAviotLive02()
    {
        // $now = Carbon::now()->format('Y-m-d H:i:s');
        // $open = Carbon::parse('2019-09-03 19:00:00');

        return view('user.events.2019.aviot_live_02',[
            'now' => $now,
            'open' => $open,
        ]);
    }
}
