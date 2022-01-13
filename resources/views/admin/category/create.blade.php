@extends('layouts.app')

@section('content')
    
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Category Name</Label>
            <input name="name" class="form-control" type="text" placeholder="Enter category name here!">
            {{--  @if ($errors->has('name'))
                <span class="text-danger my-1">{{ $errors->first('name') }}</span>
            @endif  --}}
            
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
        <a href="{{ url('admin/category') }}" class="btn btn-warning" style="float: right">Back</a>
    </form>
@endsection