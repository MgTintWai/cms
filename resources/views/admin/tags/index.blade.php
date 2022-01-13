@extends('layouts.app')

@section('content')

    <a href="{{  url('admin/tags/create')  }}" class="btn btn-primary mb-3">Add New Tag</a>

    <table class="table-striped table">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name  }}</td>
                <td class="d-flex">
                    <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-warning w-10">Edit</a>
                    <form action="{{ route('tags.destroy',$tag->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection