<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>Liberation</title>
    <!-- Title -->
    <link rel="stylesheet" href="{{ asset('assets\fonts\fonts\font-awesome.min.css') }}">
    <!-- Sidemenu Css -->
    <link href="{{ asset('assets\plugins\fullside-menu\css\style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\fullside-menu\waves.min.css') }}" rel="stylesheet">
    <!-- Dashboard Css -->
    <link href="{{ asset('assets\css\dashboard.css') }}" rel="stylesheet">
    <!-- Morris.js Charts Plugin -->
    <link href="{{ asset('assets\plugins\morris\morris.css') }}" rel="stylesheet">
    <!-- Custom scroll bar css-->
    <link href="{{ asset('assets\plugins\charts-c3\c3-chart.css')}}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.css') }}" rel="stylesheet">
    <!---Font icons-->
    <link href="{{ asset('assets\css\icons.css') }}" rel="stylesheet ">
    <link href="{{ asset('assets\plugins\calendar2\css\tui-time-picker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\calendar2\css\tui-date-picker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\calendar2\css\tui-calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\calendar2\css\default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\calendar2\css\icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  </head>
  <body class="">
      <div id="global-loader"></div>
      <div class="page">
        <div class="page-main">
          <div class="app-header1 header py-1 d-flex">
            <div class="container-fluid">
              <div class="d-flex">
                <a class="header-brand" href="{{ url('admin')}}">
                  <img src="{{asset('assets\images\brand\logo.png')}}" class="header-brand-img" alt="adminor logo">
                </a>
                <div class="menu-toggle-button">
                  <a class="nav-link wave-effect" href="#" id="sidebarCollapse">
                    <span class="fa fa-bars"></span>
                  </a>
                </div>
                <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                  <div class="p-2">
                    <form class="input-icon" action=" " method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="input-icon-addon">
                        <i class="fe fe-search"></i>
                      </div>
                      <input type="search" name="item" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                    </form>
                  </div>
                  <div class="dropdown d-none d-md-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                      <i class="fa fa-expand" id="fullscreen-button"></i>
                    </a>
                  </div>
                <div class="dropdown d-none d-md-flex ">
                    <a class="nav-link icon " data-toggle="dropdown">
                      <i class="fe fe-grid floating"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <ul class="drop-icon-wrap p-1">
                        <li>
                          <a class="drop-icon-item">
                            <i class="fe fe-mail text-dark"></i>
                            <span class="block"> E-mail</span>
                          </a>
                        </li>
                        <li>
                          <a  class="drop-icon-item">
                            <i class="fe fe-calendar text-dark"></i>
                            <span class="block">calendar</span>
                          </a>
                        </li>
                        <li>
                          <a class="drop-icon-item">
                            <i class="fe fe-map-pin text-dark"></i>
                            <span class="block">map</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="dropdown text-center selector">
                    <a href="#" class="nav-link leading-none" data-toggle="dropdown">
                      <span class="avatar avatar-sm brround cover-image" data-image-src="{{asset('assets/images/faces/profile.png') }}"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                      <div class="text-center">                      
                        <div class="dropdown-divider"></div>
                      </div>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="nav-sidebar">
              <ul class="list-unstyled components" id="accordion">
                <div class="user-profile">
                  <div class="dropdown user-pro-body">
                    <div><img src="{{ asset('assets\images\faces\profile.png') }}" alt="user-img" class="img-circle"></div>
                    <div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold"> {{Auth::user()->name}}</span>  </a>
                    </div>
                  </div>
                </div>
                <li class="">
                  <a href="{{url('admin')}}"  class="wave-effect" >
                    <i class="fa fa-desktop mr-2"></i> User Dashboard
                  </a>
                </li>
                <li>
                  <a href=" " class=" wave-effect"><i class="fa fa-cubes mr-2"></i> Statistics</a>
                </li>               
                <li>
                  <a href=" " class="wave-effect" >
                    <i class="fa fa-calendar mr-2"></i> Calendar
                  </a>
                </li>                 
              </ul>
            </nav>
              @yield('content')
				</div>
			</div>
        <footer class="footer">
          <div class="container">
            <div class="row align-items-center flex-row-reverse">
              <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                Copyright © 2019 <a href="#"> Liberation.net</a>. </a> All rights reserved.
              </div>
            </div>
          </div>
        </footer>
        <!-- End Footer-->
      </div>

      <!-- Back to top -->
      <a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

      
      <script src="{{ asset('assets\js\vendors\jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('assets\plugins\fullcalendar\moment.min.js') }}"></script>
      <script src="{{ asset('assets\js\vendors\bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets\js\vendors\jquery.sparkline.min.js') }}"></script>
      <script src="{{ asset('assets\js\vendors\selectize.min.js') }}"></script>
      <script src="{{ asset('assets\js\vendors\jquery.tablesorter.min.js') }}"></script>
      <script src="{{ asset('assets\js\vendors\circle-progress.min.js') }}"></script>
      <script src="{{ asset('assets\plugins\rating\jquery.rating-stars.js') }}"></script>

      <script src="{{ asset('assets\plugins\echarts\echarts.js') }}"></script>

     <!-- c3.js Charts Plugin -->
      <script src="{{ asset('assets\plugins\charts-c3\d3.v5.min.js') }}"></script>
      <script src="{{ asset('assets\plugins\charts-c3\c3-chart.js') }}"></script>


      <!-- Fullside-menu Js-->
      <script src="{{ asset('assets\plugins\fullside-menu\jquery.slimscroll.min.js') }}"></script>
      <script src="{{ asset('assets\plugins\fullside-menu\waves.min.js') }}"></script>

      <script src="{{ asset('assets\plugins\chart\Chart.bundle.js') }}"></script>
      <script src="{{ asset('assets\plugins\chart\utils.js') }}"></script>
      <script src="assets\plugins\input-mask\jquery.mask.min.js"></script>
      <script src="{{ asset('assets\js\index2.js') }}"></script>
      <script src="{{ asset('assets\js\index.js') }}"></script>
      <script src="{{ asset('assets\plugins\morris\raphael-min.js') }}"></script>
      <script src="{{ asset('assets\plugins\morris\morris.js') }}"></script>

      <script src="{{ asset('assets\plugins\peitychart\jquery.peity.min.js') }}"></script>
	  <script src="{{ asset('assets\plugins\peitychart\peitychart.init.js') }}"></script>

      <!-- Custom scroll bar Js-->
      <script src="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js') }}"></script>

      <!-- Custom Js-->
      <script src="{{ asset('assets\js\custom.js') }}"></script>

		<script src="{{ asset('assets\plugins\fullcalendar\fullcalendar.min.js') }}"></script>
 
 
		<script>
			$('#calendar').tuiCalendar;
		</script>


  </body>
</html>
