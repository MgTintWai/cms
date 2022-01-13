@extends('layouts.app')

@section('content')
    
    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Post Title</Label>
            <input name="title" class="form-control" type="text" value="{{ $post->title }}" placeholder="Enter category name here!">
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Description</Label>
            <textarea name="content" id="" cols="30" rows="4" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Choose Featured Image</Label>
            <input name="image" type="file" >
            <img src="/image/author/{{ $post->image }}" width="10%">
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Choose Your Category</Label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id === $post->category_id)
                        selected
                    @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        
        <button class="btn btn-primary" type="submit">Add</button>
        <a href="{{ route('posts.index') }}" class="btn btn-warning" style="float: right">Back</a>
    </form>
@endsection