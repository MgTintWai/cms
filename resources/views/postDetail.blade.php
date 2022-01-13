@extends('layout')

@section('content')
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

        <!--Featured Image-->
        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

            <img src="/image/author/{{ $posts->image }}" class="img-fluid" alt="">

        </div>
        <!--/.Featured Image-->

        <!--Card-->
        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

            <!--Card content-->
            <div class="card-body text-center">

            <p class="h5 my-4">What is MDB?</p>

            <div class="row">
                <div class="col-md-3"><small>Category: <a href="" class="badge badge-primary">{{ $posts->category->name }}</a></small></div>
                <div class="col-md-3"><small>Tags: 
                    @foreach ($posts->tags as $tag)
                    <a href="" class="badge badge-success">{{ $tag->name }}</a>
                    @endforeach
                </small></div>
                <div class="col-md-3"><small>Author: <a href="" class="badge badge-primary">Admin</a></small></div>
                <div class="col-md-3"><small>Date: <a href="" class="badge badge-primary">{{ $posts->created_at->diffForHumans() }}</a></small></div>
            </div>

            <p class="mt-4">
                {{ $posts->content }}
            </p>
            </div>
        </div>
        <!--/.Card-->

        <!--Comments-->
        <div class="card card-comments mb-3 wow fadeIn" style="visibility: hidden; animation-name: none;">
            @include('comment')
        </div>
        <!--/.Comments-->

        

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

        <!--Card: Jumbotron-->
        <div class="card blue-gradient mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

            <!-- Content -->
            <div class="card-body text-white text-center">

            <h4 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
            </h4>
            <p>
                <strong>Best &amp; free guide of responsive web design</strong>
            </p>
            <p class="mb-4">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video
                and written versions available. Create your own, stunning website.</strong>
            </p>
            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-md waves-effect waves-light">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
            </a>

            </div>
            <!-- Content -->
        </div>
        <!--Card: Jumbotron-->

        <!--Card : Dynamic content wrapper-->
        <div class="card mb-4 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

            <div class="card-header">All Tags List</div>

            <!--Card content-->
            <div class="card-body">           
                @foreach ($tags as $tag)
                    <a href="{{ route('post.tag',$tag->slug) }}" class="badge badge-success ">#{{ $tag->name }}</a>
                @endforeach
            </div>

        </div>
        <!--/.Card : Dynamic content wrapper-->

        <!--Card-->
        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

            <div class="card-header">Related articles</div>

            <!--Card content-->
            <div class="card-body">

            <ul class="list-unstyled">
                @foreach ($relatedPost as $r)
                <li class="media mb-4">
                    <img class="mask rgba-white-slight waves-effect waves-light border-rounded" width="60" src="/image/author/{{ $r->image }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">{{ $r->title }}</h5>
                        </a>
                        {{ substr($r->content,0,60) }}
                    </div>
                </li>
                <hr>
                @endforeach
            </ul>

            </div>

        </div>
        <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
@endsection