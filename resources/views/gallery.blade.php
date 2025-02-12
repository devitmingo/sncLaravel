@extends('layout.app')
@section('body')
<body>
       
        <!-- main-area -->
        <main>

         <!-- breadcrumb-area -->
         <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url({{asset('web/img/bg/bdrc-bg.png')}})">
              
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-xl-12 col-lg-12">
                          <div class="breadcrumb-wrap text-left">
                              <div class="breadcrumb-title">
                                  <h2>Our Gallery</h2>    
                                  
                              </div>
                          </div>
                      </div>
                      <div class="breadcrumb-wrap2">
                            
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
                                  </ol>
                              </nav>
                          </div>
                      
                  </div>
              </div>
          </section>
          <!-- breadcrumb-area-end -->   
            <!-- gallery-area -->
            <section id="work" class="pt-150 pb-105">
                <div class="container"> 
                    <div class="portfolio ">
                        <div class="row align-items-end">
                            <div class="col-lg-12">
                                <div class="grid col3 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
				   		                 
                                        @foreach($gallery as $row)

                                        <div class="grid-item financial banking">
                                        <a href="{{asset('uploads/gallery/'.$row->image)}}" target="_blank">
                                                <figure class="gallery-image">
                                                <img src="{{asset('uploads/gallery/'.$row->image)}}" alt="{{ isset($row->name) ? $row->name : '' }}" class="img"> 
                                                </figure>
                                            </a>
                                        </div>
                                         @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
           <!-- gallery-area-end -->
     
@endsection