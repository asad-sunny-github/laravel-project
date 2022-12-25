@extends('teacher.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <h4 class="card-title mb-4">Add Course Form</h4>
                    <form action="{{ route('course.new') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-start-date-input" class="col-sm-3 col-form-label">Starting Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="start_date" class="form-control" id="horizontal-start-date-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-end-date-input" class="col-sm-3 col-form-label">Ending Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="end_date" class="form-control" id="horizontal-end-date-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-fee-input" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="number" name="fee" class="form-control" id="horizontal-fee-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-short_description-input" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea name="short_description" class="form-control" id="horizontal-short_description-input" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-long-description-input" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea name="long_description" class="summernote" id="horizontal-long-description-input" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Course Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="horizontal-image-input">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Course</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
