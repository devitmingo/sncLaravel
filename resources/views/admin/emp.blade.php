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
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name',isset($data->name) ? $data->name : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Father Name</label>
                                <input type="text" name="fatherName"class="form-control" placeholder="Enter Father Name" value="{{ old('fatherName',isset($data->fatherName) ? $data->fatherName : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Mother Name</label>
                                <input type="text" name="motherName" class="form-control" placeholder="Enter Mother Name" value="{{ old('motherName',isset($data->motherName) ? $data->motherName : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email',isset($data->email) ? $data->email : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Mobile</label>
                                <input type="tel" name="mobile"class="form-control" placeholder="Enter Mobile" value="{{ old('mobile',isset($data->mobile) ? $data->mobile : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">DOB</label>
                                <input type="date" name="dob"class="form-control" value="{{ old('dob',isset($data->dob) ? $data->dob : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Address</label>
                                <input type="text-area" class="form-control" name="address" placeholder="Address" value="{{ old('address',isset($data->address) ? $data->address : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Desiganation</label>
                                <input type="text" class="form-control" name="desiganation" placeholder="Desiganation" value="{{ old('desiganation',isset($data->desiganation) ? $data->desiganation : '' ) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="">-- Select --</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                </select>
                                <script>$('#gender').val('{{ old('gender',isset($data->gender) ? $data->gender : '' ) }}').attr("selected", "selected");</script>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Image</label>@if(isset($data->image))<img src="{{isset($data->image)}}" alt="#" width="50" height="60" >@endif
                                <input type="file" name="image" class="form-control" >
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