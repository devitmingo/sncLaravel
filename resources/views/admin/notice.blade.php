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
                                <label for="">NAME</label>
                                <input type="text" name="name" class="form-control" required placeholder="ENTER NAME" value="{{ old('name',isset($data->name) ? $data->name : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">DEPARTMENT</label>
                                <input type="text" name="department" class="form-control" required placeholder="ENTER DEPARTMENT" value="{{ old('department',isset($data->department) ? $data->department : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">TITLE</label>
                                <input type="text" name="title" class="form-control" required placeholder="ENTER TITLE" value="{{ old('title',isset($data->title) ? $data->title : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">DESCRIPTION</label>
                                <input type="text" name="description" required class="form-control" placeholder="ENTER DESCRIPTION" value="{{ old('description',isset($data->description) ? $data->description : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">STATUS</label>
                                    <select class="form-control" name="status" id="status" required  value="{{ old('status',isset($data->status) ? $data->status : '' ) }}">
                                        <option value="">-- Select --</option>
                                        <option value="0">Enable</option>
                                        <option value="1">Disable</option>
                                    </select>
                                    <script>$('#status').val('{{ old('status',isset($data->status) ? $data->status : '' ) }}').attr("selected", "selected");</script>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">UPLOAD DATE</label>
                                <input type="date" name="upload_date" class="form-control" required  value="{{ old('upload_date',isset($data->upload_date) ? $data->upload_date : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">FROM DATE</label>
                                <input type="date" name="from_date" class="form-control" required value="{{ old('from_date',isset($data->from_date) ? $data->from_date : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">TO DATE</label>
                                <input type="date" name="to_date" class="form-control" required value="{{ old('to_date',isset($data->to_date) ? $data->to_date : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">FILE</label>@if(isset($data->file))<img src="{{asset('uploads/notice/'.$data->file)}}" style="display:inline-block;" alt="#" width="50" height="60" >@endif
                                <input type="file" name="file" id="image" required class="form-control" style="width:70%;display:inline-block;">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-success pull-right">{{ isset($data) ? "Update" : "Submit" }}</button>
                            </div>
                        </div>
                    </div>
                </form>
@endsection