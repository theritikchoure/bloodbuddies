@extends('layout') 


@section('section')
            <!--  HOME SLIDER BLOCK  -->

            <div class="slider-wrap">
                <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true" data-autoplaytimeout="17000">
    
                    <div class="slider_item_container" data-bg_img="/front/images/home_1_slider_1.jpg" data-bg_color="#555555" data-bg_opacity="0.0">
                        <div class="item">
                            <div class="slider-content">
                                <div class="container text-left">
                                    <div class="row">
                                        <div class="slider-bg">
                                            <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">
    
                                                <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    Blood: Costs nothing to you 
                                                    <br>but
                                                    <br>is priceless to someone else.

                                                </h2>
                                                <a href="#request" class="btn btn-theme margin-top-24">Request for Blood</a>
                                                <a href="{{route('donate')}}" class="btn btn-theme btn-theme-invert margin-top-24">Donate Blood</a>
                                            </div>
                                        </div>
                                        <!-- end .col-sm-12  -->
                                    </div>
                                    <!-- end .row  -->
                                </div>
                                <!-- end .container -->
                            </div>
                            <!--  end .slider-content -->
                        </div>
                        <!-- end .item  -->
                    </div>
                    <!-- end .slider_item_container  -->
    
                    <div class="slider_item_container" data-bg_img="/front/images/home_1_slider_2.jpg" data-bg_color="#555555" data-bg_opacity="0.0">
                        <div class="item">
                            <div class="slider-content">
                                <div class="container text-left">
                                    <div class="row">
                                        <div class="slider-bg" data-animation-in="zoomInUp" data-animation-out="zoomInDown">
                                            <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">
    
                                                <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    DONATE BLOOD
                                                    <br> AND INSPIRES OTHERS.
                                                </h2>
                                                <a href="#request" class="btn btn-theme margin-top-24">Request For Blood</a>
                                            </div>
                                        </div>
                                        <!-- end .col-sm-12  -->
                                    </div>
                                    <!-- end .row  -->
                                </div>
                                <!-- end .container -->
                            </div>
                            <!--  end .slider-content -->
                        </div>
                        <!-- end .item  -->
                    </div>
                    <!-- end .slider_item_container  -->
    
                </div>
                <!-- end .slider_1  -->
            </div>
            <!-- end .slider-wrap.  -->
    
            <!--  FEATURED ABOUT US SECTION-->
    
            <section class="section-content-block" id="about-us">
    
                <div class="container">
    
                    <div class="row">
    
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    
                            <div class="about-us-container theme-custom-box-shadow">
    
                                <div class="row section-heading-wrapper margin-bottom-11">
    
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                        <h2><strong>Who We Are?</strong></h2>
                                        <span class="heading-separator heading-separator-horizontal"></span>
                                    </div>
                                    <!-- end .col-sm-10  -->
    
                                </div>
    
                                <div class="about-details">
                                    <p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>
                                    <h4>Mission</h4>
                                    <ul class="custom-bullet-list">
                                        <li>Using the power of Information Technology.</li>
                                        <li>Fulfilling the requirement of blood</li>
                                        <li>High quality assessment, diagnosis and treatment.</li>
                                        <li>Inspiring people for voluntary blood donation</li>
                                    </ul>
                                </div>
                                <!--  end .about-details -->
    
                            </div>
    
                        </div>
                        <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
    
    
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    
                            <figure class="about-img theme-custom-box-shadow">
                                <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=w--g30WTfBs"><i class="fa fa-play"></i></a>
                                <img src="/front/images/about_feat_bg.jpg" alt="about" />
                            </figure>
                            <!-- end .cause-img  -->
    
                        </div>
                        <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->
    
                    </div>
                    <!--  end .row  -->
                </div>
    
            </section>
            <!--  end .section-about-us -->
    
            
            <!--  SECTION APPOINTMENT BOX -->
    
            <section id="facts" class="section-content-block section-custom-bg section-custom-bg-extra-padding" data-bg_img='/front/images/appointment_female_bg.jpg' data-bg_color='#000000' data-bg_opacity='0.1'>
    
                <div class="container">
                    {{-- <div class="custom-empty-space" data-height="160px" data-class="col-sm-hidden"></div> --}}
                    <div class="col-lg-6 col-md-6"></div>
                    <div class="col-lg-6 col-md-6">
    
                        <div class="row section-heading-wrapper">
    
                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h4>Good To Know</h4>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h2>Helpful Information
                                </h2>
    
                            </div>
                            <!-- end .col-sm-10  -->
    
                        </div>
    
                        <div class="about-details">
    
                            <ul class="custom-bullet-list">
                                <li>The actual blood donation typically takes less than 10-12 minutes.</li>
                                <li>The average adult has about 10 units of blood in his body. Roughly 1 unit is given during a donation</li>
                                <li>A healthy donor may donate red blood cells every 56 days.</li>
                                <li>Finally, Try to get a good night sound sleep after donation.</li>
                            </ul>
    
                        </div>
                        <!--  end .about-details -->
    
                    </div>
                </div>
    
            </section>
    
            <!--  SECTION APPOINTMENT   -->
    
            <section id="milestones" class="section-content-block section-secondary-bg">
    
                <div class="container">
    
                    <div class="row">
    
    
                    </div>
                    <!--  end .row  -->
    
                    <div class="row wow fadeIn">
    
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    
                            <div class="counter-block-1 text-center">
    
                                <i class="fa fa-heartbeat icon"></i>
                                <span class="counter">2578</span>
                                <h4 class="text-capitalize">Success Smile</h4>
    
                            </div>
    
                        </div>
                        <!--  end .col-lg-3  -->
    
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    
                            <div class="counter-block-1 text-center">
    
                                <i class="fa fa-stethoscope icon"></i>
                                <span class="counter">{{$donor}}</span>
                                <h4 class="text-capitalize">Happy Donors</h4>
    
                            </div>
    
                        </div>
                        <!--  end .col-lg-3  -->
    
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    
                            <div class="counter-block-1 text-center">
    
                                <i class="fa fa-users icon"></i>
                                <span class="counter">{{$recipient}}</span>
                                <h4 class="text-capitalize">Happy Recipient</h4>
    
                            </div>
    
                        </div>
                        <!--  end .col-lg-3  -->
    
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    
                            <div class="counter-block-1 text-center">
    
                                <i class="fa fa-building icon"></i>
                                <span class="counter">1364</span>
                                <h4 class="text-capitalize">Total Awards</h4>
    
                            </div>
    
                        </div>
                        <!--  end .col-lg-3  -->
    
    
                    </div>
                    <!-- end row  -->
    
                </div>
                <!--  end .container -->
    
            </section>
            <!--  end .appointment-section  -->
    
    
            <!-- HIGHLIGHT CTA  -->
    
            <section class="padding-bottom-100 padding-top-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                                <h2 class="text-capitalize">Become A Part Of Great Work Today</h2>
                                <p>
                                    You can give blood at any of our blood donation venues all over the world.
                                    <br /> We have total sixty thousands donor centers and visit thousands of other venues on various occasions.
                                </p>
                                <a class="btn btn-theme margin-top-24 wow bounceIn" href="{{route('donate')}}">JOIN WITH US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section-content-block section-pure-white-bg">
    
                <div class="container">
            
                    <div class="row">
            
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="request">
                            
                            <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn">
                                <h3 class="join-heading join-heading-alt">Request Blood</h3>
                                <div>
                                    @if ($errors->any())
                                    <div class="text-danger text-left pl-2 pb-2">
                                        <ol>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                    @endif
                                </div>
                                <form class="appoinment-form" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <input id="your_name" class="form-control" name="p_name" placeholder="Patient's Name" type="text" value="{{old('p_name')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="select-style">
                                            <select class="form-control" name="p_bg">
                                                <option>Request Blood Group</option>
                                                <option value="Any">Any</option>
                                                <option value="A+">A-positive (A+)</option>
                                                <option value="A-">A-negative (A-)</option>
                                                <option value="B+">B-positive (B+)</option>
                                                <option value="B-">B-negative (B-)</option>
                                                <option value="AB+">AB-positive (AB+)</option>
                                                <option value="AB-">AB-negative (AB-)</option>
                                                <option value="O+">O-positive (O+)</option>
                                                <option value="O-">O-negative (O-)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="select-style">
                                            <select class="form-control" name="p_gender" >
                                                <option>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="your_name" class="form-control" name="p_age" placeholder="Age" type="text" value="{{old('p_age')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="your_date" class="form-control" name="mobile" placeholder="Mobile" type="text" value="{{old('mobile')}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input id="your_date" class="form-control" name="p_city" placeholder="Requested City" type="text" value="{{old('city')}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input id="your_time" class="form-control" name="hospital" placeholder="Name of the Hospital" type="text" value="{{old('hospital')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="your_time" class="form-control" name="doctor" placeholder="Doctor" type="text" value="{{old('doctor')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="your_time" class="form-control" name="p_disease" placeholder="Disease" type="text" value="{{old('p_disease')}}">
                                    </div>
                                    <div class="form-group col-md-6" style="margin-bottom: 25px;">
                                        <input id="your_time" class="form-control" name="unit" placeholder="Unit" type="number" value="{{old('unit')}}">
                                    </div>   
                                    <div class="form-group col-md-6" style="margin-bottom: 25px;">
                                        <input id="r_form" type="file" name="r_form" placeholder="Blood Requisition Form Image" />
                                        <label for="r_form">Blood Requisition Form Image</label>
                                    </div>                                    
            
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button id="btn_submit" class="btn btn-theme" type="submit">Request for Blood</button>
                                    </div>
            
                                </form>
            
                            </div>
                            <!-- end .appointment-form-wrapper  -->
            
                        </div>
            
                    </div>
            
                </div>
            
            </section>
    
@endsection

<script>
    $("[type=file]").on("change", function(){
  // Name of file and placeholder
  var file = this.files[0].name;
  var dflt = $(this).attr("placeholder");
  if($(this).val()!=""){
    $(this).next().text(file);
  } else {
    $(this).next().text(dflt);
  }
});
</script>