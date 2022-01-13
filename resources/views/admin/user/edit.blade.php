@extends('layouts.app')

@section('content')
    
    <form action="{{ url('admin/user',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User Name</Label>
            <input name="name" value={{ $user->name }} class="form-control" type="text" >
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User Email</Label>
            <input name="email" value={{ $user->email }} class="form-control" type="text" >
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User Password</Label>
            <input name="password"  class="form-control" type="text" >
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User FacebookLink</Label>
            <input name="facebook_link" value={{ $user->profile->facebook_link }} class="form-control" type="text" >
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User YoutubeLink</Label>
            <input name="youtube_link" value={{ $user->profile->youtube_link }} class="form-control" type="text" >
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter User YoutubeLink</Label>
            <input name="image"  type="file" >
            <img src="{{ asset('profile/'.$user->profile->profile_image) }}" width="10%" alt="">
        </div>
        <div class="form-group mb-2">
            <Label class="mb-1">Enter About</Label>
            <textarea name="about" id="" cols="30" rows="4" class="form-control">{{ $user->profile->about }}</textarea>
        </div>
        <input type="submit" value="Update Profile" class="btn btn-sm btn-primary">
    </form>
@endsection