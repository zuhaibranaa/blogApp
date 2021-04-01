@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h2>All Posts</h2>
                </div>
                <div class="p-2"></div>
            </div>
            <div class="card-columns">
                @foreach($pos as $post => $id)


                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="/posts/{{$id['id']}}">{{$id['title']}}</a>
                        </h4>
                        <p class="card-text"><small class="text-muted"><a
                                    href="http://127.0.0.1:8001/users/1">Anakin</a></small></p>
                        <p class="card-text"><small class="text-muted">{{$id['posted_at']}}</small><br>
                            <small class="text-muted"><i aria-hidden="true" class="fa fa-comments-o"></i> 1
                                <span><i aria-hidden="true" class="fa ml-2 fa-heart-o" style="user-select: none;"></i> 0
                                </span></small>
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center"></div>
        </div>
    </div>
</div>
@endsection