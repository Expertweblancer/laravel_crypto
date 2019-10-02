@extends('layouts.admin_app')
@section('content')
<div class=" content-area">
  <div class="page-header">
    <h4 class="page-title">Add User</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" > Ticket</li>
      <li class="breadcrumb-item"><a href="{{ route('usersCreate')}}">Add a new User</a></li>
      <li class="breadcrumb-item active" aria-current="page">Add User</li>
    </ol>
  </div>
    <div class="main-content">
          <div class="content-wrapper">
        <div class="card p-5">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-tooltip">You can add new user or stuff.</h4>
                 
            </div>
            <div class="card-content p-5">
            <div class="px-3">

                <form class="form" method="post" action="{{ route('usersStore') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput1">User Name</label>
                            <input type="text" id="issueinput1" class="form-control" name="name" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Issue Title">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput2">Email</label>
                            <input type="email" id="issueinput2" class="form-control" name="email" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Opened By">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput3">Password</label>
                            <input type="password" id="issueinput3" class="form-control" name="password" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Date Opened">
                            </div>
                        </div>
                        
                         
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <button type="submit" class="form-control btn btn-raised btn-primary">
                            <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <a href="{{ route('users') }}" class="form-control btn btn-purple"><i class="fa fa-repeat"></i> Back</a>

                        </div>
                    </div>

                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection