@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="bg-white p-3 post-card">
        <h1>{{$pos['title']}}</h1>
        <div class="mb-3"><small class="text-muted"><a href="/users/{{$pos['author_id']}}">{{$user}}</a></small>,
            <small class="text-muted">{{date_format(date_create($pos['posted_at']),'l d F Y g :i a')}}</small>
        </div>
        <div class="post-content">
            {{$pos['content']}}
        </div>
        <p class="mt-3"><span><i aria-hidden="true" class="fa ml-2 fa-heart-o" style="user-select: none;"></i> 0
            </span></p>
    </div>
    <h2 class="mt-2">1 comment</h2>
    @if(Auth::check())
    <div>
        <div class="form-group"><textarea placeholder="Your comment" class="form-control"></textarea>
            <!---->
        </div>
        <div class="form-group text-right"><button disabled="disabled" class="btn btn-primary">
                <!---->
                Comment
            </button></div>
    </div>
    @else
    <div role="alert" class="alert alert-warning alert-dismissible">


        You must be signed in to comment.
    </div>
    @endif
    <div>
        <div class="card mb-2">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h6><a href="/profile/1">anakin</a></h6>
                    <!---->
                </div>
                <p class="card-text">
                    Hey ! I'm a comment as example.
                </p>
                <p class="card-text"><small class="text-muted">01 April 2021, 11:23</small></p>
            </div>
        </div>
        <!---->
    </div>
</div>
@endsection