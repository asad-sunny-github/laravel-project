@extends('website.master')
@section('title')
    Contact
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body border-0">
                        <h3>Contact With Us</h3>
                        <hr/>
                        <p>House #420, Road No #120 West Dhanmondi,Dhaka-1209,Bangladesh.</p>
                        <p>Phone: 01725655665</p>
                        <p>Phone: 01725655664</p>
                        <p>Contact Email: info@contact.com</p>
                        <p>Support Email: info@support.com</p>
                        <p>Fax No: 12234556</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body border-0">
                        <h3>Give Us Your Message</h3>
                        <hr/>
                        <form action="">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Your Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Your Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Your Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" class="form-control" placeholder="Enter Your Mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Your Message</label>
                                <div class="col-md-9">
                                    <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-9 offset-3">
                                    <input type="submit" name="name" class="btn btn-success" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.902304719796!2d90.39108011429695!3d23.750862994677075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1655266510728!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
