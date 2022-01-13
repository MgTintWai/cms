@extends('layout')

@section('content')

    <!--Grid row-->
    <div class="row mb-4 wow fadeIn">
        @foreach ($posts as $post)
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
            <!--Card-->
            <div class="card">
                <!--Card image-->
                <div class="view overlay">
                    <div class="embed-responsive embed-responsive-16by9 rounded-top">
                    <img class="embed-responsive-item img-fluid" src="/image/author/{{ $post->image }}" allowfullscreen>
                    </img>
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <small>Category:</small>
                    <a href="">
                        <span class="badge badge-primary">{{ $post->category->name }}</span>
                    </a>
                    <small>Tags:</small>
                    @foreach ($post->tags as $tag)
                        <a href="">
                            <span class="badge badge-success">{{ $tag->name }}</span>
                        </a>
                    @endforeach
                    
                    <!--Text-->
                    <p class="card-text">
                        {{ Str::limit($post->content, 100) }}
                    </p>
                    <a href="{{ route('post.detail',$post->slug) }}" class="btn btn-primary btn-md">Start Tutorial
                        <i class="fas fa-download ml-2"></i>
                    </a>
                </div>
            </div>
            <!--/.Card-->
        </div>
        <!--Grid column-->
        @endforeach
    </div>

    <!--Pagination-->
    <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">
            <!--Arrow left-->
            <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>

            <li class="page-item active">
            <a class="page-link" href="#">1
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">5</a>
            </li>

            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>
    </nav>
    <!--Pagination-->
@endsection