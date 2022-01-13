@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Title         : {{  $posts->title  }}</h3>
            <p >Category Name : {{ $posts->category->name }}</p>
            <p>Description    : {{ $posts->content }}</p>
            <div class="mt-5">
                <a href="{{  route('posts.create')  }}" class="btn btn-success mb-3">Add New Post</a>
                <a href="{{  route('posts.index')  }}" class="btn btn-primary mb-3">View All Post</a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/image/author/{{ $posts->image }}" width="100%">
        </div>
        
    </div>

@endsection