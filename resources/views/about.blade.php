@extends('layout.app')
@section('body')


    <body>
       
        <main>
            
           <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url({{asset('web/img/bg/bdrc-bg.png')}})">
              
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>About Us</h2>    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrap2">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
             <!-- about-area -->
             <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #eff7ff;">
               
               <div class="container">
                   <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                           <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                               <img src="{{asset('web/images/snc_college.jpeg')}}" alt="img">   
                              <!-- <div class="about-text second-about">
                                   <span>24 <sub>+</sub></span> 
                                   <p>Years of Experience</p>
                               </div> -->
                           </div>
                         
                       </div>
                       
                   <div class="col-lg-6 col-md-12 col-sm-12">
                           <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                               <div class="about-title second-title pb-25">  
                                   <h5><i class="fal fa-graduation-cap"></i> About Us</h5>
                                   <h2>Shantiniketan College</h2>                                   
                               </div>
                                  <p class="txt-clr"><strong>Shantiniketan College</strong> was established on 2000-01, in the college was promoted by <strong>Late Shri Ramlal Gupta Merorial Education Society </strong>with The motto to serve needy and poor people.</p>
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
            <!-- cta-area -->
            <!-- <section class="cta-area cta-bg pt-50 pb-50" style="background-image:url(img/bg/cta_bg02.png)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <h2>Scholarship Programs</h2>
								<p>At Estuidar University, we prepare you to launch your career by providing a supportive, creative, and professional environment from which to learn practical skills and build a network of industry contacts.</p>
                            </div>
                                             
                        </div>
                        <div class="col-lg-4 text-right"> 
                            <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
									  <a href="about.html" class="btn ss-btn smoth-scroll">Financial Aid <i class="fal fa-long-arrow-right"></i></a>			
								</div>
                        </div>
					
                    </div>
                </div>
            </section> -->
            <!-- cta-area-end -->	
           <!-- frequently-area -->
            <!-- <section class="faq-area pt-120 pb-120 p-relative fix">
                <div class="animations-10"><img src="img/bg/an-img-04.png" alt="an-img-01"></div>
                <div class="animations-08"><img src="img/bg/an-img-05.png" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row justify-content-center  align-items-center">
                       
                        <div class="col-lg-7">
                            <div class="section-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <h2>Get every single answer here.</h2>
                                <p>A business or organization established to provide a particular service, typically one that involves a organizing transactions.</p>
                            </div>
                               <div class="faq-wrap mt-30 pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree2"  >
                                                   01 Cras turpis felis, elementum sed mi at arcu ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree2" class="collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Our community is being called to reimagine the future. As the only university where a renowned design college comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"  >
                                                   02 Vestibulum nibh risus, in neque eleifendulputate sem ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Our community is being called to reimagine the future. As the only university where a renowned design college comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo"  >
                                                  03 Donec maximus, sapien id auctor ornare ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                              Our community is being called to reimagine the future. As the only university where a renowned design college comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"  >
                                                04 Vestibulum nibh risus, in neque eleifendulputate sem ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Our community is being called to reimagine the future. As the only university where a renowned design college comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive"  >
                                                05 Donec maximus, sapien id auctor ornare ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFive" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Our community is being called to reimagine the future. As the only university where a renowned design college comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>               
                        </div>
					    <div class="col-lg-5">
                            <div class="contact-bg02">
                            <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>
                                  Make An Contact
                                </h2>
                              
                            </div>
                                
						<form action="https://htmldemo.zcubethemes.com/qeducato/mail.php" method="post" class="contact-form mt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
							<div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                </div>                               
                            </div>
							
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>		
                            <div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                </div>
                            </div>	
                          
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">                                  
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span> <i class="fal fa-long-arrow-right"></i></button>				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- frequently-area-end -->	
           <!-- steps-area -->
            <!-- <section class="steps-area2 p-relative fix"  style="background-color: #125875;">
                <div class="animations-02"><img src="img/bg/an-img-10.png" alt="an-img-01"></div>
                <div class="container">
          
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="step-box step-box2 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon01.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h2>Campus Tour</h2>
                                    <p>Campus on a tour designed for prospective graduate and professional students. You will see how our university like, facilities, studenst and life in this university. Meet our graduate admissions representative to learn more about our graduate programs and decide what it the best for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="step-img2 wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/bg/steps-img-2.png" alt="class image">
                            </div>
                           
                        </div>
                        
                       
						
                    </div>
                    
                </div>
            </section> -->
            <!-- steps-area-end -->
             <!-- steps-area -->
            <!-- <section class="steps-area2 p-relative fix"  style="background-color: #032e3f;">              
                <div class="container">
                    <div class="animations-08"><img src="img/bg/an-img-20.png" alt="contact-bg-an-01"></div>
                    <div class="row align-items-center">                       
                        <div class="col-lg-6 col-md-12">
                            <div class="step-img3 wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/bg/steps-img-3.png" alt="class image">
                            </div>
                           
                        </div>
                         <div class="col-lg-6 col-md-12">
                            <div class="step-box step-box3 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon03.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h2>Powerful Alumni</h2>
                                    <p>Campus on a tour designed for prospective graduate and professional students. You will see how our university like, facilities, studenst and life in this university. Meet our graduate admissions representative to learn more about our graduate programs and decide what it the best for you.</p>
                                </div>
                            </div>
                        </div>
                       
						
                    </div>
                    
                </div>
            </section> -->
            <!-- steps-area-end -->
           <!-- testimonial-area -->
            <section class="testimonial-area pt-120 pb-115 p-relative fix">
                 <div class="animations-01"><img src="{{asset('web/img/bg/an-img-03.png')}}" alt="an-img-01"></div>
                <div class="animations-02"><img src="{{asset('web/img/bg/an-img-04.png')}}s" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h5><i class="fal fa-graduation-cap"></i> Testimonial</h5>
                                <h2>
                                 What Our Student Says
                                </h2>
                             
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="single-testimonial text-center">
                                     <div class="qt-img">
                                    <img src="{{asset('web/img/testimonial/qt-icon.png')}}" alt="img">
                                    </div>
                                    <p>It's good college, facilities are good, big playground, supporting from teachers .In summer vacation college provides  many activities.</p>
                                    <!-- <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar.png" alt="img">
                                    </div> -->
                                    <div class="ta-info">
                                            <h6>Tarachand Patel</h6>
                                            
                                        </div>                                    
                                </div>
                                <div class="single-testimonial text-center">
                                     <div class="qt-img">
                                    <img src="{{asset('web/img/testimonial/qt-icon.png')}}" alt="img">
                                    </div>
                                    <p>One of the best study environment for the children's at affordable fee......The teachers are professional, caring and well organised.</p>
                                    <!-- <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                    </div> -->
                                    <div class="ta-info">
                                            <h6>Amit Jaiswal</h6>
                                           
                                        </div>                                    
                                </div>
                              <div class="single-testimonial text-center">
                                     <div class="qt-img">
                                    <img src="{{asset('web/img/testimonial/qt-icon.png')}}" alt="img">
                                    </div>
                                    <p>Maintained well disciplin in college, also faculties are more supportive and caring.</p>
                                    <!-- <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar_03.png" alt="img">
                                    </div> -->
                                    <div class="ta-info">
                                            <h6>Daneshwar Sahu</h6>
                                            
                                        </div>                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
            
         
        </main>
        <!-- main-area-end -->
        
@endsection