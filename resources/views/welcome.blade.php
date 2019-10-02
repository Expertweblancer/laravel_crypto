@extends('layouts.main') 
@section('content')
 
     <section class="intro py-5"><!-- start intro -->
        <div class="container">
            <div class="intro-area">
                <div class="row">
                    <div class="col-md-6">
                        <div id="demo" class="carousel slide my-5" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner mb-4">
                                <div class="carousel-item active">
                                    <div class="intro-area-text pb-4">
                                        <p>{{__('welcome.banner_text1') }}</p>

                                        <p>{{__('welcome.banner_text2')}}</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="intro-area-text pb-4">
                                        <p>{{__('welcome.banner_text1') }}</p>

                                        <p>{{__('welcome.banner_text2')}}</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="intro-area-text pb-4">
                                        <p>{{__('welcome.banner_text1') }}</p>

                                        <p>{{__('welcome.banner_text2')}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="control">
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="intro-area-form">
                            <div id="logindiv">
                                <form method="POST" action="{{ route('login') }}" aria-label="{{__('Login')}}">
                                    @csrf
                                    <div class="form-title mb-5">
                                        <div class="title mt-2">
                                            <h4>Liberation</h4>
                                            <div class="border-line"></div>
                                        </div>

                                        <div class="lang">
                                          <a>{{strtoupper(App::getLocale())}}</a>
                                        </div>
                                    </div>
                                    
                                     
                                     <!-- Email -->
                                    <input type="email" class="form-control mb-4 @error('email') is-invalid @enderror" name="email" required placeholder="E-mail">
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- Password -->
                                    
                                    <input  name="password" type="password" class="form-control mb-4 @error('password') is-invalid @enderror" required placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember" class="form-check-label">
                                            {{ __('Remember Me')}}
                                        </label>  
                                    </div> -->
                                    
                                    <!-- Sign in button -->
                                    <button class="btn btn-info btn-block my-4" type="submit">{{ __('welcome.signin')}}</button>

                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <!-- Forgot password -->
                                            <a href="">{{__('welcome.forgot')}}</a>
                                        </div>
                                    </div>

                                    <input type="checkbox" id="jquery-bootstrap-toggle" checked data-toggle="toggle" data-onstyle="info" data-offstyle="info" data-on="{{__('welcome.register')}}" data-off="Sign in" class="mt-3">
                                </form>
                            </div>

                            <div id="regdiv">
                                <form method="POST" action="{{ route('register') }}" aria-label="{{__('Register')}}">
                                    @csrf
                                    <div class="form-title mb-5">
                                        <div class="title mt-2">
                                            <h4>Liberation</h4>
                                            <div class="border-line"></div>
                                        </div>

                                        <div class="lang">
                                            <a href="">EN</a>
                                        </div>
                                    </div>

                                    <!-- name -->
                                    <input id="name" type="text" class="form-control mb-4 @error('name') is-invalid @enderror" name="name" required placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <!-- Email -->
                                    <input id="email" type="email" name="email" class="form-control mb-4 @error('email') is-invalid @enderror" required placeholder="E-mail">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <!-- Password -->
                                    <input id="password" name="password" type="password" class="form-control mb-4  @error('password') is-invalid @enderror" required placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <input id="password-confirm" name="password_confirmation" type="password" required class="form-control mb-4" required placeholder="Confirm Password">
                                        

                                    <button type="submit" class="btn btn-info btn-block my-4">{{ __('welcome.register') }}</button>
                                </form>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- //end intro -->

    <section class="work pb-5"><!-- start intro -->
        <div class="container">
            <div class="title py-3 my-5">
                <h2>{{__('welcome.howitworks')}}</h2>
                <div class="border-line"></div>
            </div>
        
            <div class="work-area">
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-item">
                            <figure class="mb-3">
                                <img src="{{asset('images/icon1.png')}}" alt="Image" width="100" height="100" >
                            </figure>

                            <h4 class="text-center">
                                <span>1.</span> 
                                {{__('welcome.create')}}
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="work-item">
                            <figure class="mb-3">
                                <img src="{{asset('images/icon2.png')}}" alt="Image" width="100" height="100">
                            </figure> 

                            <h4 class="text-center">
                                <span>2.</span> 
                                {{__('welcome.verify')}}
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="work-item">
                            <figure class="mb-3">
                                <img src="{{asset('images/icon3.png')}}" alt="Image" width="100" height="100" >
                            </figure> 

                            <h4 class="text-center">
                                <span>3.</span> 
                                {{__('welcome.use')}}
                            </h4>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </section><!-- //end work -->

    <section class="policy" id="why"><!-- start policy -->
        <div class="container">
            <div class="title py-3 my-5">
                <h2>{{__('welcome.why')}}</h2>
                <div class="border-line"></div>
            </div>
        
            <div class="policy-area">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="policy-area-content">
                            <div class="inner">
                                <figure class="mb-3">
                                    <img src="{{asset('images/icon4.png')}}" alt="Image" width="70" height="70">
                                </figure>
                                
                                <div class="content">
                                    <p>{{__('welcome.why1')}}</p>
                                </div>
                            </div>
                        </div>	
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="policy-area-content">
                            <div class="inner">
                                <figure class="mb-3">
                                    <img src="{{asset('images/icon5.png')}}" alt="Image" width="70" height="70">
                                </figure>

                                <div class="content">
                                    <p>{{__('welcome.why2')}}</p>
                                </div>
                            </div>
                        </div>	
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="policy-area-content">
                            <div class="inner">
                                <figure class="mb-3">
                                    <img src="{{asset('images/icon6.png')}}" alt="Image" width="70" height="70">
                                </figure>

                                <div class="content">
                                    <p>{{__('welcome.why3')}}</p>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </section><!-- //end policy -->

    <section class="contact" id="contact"><!-- start contact -->
        <div class="container">
            <div class="title py-3 my-5">
                <h2>{{__('welcome.contactus')}}</h2>
                <div class="border-line"></div>
            </div>
            
        
            <div class="contact-area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-area-content">
                            <div class="inner">
<!--                                 
                            <form action="">
                                 <div class="row">
                                        <div class="col-lg-6 col-md-12"><input type="text" class="form-control" placeholder="{{__('welcome.subject')}}"></div>
                                        <div class="col-lg-6 col-md-12"><input type="text" class="form-control" placeholder="{{__('welcome.name')}}"></div>
                                        <div class="col-lg-6 col-md-12 "><input type="email" class="form-control" placeholder="{{__('welcome.email')}}"></div>
                                        <div class="col-lg-6 col-md-12"><input type="text" class="form-control" placeholder="{{__('welcome.phone')}}"></div>
                                        <div class="col-lg-12 col-md-12"><textarea name="" class="form-control" id="" cols="20" rows="5" placeholder="{{__('welcome.comments')}}"></textarea></div>
                                        <div class="col-md-12 col-lg-6"><button class="btn btn-warning form-control">{{__('welcome.send')}}</button></div>
                                 </div>
                            </form>  -->
                            <form action="{{route('contact')}}" method="post" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" name="name"  id="name" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('welcome.name')}}"  required />
                                        <!-- <small id="error_name" class="error_msg form-text text-danger">*Name is required</small> -->
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <input type="email" name="email" id="email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('welcome.email')}}"  required />
                                        <!-- <small id="error_email" class="error_msg form-text text-danger">*Email is required</small> -->
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <input type="tel" name="phone" id="phone" value="" size="40" class="form-control" aria-invalid="false" placeholder="{{__('welcome.phone')}}" required />
                                        <!-- <small id="error_phone" class="error_msg form-text text-danger">*Phone number is required</small> -->
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" name="subject" id="subject" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('welcome.subject')}}"  required />
                                        <!-- <small id="error_subject" class="error_msg form-text text-danger">*Subject is required</small> -->
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <textarea name="message" id="message" data-rule="required" data-msg="Please write somthing for us" cols="40" rows="5" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('welcome.comments')}}"  ></textarea>
                                        <!-- <small id="error_message" class="error_msg form-text text-danger">*Please enter your message</small> -->
                                    </div>

                                    <div class="  col-md-12">
                                     
                                        <input type="submit" class="btn send btn-defulat form-control" value="{{__('welcome.send')}}"  />
                                    </div>
                                </div>
                                @if($success)         
                                    <div style="text-align:center"><b style="color:red">Your message has been sent. Thanks you!</b></div>
                                @endif
                            </form>
                            </div>
                        </div>	
                    </div>

                    

                    
                </div>
            </div>
        </div>
    </section>

@endsection