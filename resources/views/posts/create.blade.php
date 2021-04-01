@extends('layouts.app')

@section('content')
<div class="row">
@include('sidebar')
    <div class="col-sm-9">
        <div class="card">
            <div class="card-body">
                                <h1>Create post</h1>

                <form method="POST" action="" accept-charset="UTF-8">
                <input name="_method" type="hidden" value="PUT">
                    <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" required="" name="title" type="text" id="title">

                </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="author_id">Author</label>
                    <select class="form-control" required="" id="author_id" name="author_id">
                        <option value="#">Zuhaib</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="posted_at">Posted at</label>
                    <input type="datetime-local" name="posted_at" class="form-control " required="" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="body" class="form-control"></textarea><br/>
                    <a href="http://127.0.0.1:8001/admin/posts" class="btn btn-secondary">Back</a>
                    <input class="btn btn-primary" type="submit" value="Save">
                </form>
                                    </div>
            </div>
    </div>
</div>





    
@endsection