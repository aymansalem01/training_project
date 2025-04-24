<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" />
    <link rel="stylesheet" href="{{ asset('assets\css\home.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets\css\reg.css') }}" />

</head>

<body>
    <!----------------- nav------------->
    <section>
        <div class="start">
            <p>
                Summer Sale for all Swim suits And free Express Delivery -OFF 50%!
                <a href="" style="color: white"> ShopNow</a>
            </p>
        </div>
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <h3>Exclusive</h3>
                <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
                    <ul class="navbar-nav mx-auto justify-content-center">
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('home') }}"
                                style="font-size: 16px; font-weight: 400px">Home</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('contact') }}"
                                style="font-size: 16px; font-weight: 400px">Contact</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('about') }}"
                                style="font-size: 16px; font-weight: 400px">About</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('signup') }}"
                                style="font-size: 16px; font-weight: 400px">Sign Up</a>
                        </li>
                    </ul>
                    <form class="d-flex gap-2">
                        <div style="background-color: #f5f5f5" class="d-flex">
                            <input
                                style="
                    background-color: transparent;
                    border: none;
                    padding: 7px 12px;
                  "
                                type="text" placeholder="What are you looking for?" />
                            <button class="btn" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div style="margin: 10px; font-size: 25px">
                            <a href="{{route('wishlist.index')}}" style="color: black"><i class="far fa-heart icon" style="margin: 0 20px"></i></a>
                            <a href="{{route('cart.index')}}" style="color: black" ><i class="fas fa-shopping-cart icon"></i></a>
                        </div>
                        @auth
                        <div class="btn-group  dropdown">
                            <button type="button" data-bs-toggle="dropdown" aria-expanded="false" class="user_icon">
                                <i class="fa-solid fa-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end blur">
                                <li><a class="dropdown-item" style="font-size: 14px;" href="#"><i
                                            class="fa-solid fa-user"></i> Manage My Account</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-bag-shopping"></i> My
                                        Order</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-circle-xmark"></i> My
                                        Cancellation</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-star"></i> My
                                        Reviews</a></li>
                                <li><a class="dropdown-item" href="#"><i style=" transform: scaleX(-1);"
                                            class="fa-solid fa-arrow-right-to-bracket"></i> Logout</a></li>
                            </ul>
                        </div>
                        @endauth

                    </form>
                </div>
            </div>
        </nav>
        <hr />
    </section>
    <!------------------- nav-------------->
