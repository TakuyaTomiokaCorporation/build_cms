<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;

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

        $posts = \DB::table('news')->get();
        // dd($posts);
        return view('admin.news.home',[
            'posts' => $posts,
        ]);
    }

    public function create(){

        $today = Carbon::now()->format('Y-m-d');
        

        return view('admin.news.create',[
            'today' => $today,
        ]);
    }

    public function confirm(Request $request){

        $news_confirm = $request -> all();

        // concatnate date and time for creating book_date
        $news_confirm['book_date'] = $request->date .' '.$request->time;


        if($file = $request->file('image')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/news/', $name);
            $news_confirm['image'] = $name;
            };
        
        if($file = $request->file('pdf')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/product_news/', $name);
            $product_news_confirm['pdf'] = $name;
            };


        return view('admin.news.confirm')->with($news_confirm);
    }

    public function store(Request $request){
        
        $news_new = $request -> all();

        $news = News::create($news_new);

        return redirect()->to('/admin/news/');
    }

}
