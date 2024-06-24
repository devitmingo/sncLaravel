@extends('admin.layout.app')
@section('body')
<div class="card">
    <div class="card-body">
        <div class="container-fluid " style="margin:30px; padding-bottom:100px;" >
            <div class="row">       
                <div class="col-6 col-md-6">
                    <h2>NOTICE FORM</h2>
                </div>
                <div class="col-6 col-md-6" style="margin-top:23px;">
                    <a href="{{ route('notice.index') }} " ><button type="submit" class="btn btn-primary pull-right"> <i class="fa-solid fa-list"></i> Notice List</button></a>    
                                    
                </div>
            </div>
                <hr>
                 @if(isset($data))
                        <form action="{{ route('notice.update',$data->id) }}" method="post" enctype='multipart/form-data'>
                        @method('put')
                    @else
                        <form action="{{ route('notice.store') }}" method="post" enctype='multipart/form-data'>
                    @endif 
                    @csrf
                    <div class="container pb-10">
                        <div class="form-row">       
                            <div class="form-group col-md-4">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name',isset($data->name) ? $data->name : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="{{ old('subject',isset($data->subject) ? $data->subject : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter Description" value="{{ old('description',isset($data->description) ? $data->description : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="">-- Select --</option>
                                        <option value="0">Enable</option>
                                        <option value="1">Disable</option>
                                    </select>
                                    <script>$('#status').val('{{ old('status',isset($data->status) ? $data->status : '' ) }}').attr("selected", "selected");</script>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-success pull-right">{{ isset($data) ? "Update" : "Submit" }}</button>
                            </div>
                        </div>
                    </div>
                </form>
@endsection