<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Parsedown;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function new_post(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->get("title");
        $blog->post = $request->get("blog");
        $blog->user_id = Auth::id();
        $blog->save();
        return redirect(url('/'));
    }


    public function markdown(Request $request, Response $response)
    {
        $parser = new Parsedown();
        return $parser->text($request->get("value"));
    }
}
