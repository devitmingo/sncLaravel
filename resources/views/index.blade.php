@extends('layout.app')
@section('body')

    <body>
     
        <main>
           <!-- slider-area -->
            <section id="home" class="slider-area fix p-relative">
               
                <div class="slider-active" style="background: #141b22;">
                    <div class="single-slider slider-bg" style="background-image: url({{ asset('web/img/slider/slider_bg.png') }}); background-size: cover;">
                        <div class="container">
                           <div class="row">
                              
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-130">
                                         <h5 data-animation="fadeInUp" data-delay=".4s">welcome To shantiniketan college</h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s">Education is the best key success in life</h2>
                                        
                                          <div class="slider-btn mt-30">     
                                            <a href="{{route('aboutus')}}" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".4s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                            <a href="{{route('contactus')}}" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".4s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                                        </div>        
                                                              
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 p-relative">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg" style="background-image: url({{asset('web/img/slider/slider_bg_01.png')}}); background-size: cover;">
                        <div class="container">
                           <div class="row">
                              
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-130">
                                         <h5 data-animation="fadeInUp" data-delay=".4s">welcome To shantiniketan college</h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s">Education is the best key success in life</h2>
                                       
                                          <div class="slider-btn mt-30">     
                                            <a href="{{route('aboutus')}}" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".4s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                            <a href="{{route('contactus')}}" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".4s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                                        </div>        
                                                              
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 p-relative">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                    
               
            </section>
           
             <!-- about-area -->
            <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #eff7ff;">
               
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="{{ asset('web/images/snc_college.jpeg')}}" alt="img">   
                              
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h5><i class="fal fa-graduation-cap"></i> About Us</h5>
                                    <h2>Shantiniketan College</h2>                                   
                                </div>
                                   <p class="txt-clr"><strong>Shantiniketan College</strong> was established om 2000-01, in the college was promoted by <strong>Late Shri Ramlal Gupta Merorial Education Society </strong>with The motto to serve needy and poor people.</p>
                                    <p>It is a persistently flourshing of moral and cultural values,devoted to the cause of social and intellectual upliftment of the budding generation of the nation. The objective is to provide desirable for importing professional education and vocational training.</p>
                                   
                                   
                                </div>
                                 <div class="slider-btn mt-20">                                          
                                     <a href="{{route('aboutus')}}" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>				
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <section class="team-area fix p-relative pt-150 pb-80" style="background: #f7f9ff;">  
            <div class="animations-06"><img src="{{ asset('web/img/bg/an-img-17.png') }}" alt="an-img-01"></div>
            <div class="animations-09"><img src="{{ asset('web/img/bg/slider_shape03.png') }}" alt="contact-bg-an-01"></div>
                <div class="container">  
                    <div class="row">   
                    <div class="col-lg-12 p-relative">
                           <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5><i class="fal fa-graduation-cap"></i> Our Team</h5>
                                <h2>
                                  Our Team 
                                </h2>
                             
                            </div>
                        </div>                        
                         
                    </div>
                   <div class="row">  
                     @foreach($emp as $row)    
                        <div class="col-xl-3 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        
                                        <a href="#"> <img src="{{asset('uploads/emp/'.$row->image)}}" alt="img"></a>
                                        
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="#">{{ $row->name }}</a></h4>
                                    <p>{{ $row->desiganation }}</p>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                       </div>
                </div>
            </section>
             <!-- courses-area -->
            <section class="courses pt-120 pb-120 p-relative fix">
                 <div class="animations-01"><img src="{{asset('web/img/bg/an-img-03.png')}}" alt="an-img-01"></div>
                <div class="container">
                    <div class="row">   
                        <div class="col-lg-12 p-relative">
                           <div class="section-title center-align mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5><i class="fal fa-graduation-cap"></i> Our Alumni's</h5>
                                <h2>
                               Distinguished Alumni's
                                </h2>                             
                            </div>
                        </div>
                    </div>
                    <div class="row">                     
                          <div class="col-lg-12 col-md-12 ">
                            <img src="{{asset('web/images/snc_alumni.jpeg')}}" alt="SNC Alumni"  width="100%"/>
                        </div>
                        
                   
                    </div>
					
                     
                </div>
            </section>
            <!-- gallery-area -->
            <section id="work" class="pt-150 pb-105">
                <div class="container"> 
                <div class="row">   
                        <div class="col-lg-12 p-relative">
                           <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5><i class="fal fa-graduation-cap"></i> Our Gallery</h5>
                                <h2>
                                  Gallery 
                                </h2>
                             
                            </div>
                        </div>                        
                         
                    </div>
                    <div class="portfolio ">
                        <div class="row align-items-end">
                            <div class="col-lg-12">
                                <div class="grid col3 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
				   		                 
                                        @foreach($gallery as $row)

                                        <div class="grid-item financial banking">
                                        <a href="single-projects.html">
                                                <figure class="gallery-image">
                                                <img src="{{asset('uploads/gallery/'.$row->image)}}" alt="{{ isset($row->name) ? $row->name : '' }}" class="img"> 
                                                </figure>
                                            </a>
                                        </div>
                                         @endforeach
                                         
                                </div>
                                <div class="slider-btn mt-20">                                          
                                     <a href="{{route('ourgallery')}}" class="btn ss-btn smoth-scroll">View More <i class="fal fa-long-arrow-right"></i></a>				
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
           <!-- gallery-area-end -->
@endsection
