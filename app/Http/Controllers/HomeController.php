<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index() {
        $posts = DB::table('posts')
                ->join('categories','posts.category_id','categories.id')
                ->select('posts.*','categories.name','categories.slug')->paginate(2);
        return view('pages.index',compact('posts'));
    }

    public function about() {
        return view('pages.about');
    }
    public function contact() {
        return view('pages.contact');
    }
}
