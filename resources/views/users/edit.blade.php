@extends('layouts.admin_app')
@section('content')
<div class=" content-area">
  <div class="page-header">
    <h4 class="page-title">Edit User</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" > User</li>
      <li class="breadcrumb-item"><a href="{{ route('users')}}">Manage User</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit User</li>
    </ol>
  </div>
    <div class="main-content">
          <div class="content-wrapper">
        <div class="card p-5" >
            <div class="card-header">
             
                  
           <h5 class="card-title"> You can change user's profile </h5>             
            

            </div>
            <div class="card-content">
            <div class="p-5">

                <form class="form" method="post" action="{{ route('usersUpdate', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput1">User Name</label>
                            <input type="text" id="issueinput1" class="form-control" name="name" data-toggle="tooltip"
                                data-trigger="hover" value="{{ $data->name }}" data-placement="top" data-title="Issue Title">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput2">User Email</label>
                            <input type="text" id="issueinput2" class="form-control" name="email" data-toggle="tooltip"
                                data-trigger="hover" value="{{ $data->email }}"  data-placement="top" data-title="Opened By">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput3">Password</label>
                            <input type="password" id="issueinput3"  class="form-control" name="password" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Date Opened">
                            </div>
                        </div>
 
                    </div>
                   
                     
                    <div class="row">
                         
                        <div class="col-md-6">
                            <br><br>
                            <button type="submit"  class="btn form-control btn-cyan">
                            <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                        <div class="col-md-6">
                        <br><br>
                            <a href="{{ route('users') }}" class=" btn form-control btn-purple"><i class="fa fa-repeat"></i> View all Users</a>

                        </div>
                    </div>
                    <br>

                </div>
                </form>
            </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection