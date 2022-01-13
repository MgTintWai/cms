@extends('layouts.app')

@section('content')
    
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Post Title</Label>
            <input name="title" class="form-control" type="text" placeholder="Enter category name here!">
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Description</Label>
            <textarea name="content" id="" cols="30" rows="4" class="form-control"></textarea>
        </div>
        {{--  For Tag  --}}
        <div class="form-group mb-3">
            <Label class="mb-2 mt-2">Choose Tag</Label>
            <div class="checkbox">
                @foreach ($tags as $tag)
                    <label for=""> {{ $tag->name}}
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                    </label>
                @endforeach
            </div>
        </div>
        {{--  End Tag  --}}
        <div class="form-group mb-2">
            <Label class="mb-1">Choose Your Category</Label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Choose Featured Image</Label>
            <input name="image"  type="file">
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
        <a href="{{ route('posts.index') }}" class="btn btn-warning" style="float: right">Back</a>
    </form>
@endsection