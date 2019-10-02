<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Liberation</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,600i,700,800" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}} ">
        <link href=" {{asset('css/bootstrap-toggle.min.css')}}" rel="stylesheet">
        <!-- main CSS -->
        <link rel="stylesheet" href="{{asset('style.css')}} ">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      
        
    </head>
    <body>
        <div id="wrapper"><!-- start wrapper -->
            <header>
                <div class="container">
                    <div class="header-area"><!-- start header-area -->
                        
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="navbar-brand">
                                <a href="{{url('/')}}">Liberation</a>
                                <div class="border-line"></div>
                            </div>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                              
                                    
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <li class="nat-item">
                                                    <a class="nav-link" href="{{ url('/home') }}">{{__('welcome.home')}}</a>
                                                </li>
                                            @else
                                                
                                            @endauth
                                        </div>
                                    @endif
                                    <li class="nat-item">
                                        <a class="nav-link" href="#why">{{__('welcome.about')}}</a>
                                    </li>
                                    <li class="nat-item">
                                        <a class="nav-link" href="#contact">{{__('welcome.contact')}}</a>
                                    </li>
                                    
                                    <li>
                                        <div class="lang dropdown">
                                        <button class="btn btn-default" style="background-color:transparent" type="button" id="menu1" data-toggle="dropdown">
                                        <img src="{{asset('/images/lang.jpg')}}" alt="lang" width="25">
                                            <!-- <span class="caret"></span> -->
                                            </button>
                                            
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{url('/')}}">EN</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/lang/kr')}}">KR</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/lang/cn')}}">CN</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/lang/jp')}}">JP</a></li>
                                                </ul>
                                                
                                             
                                             
                                          
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div><!-- //end .header-area -->
                </div>
            </header>

            @yield('content')
            
            <footer>
                <div class="container">
                    <div class="footer-area">
                        <p>copyright &copy; 2019 Liberation</p>
                    </div>
                </div>
            </footer>

        </div><!-- //end #wrapper -->

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap-toggle.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
       
  
    </body>
</html>