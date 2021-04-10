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
                    <caption>{{count($comment)}} comments</caption>
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
                        @foreach($comment as $comments => $id)
                        <tr>
                            <td><a href="">{{$id['content']}}</a></td>
                            <td>
                                @foreach($post as $pos => $p)
                                @if($p['id'] == $id['post_id'])
                                <a href="">{{$p['title']}} </a>
                                @endif
                                @endforeach

                            </td>
                            <td><a href="">Zuhaib</a></td>
                            <td>{{date_format(date_create($id['posted_at']),'l d F Y g :i a')}}</td>
                            <td>

                                <form method="POST" action="/comment/{{$id['id']}}" accept-charset="UTF-8"
                                    class="form-inline" data-confirm="Are you sure you want to delete this comment?">
                                    <input name="_method" type="hidden" value="DELETE">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" name="submit" type="submit"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">

                </div>
            </div>
        </div>
    </div>
</div>



@endsection