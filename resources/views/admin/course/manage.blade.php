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
                            <th>Instructor Info</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr class="{{ $course->status==0?'bg-warning':'' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->start_date }}</td>
                                <td>{{ $course->end_date }}</td>
                                <td>{{ $course->fee }}</td>
                                <td>
                                    <a href="{{ route('instructor.info',['id'=>$course->teacher_id]) }}">{{ $course->teacher->name }}</a>
                                </td>
                                <td>
                                    @if($course->status==1)
                                        <h5>Published</h5>
                                    @else
                                        <h5>Unpublished</h5>
                                    @endif
                                </td>
                                <td class="btn-group">
                                    <a href="{{ route('admin.course-detail',['id'=>$course->id]) }}" class="btn btn-primary"><i class="fa fa-book-open"></i></a>
                                    @if($course->status==1)
                                        <a class="btn btn-success" href="{{ route('admin.course-status',['id'=>$course->id]) }}"><i class="fas fa-arrow-up"></i></a>
                                    @else
                                        <a class="btn btn-danger" href="{{ route('admin.course-status',['id'=>$course->id]) }}"><i class="fas fa-arrow-down"></i></a>
                                    @endif
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
