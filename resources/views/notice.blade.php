@extends('layout.app')
@section('body')
<style>

    .trclass{
        background-color:#0e0958;
        color:white;
    }
</style>
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
                                  <h2>Notice Board</h2>    
                                  
                              </div>
                          </div>
                      </div>
                      <div class="breadcrumb-wrap2">
                            
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Notice Board</li>
                                  </ol>
                              </nav>
                          </div>
                      
                  </div>
              </div>
          </section>
          <!-- breadcrumb-area-end -->   
            <!-- notice-area -->
            <section id="work" class="pt-150 pb-105">
                <div class="container"> 
                    <div class="portfolio ">
                        <div class="row align-items-end">
                            
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="trclass">
                                                <th>#</th>
                                                <th>DEPARTMENT</th>
                                                <th>TITLE</th>
                                                <th>UPLOAD DATE</th>
                                                <th>FILE</th>
                                            </tr>
                                        </thead>
                                            <tbody>      
                                                @foreach($notice as $row)
                                                    <tr>
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ isset ($row->department)? $row->department : '' }}</td>
                                                        <td>{{ isset ($row->title)? $row->title : '' }}</td>
                                                        <td>{{ isset ($row->upload_date) ? date('d-m-Y',strtotime($row->upload_date)) : ''}}</td>
                                                        <td><a href="{{asset('uploads/notice/'.$row->file)}}" target="_blank"><i class='far fa-folder-open' style='font-size:24px;color:#0e0958'></i></a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                    </table>
                               
                        </div>
                    </div>
                </div>
            </section>
           <!-- notice-area-end -->
     
@endsection