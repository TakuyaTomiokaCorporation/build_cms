<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getList(){

        $posts = \DB::table('news')->paginate(5);
        return view('admin.news.home',[
            'posts' => $posts,
        ]);
    }

    public function create(){

        $now = Carbon::now();

        return view('admin.news.create', compact('now'));
    }

    public function confirm(Request $request){

        $news_confirm = $request -> all();

        if($file = $request->file('image')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/news/', $name);
            $news_confirm['image'] = $name;
            };
        
        if($file = $request->file('pdf')){
            $name = uniqid() . $file -> getClientOriginalName();
            $file -> move('images/news/', $name);
            $product_news_confirm['pdf'] = $name;
            };
        
        switch($news_confirm['category'])
        {
            case '新製品情報':
                $news_confirm['class'] = 'tag_product';
                break;
            case '最新情報':
                $news_confirm['class'] = 'tag_news';
                break;
            case 'アーティストインタビュー':
                $news_confirm['class'] = 'tag_artist';
                break;
            case 'イベント情報':
                $news_confirm['class'] = 'tag_event';
                break;
            case 'お知らせ':
                $news_confirm['class'] = 'tag_information';
                break;
        }

        return view('admin.news.confirm')->with($news_confirm);
    }

    public function store(Request $request){
        
        $news_new = $request -> all();
        
        $news = News::create($news_new);

        return redirect()->to(route('news'));
    }

    public function edit($id){

        $now = Carbon::now();
        $news = News::findOrFail($id);

        return view('admin.news.edit', compact('news', 'now'));
    }

    public function update(Request $request, $id){
        
        $news_update = $request -> all();
        $news = News::findOrFail($id);

        switch($news_confirm['category'])
        {
            case '新製品情報':
                $news_confirm['class'] = 'tag_product';
                break;
            case '最新情報':
                $news_confirm['class'] = 'tag_news';
                break;
            case 'アーティストインタビュー':
                $news_confirm['class'] = 'tag_artist';
                break;
            case 'イベント情報':
                $news_confirm['class'] = 'tag_event';
                break;
            case 'お知らせ':
                $news_confirm['class'] = 'tag_information';
                break;
        }

        $news->update($news_update);

        return redirect()->to(route('news'));
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->to(route('news'));
    }


}
