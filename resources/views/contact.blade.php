@extends('layouts.main')
@section('content')
 
<section class="banner contactpage"><!-- start banner -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-area-info">
                        <h3 class="text-center">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section><!-- //end .banner -->

<section class="contact-form-sec"><!-- start contact-form-sec -->
    <div class="container">
        <div class="contact-form-sec-area">
            <div class="title">
                <h3>Speak With a Medical Marketing Expert</h3>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="info pb-5">
                        <ul>
                            <li>Headquarters – Houston, Texas</li>
                            <li>(800) 304-3518</li>
                            <li>info@patientdrive.com</li>
                        </ul>
                    </div>
                </div>
                <!-- <div id="sendmessage">Your message has been sent. Thanks you!</div> -->
                <!-- <div id="errormessage"></div> -->
                <div class="col-md-12 col-lg-8">
                    <form action="{{route('contactus')}}" method="post" role="form" onsubmit="return validate_contact()">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name"  id="name" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Name" onkeyup="blank_me(this.id)"/>
                                <small id="error_name" class="error_msg form-text text-danger">*Name is required</small>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="email" name="email" id="email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Email Address" onkeyup="blank_me(this.id)"/>
                                <small id="error_email" class="error_msg form-text text-danger">*Email is required</small>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="tel" name="phone" id="phone" value="" size="40" class="form-control" aria-invalid="false" placeholder="Phone" onkeyup="blank_me(this.id)"/>
                                <small id="error_phone" class="error_msg form-text text-danger">*Phone number is required</small>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="subject" id="subject" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Subject" onkeyup="blank_me(this.id)"/>
                                <small id="error_subject" class="error_msg form-text text-danger">*Subject is required</small>
                            </div>

                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" data-rule="required" data-msg="Please write somthing for us" cols="40" rows="10" class="form-control" aria-required="true" aria-invalid="false" placeholder="Questions or Comments" onkeyup="blank_me(this.id)"></textarea>
                                <small id="error_message" class="error_msg form-text text-danger">*Please enter your message</small>
                            </div>

                            <div class="form-group col-md-12">
                                <input type="submit" value="Send Now" class="btn btn-primary" />
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
</section><!-- //end .contact-form-sec -->

<section class="contact"><!-- start contact -->
    <div class="container">
        <div class="contact-area">
            <h3><a href="tel:304-3518">(800) 304-3518</a></h3>
            <p>With years of collective expertise and dedicated customer service, Patient Drive offers medical practices digital marketing services that will ensure your online success. We have research-proved digital marketing strategies that can increase your web presence and increase your revenue. Start receiving leads in 72 hours or less!</p>

            <div class="learn-more">
                <a href=" ">LEARN MORE +</a>
            </div>

            <div class="contact-info-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info nwm">
                            <h3>
                                <span>Nationwide Medical</span>
                                <span>Marketing Experts</span>
                            </h3>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-info toll">		
                            <h3>
                                <a href="tel:304-3518">
                                    <span>Toll Free</span>
                                    <span>(800) 304-3518</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- //end .contact -->
@endsection
 