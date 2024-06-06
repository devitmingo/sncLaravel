@extends('admin.layout.app')
@section('body')
<div class="card">
    <div class="card-body">
        <div class="container-fluid " style="margin:30px;" >
            <div class="row">       
                <div class="col-6 col-md-4">
                    <h2>Gallery List</h2>
                </div>
                <div class="col-6 col-md-4">
                    <a href="{{ route('gallery.index') }}" ><button type="Button" class="btn btn-primary">Add Gallery</button></a>    
                                    
                </div>
            </div>
            <div class="row">       
            
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
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
                                <td><img src="{{asset('uploads/gallery/'.$row->image)}}" alt="#" width="50" height="60" /></td>
                                <td>{{ ($row->status==1) ? 'Disable' : 'Enable'  }}</td>
                                <td> <a href="{{ route('gallery.edit',$row->id) }}"><i class='fas fa-edit'></i></a></td>
                                <td>
                                <form action="{{ route('gallery.destroy',$row->id) }}" method="post" >
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