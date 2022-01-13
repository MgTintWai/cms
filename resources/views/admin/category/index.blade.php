@extends('layouts.app')

@section('content')

    <a href="{{  url('admin/category/create')  }}" class="btn btn-primary mb-3">Add New Category</a>

    <table class="table-striped table">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name  }}</td>
                <td class="d-flex">
                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-warning w-10">Edit</a>
                    <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection