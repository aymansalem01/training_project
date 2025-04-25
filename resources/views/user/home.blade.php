@extends('user.layout.layout')
@section('content')
    <!-----------------------header------------------->
    <section>
        <div class="container">
            <div class="d-flex">
                <div class="w-25 ul_par">
                    <ul class="category_ul">
                        <li><a href=""> Woman's Fashion </a></li>
                        <li><a href=""> Men's Fashion </a></li>
                        <li><a href=""> Electronics </a></li>
                        <li><a href=""> Home & Lifestyle </a></li>
                        <li><a href=""> Medicine </a></li>
                        <li><a href=""> Sports & Outdoor </a></li>
                        <li><a href=""> Baby's & Toys </a></li>
                        <li><a href=""> Groceries & Pets </a></li>
                        <li><a href=""> Health & Beauty </a></li>
                    </ul>
                </div>
                <div class="w-75 right_dd">
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>
                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets\images\11.png') }}" alt="iPhone 14 Promotion" class="d-block"
                                    style="width: 100%; height: 390px" />
                                <div class="carousel-caption text-start"
                                    style="top: 50%; transform: translateY(-50%); bottom: auto; left: 10%;">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('assets\images\apple.png') }}" alt="Apple Logo"
                                            style="width: 40px; height: auto; margin-right: 15px;">
                                        <span class="text-white">iPhone 14 Series</span>
                                    </div>
                                    <h1 class="display-4 fw-bold mb-3">Up to 10%<br>off Voucher</h1>
                                    <div class="mt-4">
                                        <a href="#" class="text-white text-decoration-none fw-bold">
                                            Shop Now
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </a>
                                        <hr style="width: 120px; height: 2px; opacity: 1;" class="mt-1">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="{{ asset('assets\images\11.png') }}" alt="iPhone 14 Promotion" class="d-block"
                                    style="width: 100%; height: 390px" />
                                <div class="carousel-caption text-start"
                                    style="top: 50%; transform: translateY(-50%); bottom: auto; left: 10%;">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('assets\images\apple.png') }}" alt="Apple Logo"
                                            style="width: 40px; height: auto; margin-right: 15px;">
                                        <span class="text-white">iPhone 14 Series</span>
                                    </div>
                                    <h1 class="display-4 fw-bold mb-3">Up to 10%<br>off Voucher</h1>
                                    <div class="mt-4">
                                        <a href="#" class="text-white text-decoration-none fw-bold">
                                            Shop Now
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </a>
                                        <hr style="width: 120px; height: 2px; opacity: 1;" class="mt-1">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="{{ asset('assets\images\11.png') }}" alt="iPhone 14 Promotion" class="d-block"
                                    style="width: 100%; height: 390px" />
                                <div class="carousel-caption text-start"
                                    style="top: 50%; transform: translateY(-50%); bottom: auto; left: 10%;">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('assets\images\apple.png') }}" alt="Apple Logo"
                                            style="width: 40px; height: auto; margin-right: 15px;">
                                        <span class="text-white">iPhone 14 Series</span>
                                    </div>
                                    <h1 class="display-4 fw-bold mb-3">Up to 10%<br>off Voucher</h1>
                                    <div class="mt-4">
                                        <a href="#" class="text-white text-decoration-none fw-bold">
                                            Shop Now
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </a>
                                        <hr style="width: 120px; height: 2px; opacity: 1;" class="mt-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------->
    <!------------------flash sales-->
    <section class="flash_sales">
        <div class="container">
            <h5 class="hint">Today's</h5>

            <div class="flash">
                <div class="arr_slider">
                    <h1 class="h-gap">Flash sales</h1>
                    <div class="arrow">
                        <button class="btn nav-btn left_arr">
                            <i class="fa fa-arrow-left"></i>
                        </button>
                        <button class="btn nav-btn right_arr">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="glider-contain">
                    <div class="glider flash_slider">
                        @foreach ($items as $item)
                            <div class="card" style="min-width: 270px; height: 350px">
                                <img class="card-img-top" src="{{ asset('images/' . $item->image->first()->image) }}"
                                    alt="Card image" style="width: 100%; height: 250px" />
                                <a onclick="AddWishlist({{ $item->id }})">
                                    <i class="fa-solid fa-heart card_icon"></i></a>
                                    <a href="{{route('product',$item->id)}}"><i class="fa-solid fa-eye card_icon" style="top: 50px"></i></a>

                                <div class="add_tocart"
                                    style="background-color: black; color: white; padding: 5px; text-align: center;">
                                    <p style="text-decoration: none;color: white;font-size: 12px;"
                                        onclick="addItem({{ $item->id }})">
                                        <span><i class="fa-solid fa-cart-plus"> </i> </span>
                                        Add to Cart
                                    </p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <h6 class="card-text" style="color: red">${{ $item->total_price }}
                                        <span
                                            style="color:black;margin-left; text-decoration: line-through ">{{ $item->price }}$</span>
                                    </h6>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div style="text-align: center">
                <button href="#" class="view_bt">View All Products</button>
            </div>
        </div>
    </section>
    <hr />
    <!------------------ end flash sales-->
    <!------------------category   -------------->

    <section class="category">
        <div class="container">
            <h5 class="hint">Categories</h5>
            <div class="flash">
                <div class="arr_slider">
                    <h1 class="h-gap">Browes By Category</h1>
                    <div class="arrow">
                        <button class="btn nav-btn left_arr1">
                            <i class="fa fa-arrow-left"></i>
                        </button>
                        <button class="btn nav-btn right_arr1">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="glider-contain">
                    <div class="glider glider1 flash_slider">
                        <div class="card cat-card hov">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                        <div class="card cat-card">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                        <div class="card cat-card">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                        <div class="card cat-card">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                        <div class="card cat-card">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                        <div class="card cat-card">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                        <div class="card cat-card">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                        <div class="card cat-card">
                            <div class="cat-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div>
                                <h5>phones</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <!------------------ end category   -------------->
    <!----------------------this mounth----------------->
    <section class="this_month">
        <div class="container">
            <h5 class="hint">This month</h5>
            <div style="display: flex; justify-content: space-between">
                <div>
                    <h1 class="h-gap">Best Selling Products</h1>
                </div>
                <div style="margin-top: 18px">
                    <a href="" class="inline-bt px-5 py-3">view All</a>
                </div>
            </div>
            <div class="best_sell">
                @foreach ($best_sales as $item)
                    <div class="card" style="min-width: 270px; height: 350px">
                        <img class="card-img-top" src="{{ asset('images/' . $item->image->first()->image) }}"
                            alt="Card image" style="width: 100%; height: 250px" />
                        <a onclick="AddWishlist({{ $item->id }})">
                            <i class="fa-solid fa-heart card_icon"></i></a>
                            <a href="{{route('product',$item->id)}}"><i class="fa-solid fa-eye card_icon" style="top: 50px"></i></a>
                        <div class="add_tocart"
                         style="background-color: black; color: white; padding: 5px; text-align: center;">
                            <p style="text-decoration: none;color: white;font-size: 12px;"
                                onclick="addItem({{ $item->id }})">
                                <span><i class="fa-solid fa-cart-plus"> </i> </span>
                                Add to Cart
                            </p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <h6 class="card-text" style="color: red">${{ $item->total_price }}
                                <span
                                    style="color:black;margin-left; text-decoration: line-through ">{{ $item->price }}$</span>
                            </h6>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-------------------------end this mounth-------------------------->
    <!---------------------------jbl speaker-->
    <section class="jbl">
        <div class="container w-75">
            <div class="flash-banner">
                <div class="flash-text">
                    <h5>Categories</h5>
                    <h1>Enhance Your<br />Music Experience</h1>
                    <div class="timer">
                        <div class="timer-item">
                            <div>00</div>
                            <div style="font-size: 10px">Hours</div>
                        </div>
                        <div class="timer-item">
                            <div>00</div>
                            <div style="font-size: 10px">Days</div>
                        </div>
                        <div class="timer-item">
                            <div>00</div>
                            <div style="font-size: 10px">Minutes</div>
                        </div>
                        <div class="timer-item">
                            <div>00</div>
                            <div style="font-size: 10px">Seconds</div>
                        </div>
                    </div>
                    <button class="btn-buy">Buy Now!</button>
                </div>
                <div class="flash-img">
                    <img src="{{ asset('assets\images\jbl.png') }}" alt="Speaker" />
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------->
    <!-------------------------------our product--------------------->
    <section class="our_product">
        <div class="container">
            <h5 class="hint">Our Product</h5>

            <div class="flash">
                <div class="arr_slider">
                    <h1 class="h-gap">Explore Our Products</h1>
                    <div class="arrow">
                        <button class="btn nav-btn left_arr2">
                            <i class="fa fa-arrow-left"></i>
                        </button>
                        <button class="btn nav-btn right_arr2">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="glider-contain">
                    <div class="glider glider2 p-5">
                        @foreach ($all->chunk(8) as $group)
                            <div>
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-md-4 g-3 mb-3">
                                        @foreach ($group->slice(0, 4) as $item)
                                            <div class="col">
                                                <div class="card" style="min-width: 270px; height: 350px">
                                                    <img class="card-img-top"
                                                        src="{{ asset('images/' . ($item->image->first()->image ?? 'default.jpg')) }}"
                                                        alt="Card image" style="width: 100%; height: 250px" />
                                                    <a onclick="AddWishlist({{ $item->id }})">
                                                        <i class="fa-solid fa-heart card_icon"></i>
                                                    </a>
                                                    <a href="{{route('product',$item->id)}}"><i class="fa-solid fa-eye card_icon" style="top: 50px"></i></a>

                                                    <div class="add_tocart"
                                                        style="background-color: black; color: white; padding: 5px; text-align: center;">
                                                        <p style="font-size: 12px; cursor: pointer;"
                                                            onclick="addItem({{ $item->id }})">
                                                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item->name }}</h5>
                                                        <h6 class="card-text" style="color: red;">
                                                            ${{ $item->total_price }}
                                                            <span
                                                                style="color: black; margin-left: 8px; text-decoration: line-through;">
                                                                ${{ $item->price }}
                                                            </span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-4 g-3">
                                        @foreach ($group->slice(4, 4) as $item)
                                            <div class="col">
                                                <div class="card" style="min-width: 270px; height: 350px">
                                                    <img class="card-img-top"
                                                        src="{{ asset('images/' . ($item->image->first()->image ?? 'default.jpg')) }}"
                                                        alt="Card image" style="width: 100%; height: 250px" />
                                                    <a onclick="AddWishlist({{ $item->id }})">
                                                        <i class="fa-solid fa-heart card_icon"></i></a>
                                                        <a href="{{route('product',$item->id)}}"><i class="fa-solid fa-eye card_icon" style="top: 50px"></i></a>

                                                    <div class="add_tocart"
                                                        style="background-color: black; color: white; padding: 5px; text-align: center;">
                                                        <p style="font-size: 12px; cursor: pointer;"
                                                            onclick="addItem({{ $item->id }})">
                                                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item->name }}</h5>
                                                        <h6 class="card-text" style="color: red;">
                                                            ${{ $item->total_price }}
                                                            <span
                                                                style="color: black; margin-left: 8px; text-decoration: line-through;">
                                                                ${{ $item->price }}
                                                            </span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div style="text-align: center">
                        <button href="#" class="view_bt">View All Products</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------------------->
    <!----------------------featred---------------------->
    <section class="featured">
        <div class="container">
            <h5 class="hint">Featured</h5>
            <div class="flash">
                <h1 class="h-gap">New Arrival</h1>
            </div>
            <div class="promo-grid">
                <div class="left-large">
                    <img src="{{ asset('assets\images\ps5.png') }}" alt="PlayStation 5" />
                    <div class="text">
                        <h3>PlayStation 5</h3>
                        <p>Black and White version of the PS5 coming out on sale.</p>
                        <a href="#">Shop Now</a>
                    </div>
                </div>

                <div class="right-grid">
                    <div class="box" style="grid-column: span 2">
                        <img src="{{ asset('assets\images\woman.jpg') }}" class="merror_image" alt="Women's Collections"
                            style="left: 80px" />
                        <div class="text">
                            <h3>Women’s Collections</h3>
                            <p>Featured woman collections that give you another vibe.</p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>

                    <div class="box">
                        <img src="{{ asset('assets\images\spaker.png') }}" alt="Speakers" style="left: 20px" />
                        <div class="text">
                            <h3>Speakers</h3>
                            <p>Amazon wireless speakers</p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>

                    <div class="box">
                        <img src="{{ asset('assets\images\parfum.png') }}" alt="Perfume" />
                        <div class="text">
                            <h3>Perfume</h3>
                            <p>GUCCI INTENSE OUD EDP</p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------------------------->
    <!----------------------last_home-------------------------------->
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
    <!---------------------------------------------------------------->
    <script src="{{ asset('assets\js\home.js') }}"></script>
    <script></script>
@endsection
