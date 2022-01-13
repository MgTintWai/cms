@extends('layouts.app')

@section('content')
{{--  For Count  --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-warning" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fas fa-tags text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">
                            
                            </p>
                            <a href="#" class="text-white">Tag</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $tagCount }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fas fa-bars text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">
                            
                            </p>
                            <a href="#" class="text-white">Category</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $categoryCount }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fas fa-money-check text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">
                            
                            </p>
                            <a href="#" class="text-white">Post</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $postCount }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success" style="height:7rem;">
                <div class="card-body">
                    <h<div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fas fa-user text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">
                            
                            </p>
                            <a href="#" class="text-white">User</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $userCount }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--  End Count  --}}

{{--  For Post Table  --}}
<table class="table-striped table mt-5">
    <tr>
        <td>No</td>
        <td>Title</td>
        <td>Category Name</td>
        <td>Image</td>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title  }}</td>
            <td>{{ $post->category->name  }}</td>
            <td><img src="/image/author/{{ $post->image }}" width="50px"></td>
            
        </tr>
    @endforeach
</table>
{{--  End Post Table  --}}

{{--  For List Group  --}}
    <div class="row mt-5 mb-5">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item bg-primary text-white">Category Lists</li>
                @php
                    $i=1;
                @endphp
                @foreach ($categories as $category)
                    <li class="list-group-item">
                        <span class="float-left">
                            <?php echo $i;$i++; ?>
                        </span>
                        <span class="badge badge-success text-warning" style="float: right;">{{ $category->name }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item bg-warning text-white">Tag Lists</li>
                @php
                    $i=1;
                @endphp
                @foreach ($tags as $tag)
                    <li class="list-group-item">
                        <span class="float-left">
                            <?php echo $i;$i++; ?>
                        </span>
                        <span class="badge badge-success text-warning" style="float: right;">{{ $tag->name }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item bg-danger text-white">User Lists</li>
                @php
                    $i=1;
                @endphp
                @foreach ($users as $user)
                    <li class="list-group-item">
                        <span class="float-left">
                            <?php echo $i;$i++; ?>
                        </span>
                        <span class="badge badge-success text-warning" style="float: right;">{{ $user->name }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
{{--  End List Group  --}}

@endsection
