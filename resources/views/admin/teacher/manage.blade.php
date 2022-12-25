@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Teacher Info</h4>
                    @if(Session::has('message'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>Designation</th>
                            <th>Teacher Image</th>
                           <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->mobile }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->designation }}</td>
                                <td><img src="{{ asset($teacher->image) }}" height="50px" width="60px" alt=""></td>
                                {{--<td>
                                    @if($teacher->status==1)
                                        <a href="">Active</a>
                                    @else
                                        <a href="">Inactive</a>
                                    @endif
                                </td>--}}
                                <td>
                                    <a href="{{ route('teacher.edit',['id'=>$teacher->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('teacher.delete',['id'=>$teacher->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this!')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
