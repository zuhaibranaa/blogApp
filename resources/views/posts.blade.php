@extends('layouts.app')

@section('content')
<div class="row">
@include('sidebar')
    <div class="col-sm-9">
        <div class="card">
            <div class="card-body">
                        <div class="page-header d-flex justify-content-between">
                        <h1>Posts</h1>
                        <a href="posts/create" class="btn btn-primary btn-sm align-self-center">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> Add      </a>
                        </div>
                <table class="table table-striped table-sm table-responsive-md">
                        <caption>{{count($pos)}} Posts</caption>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Posted at</th>
                                <th><i class="fa fa-comments" aria-hidden="true"></i></th>
                                <th><i class="fa fa-heart" aria-hidden="true"></i></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

            @foreach($pos as $post => $id)
                            <tr>
                                <td><a href="#">{{$id['title']}}</a></td>
                                <td><a href="#">Muhammad Zuhaib Shabbir</a></td>
                                <td>{{$id['posted_at']}}</td>
                                <td><span class="badge badge-pill badge-secondary">1</span></td>
                                <td><span class="badge badge-pill badge-secondary">0</span></td>
                                <td>
                                    <a href="posts/{{$id['id']}}/update" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>

                                    <form method="POST" action="posts/destroy/{{$id['id']}}" accept-charset="UTF-8" class="form-inline" data-confirm="Are you sure you want to delete this article?"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="QhM2OqgxFwXeMgpzOrRcORNoAkOkL2h9rbUYIGah">
                                        <button class="btn btn-danger btn-sm" name="submit" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                        </tr>
                @endforeach
                        </tbody>
            </table>
            </div>
        </div>
    </div>
</div>





    
@endsection