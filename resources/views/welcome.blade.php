@extends('layouts.app')

@section('content')

<div class="row">
    @foreach($pos as $post => $id)

    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    <a href="/posts/{{$id['id']}}">{{$id['title']}}</a>
                </h4>
            </div>

            <div class="card-body">
                <p class="card-text"><small class="text-muted"><a href="/profile/{{$id['author_id']}}">
                            @foreach($u as $use => $user)
                            @if($user['id'] == $id['author_id'])

                            {{$user['name']}}

                            @endif
                            @endforeach
                        </a></small>
                    <small class="text-muted">
                        <i aria-hidden="true" class="fa fa-comments-o"></i>
                        {{count(App\Models\comment::where('post_id',$id['id'])->get())}}
                        <span>
                            <i aria-hidden="true" class="fa ml-2 fa-heart-o" style="user-select: none;"></i>
                            {{count(App\Models\like::where('post_id',$id['id'])->get())}}
                        </span>
                    </small>
                </p>
            </div>
            <div class="card-footer">
                <p class="card-text">
                    <small class="text-muted">{{date_format(date_create($id['posted_at']),'l d F Y g :i a')}}</small>
                    <br>

                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection