@extends('admin.layout.app')
@section('body')
<div class="card">
    <div class="card-body">
        <div class="container-fluid " style="margin:30px;" >
            <div class="row">       
                <div class="col-6 col-md-4">
                    <h2>NOTICE FORM</h2>
                </div>
                <div class="col-6 col-md-4">
                    <a href=" " ><button type="submit" class="btn btn-primary">NOTICE List</button></a>                       
                </div>
            </div>
            <div class="row">       
            
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($records as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->subject }}</td>
                                <td>{{ $row->description }}</td>
                                <td>{{ ($row->status==1) ? 'Disable' : 'Enable'  }}</td>
                                
                                <td> <a href="{{ route('notice.edit',$row->id) }}"><i class='fas fa-edit'></i></a></td>
                                <td>
                                <form action="{{ route('notice.destroy',$row->id) }}" method="post" >
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