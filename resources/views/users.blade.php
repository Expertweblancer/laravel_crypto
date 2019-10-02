@extends('layouts.admin_app')
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Registered Users</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registered Users</li>
        </ol>
    </div>
    <div class="row row-cards">
    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default bg-color">
        <div class="row">
          <div class="col-4">
            <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-wpforms fs-30  text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">{{ $total_count}}</h1>
              <h5 class="font-weight-normal mb-0">Registerd Users</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-dollar fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3"> 123</h1>
              <h5 class="font-weight-normal mb-0">Total Cost</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-wpforms fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">123</h1>
              <h5 class="font-weight-normal mb-0">Today User</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-dollar fs-30 text-white mt-4 "></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">123</h1>
              <h5 class="font-weight-normal mb-0">Today Price</h5>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
    <div class="card p-5">
          <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Management Users</h2>
                       
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{ route('usersCreate') }}"   class="btn btn-indigo"><i class="fa fa-link   "></i> New User</a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <p>{{ $message }}</p>
                </div>
                @endif
            <div class="table-responsive">      
                <table class="table card-table table-vcenter text-nowrap">
                    <tr>
                      
                        <th> Name</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th></th>
                        <th></th>
                        <!-- <th></th>
                        <th></th> -->
                    </tr>
                    @foreach($data as $row)
                    <tr>
                         <td><a>{{ $row->name }}</a></td>
                        <td><a > {{ $row->email }}</a></td>
                        <td><a > {{ $row->created_at }} </a></td>
                        <td><a> {{ $row->updated_at }} </a></td>
                        <td>
                            <a href="{{ route('usersEdit', ['id'=> $row->id]) }}" class="form-control btn-sm btn btn-primary" style="color:white"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('usersDestroy', ['id'=> $row->id]) }}">
                                 @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" id="click2" class="form-control  btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                         </td>
                         
                    </tr>
                    @endforeach
                </table>
                

            </div>
            <div class="row">
                <div class="col-md-12" style="padding-left:72%">
                {!! $data->links() !!}

                </div>
            </div>    
        </div>
    </div>
</div>
 

 
@endsection