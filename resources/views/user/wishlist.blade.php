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
                @forelse ($wishlist as $wish )
                <div class="card" style="min-width: 270px">
                    <img class="card-img-top" src="{{ asset('public/images/' . $wish->item->images->first()->path) }}" alt="Card image"
                        style="width: 100%; height: 270px" />
                    <i class="fa-solid fa-trash card_icon"></i>
                    <div style="background-color: black; color: white; padding: 5px; text-align: center;">
                        <p onclick="addItem({{$wish->item->id}})" style="color: white;font-size: 12px;">
                            <span><i class="fa-solid fa-cart-plus"> </i> </span>
                            Add to Cart
                        </p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$wish->item->name}}</h5>
                        <h6 class="card-text" style="color: red">${{$wish->item->price}}</h6>
                    </div>
                </div>
                @empty
                <div >
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
                @foreach ($products as $product )
                <div class="card" style="min-width: 270px;">
                    <img class="card-img-top" src="{{ asset('images/'. $product->image->first()->image) }}" alt="Card image"
                        style="width: 100%; height: 270px;" />
                    <i class="fa-solid fa-eye card_icon"></i>
                    <div class="add_tocart" style="background-color: black; color: white; padding: 5px; text-align: center;">
                        <p onclick="addItem({{$product->id}})" style="color: white;font-size: 12px;">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add to Cart
                        </p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="card-text" style="color: red;">${{$product->price}}</h6>
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

    $.ajax({
        url: moveToCartRoute,
        method: "POST",
        data: {
            _token: csrfToken
        },
        success: function(response) {
            alert(response.message);
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
