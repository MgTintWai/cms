@extends('layouts.app')

@section('content')

    <a href="{{  route('posts.create')  }}" class="btn btn-primary mb-3">Add New Posts</a>

    <table class="table-striped table">
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Category Name</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title  }}</td>
                <td>{{ $post->category->name  }}</td>
                <td><img src="/image/author/{{ $post->image }}" width="30px"></td>
                <td class="d-flex">
                    <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning w-10">Edit</a>
                    <a href="{{ route('posts.show',$post->id) }}" class="btn btn-success w-10">View</a>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection