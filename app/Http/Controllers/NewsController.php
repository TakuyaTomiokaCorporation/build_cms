<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    /************************************************
     ************************************************
     * 
     * Bellow, related to "user"
     * 
     ***********************************************
     ***********************************************/

    public function getNews(){

        return view();
    }

    /************************************************
     ************************************************
     * 
     * Bellow, related to "admin"
     * 
     ***********************************************
     ***********************************************/

    public function getList(){

        $news = \DB::table('news')->get();

        return view('admin.news.home',[
            'news' => $news,
        ]);
    }

    public function create(){

        return view('admin.news.create');
    }

    public function confirm(Request $request){

        $news_confirm = $request -> all();

        if($file = $request->file('image')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/news/', $name);
            $news_confirm['image'] = $name;
            };
        return view('admin.news.confirm')->with($news_confirm);
    }

    public function store(Request $request){
        
        $news_new = $request -> all();

        $news = News::create($news_new);

        return redirect()->to('/admin/news/');
    }

}
