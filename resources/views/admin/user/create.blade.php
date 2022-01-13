@extends('layouts.app')

@section('content')
    
    <form action="{{ route('user.addnew') }}" method="POST">
        @csrf
        
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User Name</Label>
            <input name="name"  class="form-control" type="text" >
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User Email</Label>
            <input name="email"  class="form-control" type="text" >
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User Password</Label>
            <input name="password"  class="form-control" type="text" >
        </div>
        
        <input type="submit" value="Create User" class="btn btn-sm btn-primary">

    </form>
@endsection