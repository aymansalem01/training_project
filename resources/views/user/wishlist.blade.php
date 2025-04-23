@extends('user.layout.layout')
@section('content')
    <section class="wishlist">
        <div class="container">
            <div style="display: flex; justify-content: space-between">
                <div>
                    <h5>Wishlist</h5>
                </div>
                <div>
                    <a href="" class=" wishlist_Button me-5">Move All To Bag</a>
                </div>
            </div>
            <div class="best_sell" style="margin-top: 60px;">
                <div class="card" style="min-width: 270px">
                    <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image"
                        style="width: 100%; height: 270px" />
                    <i class="fa-solid fa-trash card_icon"></i>
                    <div style="background-color: black; color: white; padding: 5px; text-align: center;">
                        <a href="" style="text-decoration: none;color: white;font-size: 12px;">
                            <span><i class="fa-solid fa-cart-plus"> </i> </span>
                            Add to Cart
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Test</h5>
                        <h6 class="card-text" style="color: red">$160</h6>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="for_you">
        <div class="container">
            <div style="display: flex; justify-content: space-between">
                <div>
                    <h5 class="hint" style="font-size: 20px; color: black;">Just For You</h5>
                </div>
                <div>
                    <a href="" class=" wishlist_Button me-5">See All</a>
                </div>
            </div>
            <div class="best_sell" style="margin-top: 60px;">
                <div class="card" style="min-width: 270px;">
                    <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image"
                        style="width: 100%; height: 270px;" />
                    <i class="fa-solid fa-eye card_icon"></i>
                    <div style="background-color: black; color: white; padding: 5px; text-align: center;">
                        <a href="" style="text-decoration: none;color: white;font-size: 12px;">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add to Cart
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Test</h5>
                        <h6 class="card-text" style="color: red;">$160</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
