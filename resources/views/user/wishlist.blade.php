@extends('user.layout.layout')
@section('content')
    <section class="wishlist">
        <div class="container">
            <div style="display: flex; justify-content: space-between">
                <div>
                    <h5>Wishlist</h5>
                </div>
                <div>
                    <a href="" onclick="moveAllToCart()" class=" wishlist_Button me-5">Move All To Bag</a>
                </div>
            </div>
            <div class="best_sell" style="margin-top: 60px;">
                @forelse ($wishlist as $wish)
                    <div class="card" style="min-width: 270px">
                        <img class="card-img-top" src="{{ asset('images/' . $wish->image->first()->image) }}"
                            alt="Card image" style="width: 100%; height: 270px" />
                        <span onclick="deleteWishlist({{$wish->id}})"><i class="fa-solid fa-trash card_icon"></i></span>
                        <div class="add_tocart"
                         style="background-color: black; color: white; padding: 5px; text-align: center;">
                            <p onclick="addItem({{ $wish->id }})" style="color: white;font-size: 12px;">
                                <span><i class="fa-solid fa-cart-plus"> </i> </span>
                                Add to Cart
                            </p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $wish->name }}</h5>
                            <h6 class="card-text" style="color: red">${{ $wish->price }}</h6>

                        </div>
                    </div>
                @empty
                    <div>
                        <h4 style="color: #DB4444">you don't have any product in wishlist</h4>
                    </div>
                @endforelse
            </div>
        </div>


    </section>
    <section class="for_you" style="margin-bottom: 140px">
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
                @foreach ($products as $product)
                    <div class="card" style="min-width: 270px;">
                        <img class="card-img-top" src="{{ asset('images/' . $product->image->first()->image) }}"
                            alt="Card image" style="width: 100%; height: 270px;" />
                            <a href="{{route('product',$product->id)}}"><i class="fa-solid fa-eye card_icon" ></i></a>
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
                            <div class="rating" style="margin-bottom: 10px;">
                                @php
                                    $averageRating = $product->review->avg('rate') ?? 0;
                                    $fullStars = floor($averageRating);
                                    $halfStar = ($averageRating - $fullStars) >= 0.5 ? 1 : 0;
                                @endphp

                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $fullStars)
                                        <span class="fa fa-star checked"></span>
                                    @elseif ($halfStar && $i == $fullStars + 1)
                                        <span class="fa fa-star-half-alt checked"></span>
                                        @php $halfStar = 0; @endphp
                                    @else
                                        <span class="fa fa-star"></span>
                                    @endif
                                @endfor
                                <p style="display: inline">({{ $product->review->count() }} reviews)</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        function moveAllToCart() {
            const moveToCartRoute = "{{ route('wishlist.moveToCart') }}";
            const csrfToken = "{{ csrf_token() }}";
            console.log()
            $.ajax({
                url: moveToCartRoute,
                method: "PUT",
                data: {
                    _token: csrfToken
                },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                    alert(xhr.responseJSON.message || "Something went wrong.");
                }
            });
        }
    </script>
@endsection
