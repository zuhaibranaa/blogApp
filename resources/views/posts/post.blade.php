@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="bg-white p-3 post-card">
        <h1>{{$pos['title']}}</h1>
        <div class="mb-3"><small class="text-muted"><a href="/users/{{$pos['author_id']}}">
                    @foreach($user as $use => $author)
                    @if($author['id'] == $pos['author_id'])
                    {{$author['name']}}
                    @endif
                    @endforeach
                </a></small>,
            <small class="text-muted">{{date_format(date_create($pos['posted_at']),'l d F Y g :i a')}}</small>
        </div>
        <div class="post-content">
            {{$pos['content']}}
        </div>
        <p class="mt-3"><span><i aria-hidden="true" class="fa ml-2 fa-heart-o" style="user-select: none;"></i> 0
            </span></p>
    </div>
    <h2 class="mt-2">{{count($comment)}}
        @if(count($comment) >= 2)
        comments
        @else
        comment
        @endif
    </h2>
    @if(Auth::check())
    <div>
        <form method="POST" action="/comment">
            @csrf
            <div class="form-group"><textarea name="content" placeholder="Your comment" class="form-control"></textarea>
                <!---->
            </div>
            <input type="hidden" name="post_id" value="{{$pos['id']}}">
            <input type="hidden" name="post_author_id" value="{{$pos['author_id']}}">
            <div class="form-group text-right">
                <input type="submit" value="Comment" class="btn btn-primary">
                </input>
            </div>
        </form>

    </div>
    @else
    <div role="alert" class="alert alert-warning alert-dismissible">


        You must be signed in to comment.
    </div>
    @endif
    @foreach($comment as $comm => $com)
    <div>
        <div class="card mb-2">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h6>
                        <a href="/profile/1">
                            @foreach($user as $use => $author)
                            @if($author['id'] == $com['author_id'])
                            {{$author['name']}}
                            @endif
                            @endforeach
                        </a>
                    </h6>
                </div>
                <p class="card-text">
                    {{$com['content']}}
                </p>
                <p class="card-text">
                    <small class="text-muted">{{date_format(date_create($com['posted_at']),'l d F Y g :i a')}}</small>
                </p>
            </div>
        </div>
        <!---->
    </div>
    @endforeach
</div>
@endsection