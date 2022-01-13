@extends('layouts.app')

@section('content')
    
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div class="form-group mb-2">
            <Label class="mb-1">Enter Tag Name</Label>
            <input name="name" class="form-control" type="text" placeholder="Enter tag name here!">
            {{--  @if ($errors->has('name'))
                <span class="text-danger my-1">{{ $errors->first('name') }}</span>
            @endif  --}}
            
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
        <a href="{{ url('admin/tags') }}" class="btn btn-warning" style="float: right">Back</a>
    </form>
@endsection