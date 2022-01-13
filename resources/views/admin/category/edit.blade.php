@extends('layouts.app')

@section('content')
    
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Category Name</Label>
            <input name="name" value={{ $category->name }} class="form-control" type="text" placeholder="Enter category name here!">
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{ url('admin/category') }}" class="btn btn-warning" style="float: right">Back</a>

    </form>
@endsection