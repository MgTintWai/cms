@extends('layouts.app')

@section('content')

    <a href="{{  route('user.add')  }}" class="btn btn-primary mb-3">Add New User</a>

    <table class="table-striped table">
        <tr>
            <td>No</td>
            <td>Image</td>
            <td>Name</td>
            <td>Role</td>
            <td>Set Permission</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <img width="30px" src="/profile/{{ $user->profile->profile_image}}" alt="">
                </td>
                <td>{{ $user->name  }}</td>
                <td>
                    @if ($user->is_admin == 1)
                        Admin
                    @else
                        User
                    @endif
                </td>
                <td class="d-flex">
                    @if ($user->is_admin == 0)
                        <a href="{{ route('user.edit.role',[1,$user->id])}}" class="btn btn-warning w-10">set admin</a>
                    @else
                        <a href="{{ route('user.edit.role',[0,$user->id])}}" class="btn btn-success w-10">set user</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection