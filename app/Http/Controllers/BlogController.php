<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     *
     * Returns a specific blog entry
     *
     * @param Request $request
     * @param $id
     */
    public function blog(Request $request, $id) {
        $full = Blog::orderBy("Created_at", "asc")->get();
        $blog = Blog::where("id", $id)->first();
        return view('post')->with("blog", $blog)->with("full", $full);
    }

    public function index() {
        $latest = Blog::orderBy("created_at", "desc")->first();
        $full = Blog::orderBy("Created_at", "asc")->get();
        $blogs = Blog::orderBy("created_at", "desc")->paginate(1);
        return view('welcome')->with("blogs", $blogs)->with("latest", $latest)->with("full", $full);
    }
}
