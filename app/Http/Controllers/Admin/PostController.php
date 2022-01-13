<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        // dd($request->all());
        $file = $request->file('image');

        $file_name = uniqid().'_'.$request->image->getClientOriginalName();

        $file->move(public_path().'/image/author/',$file_name);

        $post=Post::create([
            'title'=>$request->title, 
            'slug' =>Str::slug($request->title),
            'category_id'=>$request->category_id,
            'image'=>$file_name,
            'content'=>$request->content
        ]);
        
        $post->tags()->attach($request->tags);

        return redirect('admin/posts')->with('success',"Post Created Successfull");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('admin.posts.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $old_name = $post->title;
        
        if($request->hasFile('image')){

            $file = $request->file('image');
            $file_name = uniqid().'_'.$request->image->getClientOriginalName();
            $file->move(public_path().'/image/author/',$file_name);

        }else{
            $file_name = $post->image;
        }
        $post->title       = $request->title;
        $post->slug        = Str::slug($request->title);
        $post->image       = $file_name;
        $post->content     =$request->content;
        $post->category_id =$request->category_id;      
        
        $post->save();
        return redirect('admin/posts')->with('success',"$old_name is successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $name = $post->name;
        $post->delete();
        return redirect('admin/posts')->with('danger', "$name Category is delete Success !");
    }
}
