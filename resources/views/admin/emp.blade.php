@extends('admin.layout.app')
@section('body')
<div class="card">
    <div class="card-body">
        <div class="container-fluid " style="margin:30px;" >
            <div class="row">       
                <div class="col-6 col-md-4">
                    <h2>Empyloyee Form</h2>
                </div>
                <div class="col-6 col-md-4">
                    <a href="{{ route('employee.index') }}" ><button type="submit" class="btn btn-primary">Employee List</button></a>    
                                    
                </div>
            </div>
                    @if(isset($data))
                        <form action="{{ route('employee.update',$data->id) }}" method="post" enctype='multipart/form-data'>
                        @method('put')
                    @else
                        <form action="{{ route('employee.store') }}" method="post" enctype='multipart/form-data'>
                    @endif 
                    @csrf
                        <div class="form-row">       
                            <div class="form-group col-md-4">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control"required placeholder="Enter Name" value="{{ old('name',isset($data->name) ? $data->name : '' ) }}">
                            </div>                 
                            <div class="form-group col-md-4">
                                <label for="">Desiganation</label>
                                <input type="text" class="form-control" name="desiganation"required placeholder="Desiganation" value="{{ old('desiganation',isset($data->desiganation) ? $data->desiganation : '' ) }}">
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
                            <div class="form-group col-md-4">
                                <label for="">Image</label>@if(isset($data->image))<img src="{{asset('uploads/emp/'.$data->image)}}" style="display:inline-block;" alt="#" width="50" height="60" >@endif
                                <input type="file" name="image" id="image" required class="form-control" style="width:70%;display:inline-block;">
                            </div>
                            <div class="form-group col-md-12">
                                <center>
                                    <a href="{{route('employee.index')}}" type="button" class="btn btn-primary">Employee List</a>    
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="{{route('employee.create')}}" type="button" class="btn btn-warning">Reset</a>
                                </center>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>        
    </div>

@endsection