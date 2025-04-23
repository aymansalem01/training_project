@extends('user.layout.layout')
@section('content')
    <section class="about">
        <div class="container">
            <!-------------------------first section-->
            <ol class="breadcrumb mb-0" style="font-size: 14px">
                <li class="breadcrumb-item">
                    <a href="#" class="opacity5" style="text-decoration: none; color: black">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">My Account</li>
            </ol>
            <div class="our_story d-flex justify-content-between">
                <div class="justify-content-center align-content-center" style="max-width: 500px">
                    <h1 style="font-size: 54px; margin-bottom: 40px">Our Story</h1>
                    <p>
                        Launced in 2015, Exclusive is South Asia’s premier online shopping
                        makterplace with an active presense in Bangladesh. Supported by
                        wide range of tailored marketing, data and service solutions,
                        Exclusive has 10,500 sallers and 300 brands and serves 3 millioons
                        customers across the region.
                    </p>
                    <p>
                        Exclusive has more than 1 Million products to offer, growing at a
                        very fast. Exclusive offers a diverse assotment in categories
                        ranging from consumer.
                    </p>
                </div>
                <div class="w-75" style="max-width: 837px; margin-right: -170px">
                    <img src="{{asset('assets\images\about1.jpg')}}" alt="" width="100%" height="100%" />
                </div>
            </div>
            <!-------------------------end first section-->
            <!--------------icon----------------->
            <div class="about_sect">
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-store fa-lg"></i>
                            </div>
                            <div class="stat-value">10.5k</div>
                            <div class="stat-label">Sellers active our site</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-dollar-sign fa-lg"></i>
                            </div>
                            <div class="stat-value">33k</div>
                            <div class="stat-label">Monthly Product Sale</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-gift fa-lg"></i>
                            </div>
                            <div class="stat-value">45.5k</div>
                            <div class="stat-label">Customer active in our site</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-coins fa-lg"></i>
                            </div>
                            <div class="stat-value">25k</div>
                            <div class="stat-label">Annual gross sale in our site</div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------end icon section-->
            <!-------------------image for owners-------------->
            <div class="team-section">
                <div class="team-card">
                    <img src="{{asset('assets\images\about1.jpg')}}" alt="Team Member">
                    <div class="team-name">Tom Cruise</div>
                    <div class="team-title">Founder & Chairman</div>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="team-card">
                    <img src="{{ asset('assets\images\about1.jpg')}}" alt="Team Member">
                    <div class="team-name">Emma Watson</div>
                    <div class="team-title">Managing Director</div>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="team-card">
                    <img src="{{asset('assets\images\about1.jpg')}}" alt="Team Member">
                    <div class="team-name">Will Smith</div>
                    <div class="team-title">Product Designer</div>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <!-----------------end image section---------------->
            <section class="last_home">
                <div class="container d-flex justify-content-center">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <div class="icon-circle">
                                <i class="fas fa-truck"></i>
                            </div>
                        </div>
                        <div class="feature-title">FREE AND FAST DELIVERY</div>
                        <p class="feature-description">
                            Free delivery for all orders over $140
                        </p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <div class="icon-circle">
                                <i class="fas fa-headset"></i>
                            </div>
                        </div>
                        <div class="feature-title">24/7 CUSTOMER SERVICE</div>
                        <p class="feature-description">Friendly 24/7 customer support</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <div class="icon-circle">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="feature-title">MONEY BACK GUARANTEE</div>
                        <p class="feature-description">We return money within 30 days</p>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
