<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class UserController extends Controller
{
    public function getAllInfo(){
        $posts = \DB::table('news')->latest()->get();

        return view('user.home', compact('posts'));
    }

    public function show($id){
        $news = News::findOrFail($id);
        // dd($news);
        return view('user.news', compact('news'));
    }

}
