@extends('website.master')
@section('title')
    Login
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3 class="text-muted">Login</h3>
                        <hr/>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-9 offset-3">
                                <input type="submit" name="btn" class="btn btn-outline-success px-5" value="Login">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3 class="text-muted">Registration</h3>
                        <hr/>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-9 offset-3">
                                <input type="submit" name="btn" class="btn btn-outline-primary px-5" value="Register">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
