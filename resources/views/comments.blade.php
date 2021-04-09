@extends('layouts.app')

@section('content')
<div class="row">
    @include('sidebar')
    <div class="col-sm-9">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h1>Comments</h1>
                </div>

                <table class="table table-striped table-sm table-responsive-md">
                    <caption>2 comments</caption>
                    <thead>
                        <tr>
                            <th>Content</th>
                            <th>Post</th>
                            <th>Author</th>
                            <th>Posted at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="">hi</a></td>
                            <td><a href="">hasjdahsud</a></td>
                            <td><a href="">Zuhaib</a></td>
                            <td>01/04/2021 20:42:33</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>

                                <form method="POST" action="" accept-charset="UTF-8" class="form-inline"
                                    data-confirm="Are you sure you want to delete this comment?"><input name="_method"
                                        type="hidden" value="DELETE">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" name="submit" type="submit"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">

                </div>
            </div>
        </div>
    </div>
</div>



@endsection