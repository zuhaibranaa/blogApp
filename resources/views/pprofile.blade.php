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
                                        0
                                    </div>
                                    <div class="col-md-4"><span class="text-muted d-block">Posts</span>
                                        2
                                    </div>
                                    <div class="col-md-4"><span class="text-muted d-block">Likes</span>
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Latest comments</h2>
                    </div>
                    <div class="col-md-6">
                        <h2>Latest posts</h2>
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="http://127.0.0.1:8001/posts/asdasda">asdasda</a></h4>
                                <p class="card-text"><small class="text-muted">01 April 2021, 22:02</small><br> <small
                                        class="text-muted"><i aria-hidden="true" class="fa fa-comments-o"></i> 0
                                        <i aria-hidden="true" class="fa fa-heart-o ml-2"></i> 1
                                    </small></p>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title"><a href="http://127.0.0.1:8001/posts/hello-world">Hello World</a>
                                </h4>
                                <p class="card-text"><small class="text-muted">01 April 2021, 11:23</small><br> <small
                                        class="text-muted"><i aria-hidden="true" class="fa fa-comments-o"></i> 0
                                        <i aria-hidden="true" class="fa fa-heart-o ml-2"></i> 1
                                    </small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection