@extends('teacher.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Course Detail Info</h4>
                    <table class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Course Id</th>
                            <td>{{ $course->id }}</td>
                        </tr>
                        <th>Course Teacher</th>
                        <td>{{ $course->teacher_name }}</td>
                        <tr>
                            <th>Course Title</th>
                            <td>{{ $course->title }}</td>
                        </tr>
                        <tr>
                            <th>Course Start Date</th>
                            <td>{{ $course->start_date }}</td>
                        </tr>
                        <tr>
                            <th>Course End Date</th>
                            <td>{{ $course->end_date }}</td>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <td>{{ $course->fee }}</td>
                        </tr>
                        <tr>
                            <th>Course Short Description</th>
                            <td>{{ $course->short_description }}</td>
                        </tr>
                        <tr>
                            <th>Course Long Description</th>
                            <td>{!! $course->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Course Image</th>
                            <td><img src="{{ asset($course->image) }}" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
