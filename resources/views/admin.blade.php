@extends('layouts.admin_app')

@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row row-cards">
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-primary shadow-primary">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-cube text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Company Revenue</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white mb-0">
                        <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-secondary shadow-secondary">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-receipt text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Projects</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">674</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white mb-0">
                        <i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>  Completed Projects
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-info shadow-info">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                        <i class="mdi mdi-poll-box text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Profits</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">$9384</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white mb-0">
                        <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Monthly Profits
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-success shadow-success">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-account-location text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Employees</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">432</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white  mb-0">
                        <i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>Employees Growth
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Company profit</h3>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <div id="morrisBar2" class="chartsh"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.62" data-thickness="6" data-color="#623AA2"><div class="chart-circle-value">50%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 67</strong></div>
                            <div class="text-muted ">Customers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.42" data-thickness="6" data-color="#fbc434"><div class="chart-circle-value">42%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 76</strong></div>
                            <div class="text-muted ">Total Sales</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.37" data-thickness="6" data-color="#1e63c3"><div class="chart-circle-value">17%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 17</strong></div>
                            <div class="text-muted "> New Orders</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.42" data-thickness="6" data-color="#21a544"><div class="chart-circle-value">37%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 38</strong></div>
                            <div class="text-muted "> Invoice</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    </div>
@endsection