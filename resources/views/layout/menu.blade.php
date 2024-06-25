 <!-- header -->
 <header class="header-area header-three">  
           <div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">      
                       
                        <div class="col-lg-4 col-md-4 d-none d-lg-block ">
                           <div class="header-social">
                                <span>
                                    Follow us:-
                                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" title="LinkedIn"><i class="fab fa-instagram"></i></a>               
                                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" title="Twitter"><i class="fab fa-youtube"></i></a>
                                   </span>                    
                                   <!--  /social media icon redux -->                               
                            </div>
                        </div>
                          <div class="col-lg-8 col-md-8 d-none d-lg-block text-right">
                              <div class="header-cta">
                                <ul>
                                   <li>
                                      <div class="call-box">
                                         <div class="icon">
                                            <img src="{{ asset('web/img/icon/phone-call.png') }}" alt="img">
                                         </div>
                                         <div class="text">
                                            <span>Call Now !</span>
                                            <strong><a href="tel:+917828168418">+91 7828168418</a></strong>                                              
                                         </div>
                                      </div>
                                   </li>
                                   <li>
                                      <div class="call-box">
                                         <div class="icon">
                                            <img src="{{ asset('web/img/icon/mailing.png') }}" alt="img">
                                         </div>
                                         <div class="text">
                                            <span>Email Now</span>
                                            <strong><a href="mailto:shantiniketan2009@yahoo.co.in"> shantiniketan2009@yahoo.co.in  </a></strong>                                               
                                         </div>
                                      </div>
                                   </li>                                 
                                </ul>
                             </div>                        
                        </div>
                        
                    </div>
                </div>
            </div>		
			  <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                             <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="{{route('index')}}"><img src="{{ asset('web/images/snc.jpeg') }}" style="width:70px;" alt="logo"></a>
                                </div>
                            </div>
                           <div class="col-xl-6 col-lg-6">
                              
                                <div class="main-menu text-right text-xl-right">
                                    <nav id="mobile-menu">
                                          <ul>
                                            <li>
                                                <a href="{{route('index')}}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{route('aboutus')}}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{route('ourgallery')}}">Gallery</a>
                                            </li>  
                                            <li>
                                                <a href="{{route('noticeboard')}}">Notice</a>
                                            </li>        
                                            
                                            <!-- <li class="has-sub">
                                               <a href="courses.html">Courses</a>
                                                <ul>													
													 <li><a href="courses.html">Courses</a></li>
													<li> <a href="courses-2.html">Courses 02</a></li>
                                                    <li> <a href="single-courses.html">Course Details</a></li>
                                                    <li> <a href="single-courses-2.html">Course Details 02</a></li>
												</ul>
                                            </li>   -->
                                              <!-- <li class="has-sub"><a href="#">Pages</a>
												<ul>
                                                    <li><a href="event.html">Event</a></li>
                                                    <li><a href="single-event.html">Event Details</a></li>
                                                    <li><a href="projects.html">Gallery</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="team.html">Teacher</a></li>
                                                    <li><a href="team-single.html">Teacher Details</a></li>
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                  </ul>
											</li> -->
                                            <!-- <li class="has-sub"> 
                                                <a href="blog.html">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li> -->


                                            <li><a href="{{route('contactus')}}">Contact</a></li>                                               
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                             <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
                                 <div class="login">
                                    <ul>
                                        
                                        <li>
                                            <div class="second-header-btn">
                                               <a href="{{route('contactus')}}" class="btn">admission open</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>                               
                            </div>
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
         
        <!-- main-area -->