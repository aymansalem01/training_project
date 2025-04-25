@extends('user.layout.layout')
@section('content')
    <div class="container" style="margin-top: 80px;margin-bottom: 140px;">
        <ol class="breadcrumb mb-0" style="font-size: 14px; ">
            <li class="breadcrumb-item">
                <a href="#" class="opacity5" style="text-decoration: none; color: black">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">{{$item->category->name}}</li>
            <li class="breadcrumb-item" aria-current="page">{{$item->name}}</li>
        </ol>
        <div class="row" style="margin-top: 80px; max-height: 600px; margin-bottom: 140px;">
            <div class="col-md-1 d-flex flex-wrap flex-md-column">
                @foreach ($item->image as $image )
                <div class="mb-3  " style="height: 113px; text-align: center;background-color: #F5F5F5;">
                    <img src="{{asset('images/' . $image->image)}}" alt="" class="w-100 mt-3">
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <img src="{{asset ( 'images/' . $item->image->first()->image)}}" alt="" class="w-100 h-auto" style="background-color: #F5F5F5;">
            </div>
            <div class="col-md-4 ms-5">

                <div class="w-100">
                    <h1 class="product-title">{{$item->name}}</h1>
                    <div class="d-flex gap-2 mt-3">
                        <p class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </p>
                        <p>({{$item->review->count()}} reviews)</p>
                        <p> | <span class="stock-text">in stock</span></p>
                    </div>
                    <h2 class="product-title">${{$item->price}}</h2>
                    <p class="mb-3">
                       {{$item->describtion}}
                    </p>
                    <hr>

                    <div class="mb-2 d-flex align-items-center">
                        <h6 style="font-weight: 500; margin-right: 10px;">Colours:</h6>
                        <label class="color-circle color-white">
                            <input type="radio" name="color" value="white" hidden>
                        </label>
                        <label class="color-circle color-red">
                            <input type="radio" name="color" value="red" hidden>
                        </label>
                    </div>

                    <div class="mb-2 d-flex align-items-center">
                        <h6 class="size-label">Size:</h6>
                        <div class="d-flex gap-2 ms-3">
                            <label class="for_size">
                                <input type="radio" name="size" value="XS" hidden> XS
                            </label>
                            <label class="for_size">
                                <input type="radio" name="size" value="S" hidden> S
                            </label>
                            <label class="for_size">
                                <input type="radio" name="size" value="M" hidden> M
                            </label>
                            <label class="for_size">
                                <input type="radio" name="size" value="L" hidden> L
                            </label>
                            <label class="for_size">
                                <input type="radio" name="size" value="XL" hidden> XL
                            </label>
                        </div>
                    </div>
                    <form action="{{route('addFormSingle',$item->id)}}" method="post">
                        @csrf
                    <div class="mb-4 d-flex align-items-center">
                        <div class="d-flex me-2 pt-3" >
                            <p class="quantity-btn" onclick="document.getElementById('quantity').value--">−</p>
                            <input type="number" name="quantity" id="quantity" value="1" class="quantity-box">
                            <p class="quantity-btn"
                                onclick="document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value) + 1">+</p>
                        </div>
                        <button class="buy-btn" style="padding: 16px 48px;" type="submit">Buy Now</button>
                        <a href="{{route('addwishSingle',$item->id)}}" class="heart-btn ms-3">
                            <i class="far fa-heart" style="font-size: 25px;"></i>
                        </a>
                    </div>
                </form>
                    <!-- Delivery Info -->
                    <div class="delivery-box">
                        <div class="delivery-item">
                            <div class="delivery-icon"><i class="fas fa-truck"></i></div>
                            <div>
                                <h6 class="delivery-title">Free Delivery</h6>
                                <p class="delivery-text">
                                    <a href="#" class="delivery-link">Enter your postal code for Delivery
                                        Availability</a>
                                </p>
                            </div>
                        </div>
                        <div class="delivery-item">
                            <div class="delivery-icon"><i class="fas fa-exchange-alt"></i></div>
                            <div>
                                <h6 class="delivery-title">Return Delivery</h6>
                                <p class="delivery-text">
                                    Free 30 Days Delivery Returns.
                                    <a href="#" class="delivery-link">Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="best_sell" style="margin-top: 60px;">
            @foreach ($products as $product)
                <div class="card" style="min-width: 270px;">
                    <img class="card-img-top" src="{{ asset('images/' . $product->image->first()->image) }}"
                        alt="Card image" style="width: 100%; height: 270px;" />
                    <i class="fa-solid fa-eye card_icon"></i>
                    <div class="add_tocart"
                        style="background-color: black; color: white; padding: 5px; text-align: center;">
                        <p onclick="addItem({{ $product->id }})" style="color: white;font-size: 12px;">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add to Cart
                        </p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h6 class="card-text" style="color: red;">${{ $product->price }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
