<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class news_detail2 extends Controller
{
    public function index($id){
        $detail = News::orderBy('id','desc')->where('id',$id)->first();
        $detail -> views = $detail -> views + 1;
        $detail -> save();
        return view('news-detail2',compact('detail'));
    }
}