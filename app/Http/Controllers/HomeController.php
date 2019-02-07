<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $categories=Category::all();
        $newposts=Post::latest()->take(5)->get();
        $posts=Post::paginate(2);
        return view('home')->withPosts($posts)
                           ->withNewposts($newposts)
                           ->withCategories($categories);
    }

    public function read($id){
        $post=Post::find($id);
        return view('user.post.read')->withPost($post);
    }

    public function category_posts($id){
        
        $posts=Post::where('category_id',$id)->paginate(5);
        $categories=Category::all();
        $newposts=Post::latest()->take(5)->get();
        return view('user.category.home')->withPosts($posts)
                           ->withNewposts($newposts)
                           ->withCategories($categories);
    }
}
