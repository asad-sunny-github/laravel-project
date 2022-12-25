@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
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
                    <h4 class="card-title mb-4">Edit Teacher</h4>
                    <form action="{{ route('teacher.update',['id'=>$teacher->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input"  class="col-sm-3 col-form-label">Full name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{ $teacher->name }}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{ $teacher->email }}" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="password" value="{{ $teacher->password }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" value="{{ $teacher->mobile }}" class="form-control" id="horizontal-mobile-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea name="address" class="form-control" id="horizontal-address-input" cols="30" rows="4">{{ $teacher->address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Teacher Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="horizontal-image-input">
                                <div class="mt-2">
                                     <img width="150px" height="100px" src="{{ asset($teacher->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-designation-input" class="col-sm-3 col-form-label">Designation</label>
                            <div class="col-sm-9">
                                <input type="text" name="designation" value="{{ $teacher->designation }}" class="form-control" id="horizontal-designation-input">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
