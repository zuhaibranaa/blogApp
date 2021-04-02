@extends('layouts.app')

@section('content')
<div class="row">
    @include('sidebar')
    <div class="col-sm-9">
        <div class="card">
            <div class="card-body">
                <h1>Edit post</h1>

                <form method="POST" action="/posts/{{$post['id']}}" accept-charset="UTF-8">
                    @csrf
                    <input type="hidden" name="_method" value="put" />
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" required="" value="{{$post['title']}}" name="title" type="text"
                            id="title">

                    </div>

                    <div class="form-group">
                        <label for="author_id">Author</label>
                        <select class="form-control" required="" id="author_id" name="author_id">
                            <option value="{{Auth::check()}}">{{$author}}</option>
                        </select>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="body" class="form-control">{{$post['content']}}</textarea><br />
                            <a href="/posts" class="btn btn-secondary">Back</a>
                            <input class="btn btn-primary" type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>






@endsection