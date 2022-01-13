<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug){
        $posts = Post::where('slug',$slug)->first();
        $category = Category::find($posts->category_id);
        $relatedPost = $category->post()->take(5)->get();
        return view('postDetail',compact('posts','relatedPost'));
    }
    public function postByCategory($slug){
        $categories = Category::where('slug',$slug)->first();
        $posts = $categories->post()->get();
        return view('index',compact('posts'));
    }
    public function postByTag($slug){
        $tags = Tag::where('slug',$slug)->first();
        $posts = $tags->posts()->get();
        return view('index',compact('posts'));
    }
}
