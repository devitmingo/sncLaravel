@extends('admin.layout.app')
@section('body')
<div class="card">
    <div class="card-body">
        <div class="container-fluid " style="margin:30px;" >
            <div class="form-row">       
                <div class="form-group col-12">
                    <h2>User Form</h2>
                </div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
          
                    <form action="{{ route('user.store') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-row">       
                            <div class="form-group col-md-4">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name',isset($data->name) ? $data->name : '') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email',isset($data->email) ? $data->email : '') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Mobile</label>
                                <input type="tel" name="mobile"class="form-control" placeholder="Enter Mobile" value="{{ old('mobile',isset($data->mobile) ? $data->mobile : '') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Password</label>
                                <input type="text" name="password"class="form-control" placeholder="Enter Mobile" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password_confirmation"class="form-control" placeholder="Enter Mobile">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Role</label>
                                <select class="form-control" name="role">
                                    <option value="">-- Select --</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Blog</option>
                                    <option value="2">Employee</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Status</label>
                                <select class="form-control" name="status">
                                    <option value="">-- Select --</option>
                                    <option value="0">Enable</option>
                                    <option value="1">Disable</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <center>
                                    <button type="button" class="btn btn-primary">Back</button>    
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="button" class="btn btn-warning">Reset</button>
                                </center>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>        
    </div>

@endsection