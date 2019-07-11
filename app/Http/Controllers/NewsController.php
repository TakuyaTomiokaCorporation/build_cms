<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('user.news',[
            'title' => 'TE-01gについて',
            'body' => 'この記事はほげほげほげhごえ'
        ]);
    }
}
