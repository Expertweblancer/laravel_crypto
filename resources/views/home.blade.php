@extends('layouts.auth')

@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Welcome to {{Auth::user()->name}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
        </ol>
    </div>

    <div class="row row-cards">
        <div class=" col-lg-12">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-value float-right bg-primary shadow-primary stamp stamp-lg"><i class="fa fa-users"></i></div>
                            <div class="text-muted"><h5>Your Balance</h5></div>
                            <h3 class="mb-1">BTC 0.14</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-value float-right stamp stamp-lg bg-secondary shadow-secondary "><i class="fa fa-shopping-cart"></i></div>
                            <div class="text-muted"><h5>Deposit Funds</h5></div>
                            <h3 class="mb-1">BTC 0.82</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-value float-right bg-success shadow-success stamp stamp-lg"><i class="fa fa-briefcase"></i></div>
                            <div class="text-muted"><h5>Total Funds</h5></div>
                            <h3 class="mb-1">BTC 1.02</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-value float-right stamp stamp-lg bg-info shadow-info"><i class="fa fa-usd"></i></div>
                            <div class="text-muted"><h5>Today Income</h5></div>
                            <h3 class="mb-1">BTC 0.21</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sales Status</h3>
                </div>
                <div class="card-body">
                    <div id="echart5" class="chartsh"></div>
                    <div class="col mt-4">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Latest News</h4>
                </div>
                <div class="card-body">
                    <ul class="timeline">
                        <li>
                            <a href="#"><strong>New Projects</strong></a>
                            <a href="#" class="float-right">21 October, 2018</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam </p>
                        </li>
                        <li>
                            <a href="#"><strong>Job Seekers</strong></a>
                            <a href="#" class="float-right">4 October, 2018</a>
                            <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis...</p>
                        </li>
                        <li>
                            <a href="#"><strong>Employees</strong></a>
                            <a href="#" class="float-right">1 September, 2018</a>
                            <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio...</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

          
        <div class="col-sm-12 col-lg-12 col-xl-3">
            <div class="card ">
                <div class="card-header">
                    <h2 class="card-title">Activity Details</h2>
                </div>
                <table class="table card-table">
                    <tr>
                        <td>Wordpress</td>
                        <td class="text-right">
                            <span class="badge badge-primary">25%</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Blog Page</td>
                        <td class="text-right">
                            <span class="badge badge-warning">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Designing websites</td>
                        <td class="text-right">
                            <span class="badge badge-danger">12%</span>
                        </td>
                    </tr>
                    <tr>
                        <td>E commerce Blog</td>
                        <td class="text-right">
                            <span class="badge badge-primary">60%</span>
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail Templates</td>
                        <td class="text-right">
                            <span class="badge badge-secondary">15%</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Business Website</td>
                        <td class="text-right">
                            <span class="badge badge-success">Finished</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Admin Templates</td>
                        <td class="text-right">
                            <span class="badge badge-info">Finished</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Beauty Templates</td>
                        <td class="text-right">
                            <span class="badge badge-warning">20%</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-lg-12 col-xl-9 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Crypt Marketing Values</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Icon</th>
                                    <th>Currency</th>
                                    <th>Price</th>
                                    <th>Market Cap</th>
                                    <th>Volume 1D</th>
                                    <th>Change % (1D)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="assets\images\crypto-currencies\bitcoin.svg" class="w-4 h-4" alt=""></td>
                                    <td>Bitcoin</td>
                                    <td>$ 8309.00</td>
                                    <td>$ 51,191,183,730</td>
                                    <td>$ 10,133,400,000</td>
                                    <td><span class="badge badge-gradient-info"> 0.66%</span></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="assets\images\crypto-currencies\ethereum.svg" class="w-4 h-4" alt=""></td>
                                    <td>Ethereum</td>
                                    <td>$ 425.25</td>
                                    <td>$ 4,48,308,110</td>
                                    <td>$ 193,430,000</td>
                                    <td><span class="badge  badge-primary"> 0.64%</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="assets\images\crypto-currencies\ripple.svg" class="w-4 h-4" alt=""></td>
                                    <td>Ripple</td>
                                    <td>$ 1.2029</td>
                                    <td>$ 7,63,80,043</td>
                                    <td>$ 42,677,430,000</td>
                                    <td><span class="badge  badge-gradient-success"> 0.79%</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="assets\images\crypto-currencies\bitcoincash.svg" class="w-4 h-4" alt=""></td>
                                    <td>Bitcoincash</td>
                                    <td>$ 1547.67</td>
                                    <td>$ 6,14,18,730</td>
                                    <td>$ 40,13,40,000</td>
                                    <td><span class="badge  badge-gradient-warning"> 0.32%</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="assets\images\crypto-currencies\nem.svg" class="w-4 h-4" alt=""></td>
                                    <td>Nem</td>
                                    <td>$ 723.48</td>
                                    <td>$ 19,07,67,295</td>
                                    <td>$ 17,99,90,000</td>
                                    <td><span class="badge  badge-gradient-info"> 6.26%</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="assets\images\crypto-currencies\neo.svg" class="w-4 h-4" alt=""></td>
                                    <td>Neo</td>
                                    <td>$ 149.18</td>
                                    <td>$ 8,44,49,000</td>
                                    <td>$ 7,10,10,000</td>
                                    <td><span class="badge  badge-gradient-danger"> 36.98%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection