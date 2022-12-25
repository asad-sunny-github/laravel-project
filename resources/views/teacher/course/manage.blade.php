@extends('teacher.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Course Info</h4>
                    @if(Session::has('message'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table id="datatable" class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Course Fee</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->start_date }}</td>
                                <td>{{ $course->end_date }}</td>
                                <td>{{ $course->fee }}</td>
                                <td><img src="{{ asset($course->image) }}" height="50px" width="60px" alt=""></td>
                                <td>
                                    @if($course->status==1)
                                        <h3><a href=""><i class="fas fa-toggle-on"></i></a></h3>
                                    @else
                                        <h3><a href=""><i class="fas fa-toggle-off"></i></a></h3>
                                    @endif

                                </td>
                                <td class="btn-group">
                                    <a href="{{ route('course.edit',['id'=>$course->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('course.detail',['id'=>$course->id]) }}" class="btn btn-primary"><i class="fa fa-book-open"></i></a>
                                    <a href="{{ route('course.delete',['id'=>$course->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this!')"><i class="fa fa-trash"></i></a>
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
