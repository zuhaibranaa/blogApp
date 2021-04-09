@extends('layouts.app')

@section('content')

<div class="row">

  @include('sidebar')
  <div class="col-sm-3">
    <div class="card bg-success text-light m-2">


      <div class="card-body">
        <div class="row justify-content-between">
          <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
          <div class="text-right">
            <div class="huge">0</div>
            <div>Posts</div>
          </div>
        </div>
      </div>

      <div class="card-footer">
        <a href="/posts" class="d-flex justify-content-between text-dark">
          <span>Details</span>
          <span><i class="fa fa-arrow-circle-right"></i></span>
        </a>
      </div>
    </div>

  </div>

  <div class="col-sm-3">
    <div class="card bg-primary text-light m-2">


      <div class="card-body">
        <div class="row justify-content-between">
          <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
          <div class="text-right">
            <div class="huge">

            </div>
            <div>Comments</div>
          </div>
        </div>
      </div>

      <div class="card-footer">
        <a href="/comment" class="d-flex justify-content-between text-dark">
          <span>Details</span>
          <span><i class="fa fa-arrow-circle-right"></i></span>
        </a>
      </div>
    </div>

  </div>

  <div class="col-sm-3">
    <div class="card bg-warning text-light m-2">


      <div class="card-body">
        <div class="row justify-content-between">
          <i class="fa fa-users fa-5x" aria-hidden="true"></i>
          <div class="text-right text-dark">
            <div class="huge">{{count(App\Models\User::all())}} Users</div>
            <div>Edit Profile</div>
          </div>
        </div>
      </div>

      <div class="card-footer">
        <a href="/profile" class="d-flex justify-content-between text-dark">
          <span>Edit Your Profile</span>
          <span><i class="fa fa-arrow-circle-right"></i></span>
        </a>
      </div>
    </div>

  </div>
</div>
</div>
@endsection