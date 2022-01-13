@extends('layouts.app')

@section('content')
    
    <form action="{{ route('tags.update',$tag->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Tag Name</Label>
            <input name="name" value={{ $tag->name }} class="form-control" type="text" placeholder="Enter tag name here!">
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{ url('admin/tag') }}" class="btn btn-warning" style="float: right">Back</a>

    </form>
@endsection