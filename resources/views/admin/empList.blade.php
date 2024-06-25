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
            <div class="row">       
            
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Desiganation</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ isset($row->name) ? $row->name : '' }}</td>
                                <td>{{ isset($row->desiganation) ? $row->name : '' }}</td>
                                <td>{{ ($row->status==1) ? 'Disable' : 'Enable'  }}</td>
                                <td>@if($row->image!='')<img src="{{asset('uploads/emp/'.$row->image)}}" alt="#" width="50" height="60" />@endif</td>
                                <td> <a href="{{ route('employee.edit',$row->id) }}"><i class='fas fa-edit'></i></a></td>
                                <td>
                                <form action="{{ route('employee.destroy',$row->id) }}" method="post" >
                                    @csrf
                                    @method('Delete')
                                    <button herf="#" class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure ? Do you want to Delete this record ?')"><i class='fas fa-trash'></i></button>
                                </form>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>        
</div>

@endsection