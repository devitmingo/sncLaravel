@extends('admin.layout.app')
@section('body')
<div class="card">
    <div class="card-body">
        <div class="container-fluid " style="margin:30px; padding-bottom:100px;" >
            <div class="row">       
                <div class="col-6 col-md-6">
                    <h2>Gallery Form</h2>
                </div>
                <div class="col-6 col-md-6" style="margin-top:23px;">
                    <a href="{{ route('gallery.index') }}" ><button type="submit" class="btn btn-primary pull-right"> <i class="fa-solid fa-list"></i> Gallery List</button></a>    
                                    
                </div>
            </div>
                <hr>
                <form action="{{ route('gallery.store') }}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="container pb-10">
                        <div class="form-row">       
                            <div class="form-group col-md-4">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control"required placeholder="Enter Name"value="{{ old('name',isset($data->name) ? $data->name : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Image</label>@if(isset($data->image))<img src="{{asset('uploads/gallery/'.$data->image)}}" style="display:inline-block;" alt="#" width="50" height="60" >@endif
                                <input type="file" name="image" id="image" required class="form-control" style="width:70%;display:inline-block;">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Status</label>
                                    <select class="form-control" name="status" id="status">
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