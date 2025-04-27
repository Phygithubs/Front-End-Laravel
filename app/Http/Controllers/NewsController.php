<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News as ModelsNews;

class NewsController extends Controller
{
    public function index(){
        $latestNews = ModelsNews::orderBy('id','desc')->limit(8)->get();
        // $promotionProducts = ModelsNews::orderBy('id','desc')->where('sale_price','>',0)->limit(4)->get();
        $mostViewedNews = ModelsNews::orderBy('views','desc')->limit(8)->get();
        return view('news',compact('latestNews','mostViewedNews'));
        // return view('news');
    }
}