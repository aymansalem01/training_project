@extends('user.layout.layout')
@section('content')
    <section style="margin-top: 80px; margin-bottom: 140px;">
        <div class="container">
            <ol class="breadcrumb " style="font-size: 14px; margin-bottom: 80px;">
                <li class="breadcrumb-item"><a href="#" class="opacity5"
                        style="text-decoration: none; color: black;">Home</a></li>
                <li class="breadcrumb-item " aria-current="page">Contact</li>
            </ol>
            <div class="row">
                <div class="col-md-3 col-ms-8 p-5 profile-box">
                    <div class="d-flex mb-3 ">
                        <div class="contact-icon"
                            style=" width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #dc3545;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;;">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="mt-2" style="font-size: 16px;">Call To Us</h4>
                        </div>
                    </div>
                    <div>
                        <p class="mb-2">We are available 24/7, 7 days a week.</p>
                        <p class="mb-4 ">Phone: +8801611112222</p>
                    </div>
                    <hr>
                    <div class="d-flex my-3 ">
                        <div class="contact-icon"
                            style=" width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #dc3545;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="mt-2" style="font-size: 16px;">Write To US</h4>
                        </div>
                    </div>
                    <div>
                        <p class="mb-3">Fill out our form and we will contact you within 24 hours.</p>
                        <p class="mb-2">Emails: customer@exclusive.com</p>
                        <p class="mb-0">Emails: support@exclusive.com</p>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-md-8 col-sm-12  p-5 profile-box">
                    <form action="{{route('conect')}}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-12 mb-4 ">
                                <label class="form-label required-field visually-hidden">Your Name</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Your Name *" required>
                                @error('name')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-12 mb-4">
                                <label class="form-label required-field visually-hidden">Your Email</label>
                                <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Your Email *" required>
                                @error('email')
                                <p class="error">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col-md-4 col-sm-12 mb-4">
                                <label class="form-label required-field visually-hidden">Your Phone</label>
                                <input type="tel" name="phone_number" class="form-control"  value="{{old('phone_number')}}" placeholder="Your Phone *" required>
                                @error('phone_number')
                                <p class="error">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label visually-hidden">Your Message</label>
                                <textarea class="form-control" name="message" rows="10" placeholder="Your Massage" style="min-height: 207px;"></textarea>
                                @error('message')
                                <p class="error">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="submit" class="submit-btn"
                                    style="background-color: #DB4444;
                                    color: white;
                                    border: none;
                                    padding: 16px 48px;
                                    border-radius: 5px;
                                    float: right;">Send
                                    Massage</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
