@extends('layouts.app')

@section('content')
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-2">
                            <div class="card-body text-center">
                                <h2 class="card-title mb-0">{{$user['name']}}</h2> <small
                                    class="card-subtitle mb-2 text-muted">{{$user['email']}}</small>
                                <div class="card-text row mt-3">
                                    <div class="col-md-4"><span class="text-muted d-block">Comments</span>
                                        {{count($comment)}}
                                    </div>
                                    <div class="col-md-4"><span class="text-muted d-block">Posts</span>
                                        {{count($pos)}}
                                    </div>
                                    <div class="col-md-4"><span class="text-muted d-block">Likes</span>
                                        {{count($like)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>All comments</h2>
                        @foreach($comment as $c => $com)
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="/posts/{{$com['post_id']}}">{{$com['content']}}</a></h4>
                                <p class="card-text"><small
                                        class="text-muted">{{date_format(date_create($com['posted_at']),'l d F Y g :i a')}}</small><br>
                                    <small class="text-muted">
                                        @foreach($pos as $p => $post)
                                        @if($com['post_id'] == $post['id'])
                                        On Post <b>{{$post['content']}}</b>
                                        @endif
                                        @endforeach
                                    </small>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <h2>All posts</h2>
                        @foreach($pos as $p => $post)
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="/posts/{{$post['id']}}">{{$post['content']}}</a></h4>
                                <p class="card-text"><small
                                        class="text-muted">{{date_format(date_create($post['posted_at']),'l d F Y g :i a')}}</small><br>
                                    <small class="text-muted"><i aria-hidden="true" class="fa fa-comments-o"></i>
                                        {{count($comment)}}
                                        <i aria-hidden="true" class="fa fa-heart-o ml-2"></i> {{count($like)}}
                                    </small>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection