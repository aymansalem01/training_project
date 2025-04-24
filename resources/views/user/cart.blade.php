@extends('user.layout.layout')
@section('content')
    <style>
        .product-img {
            max-width: 50px;
            max-height: 50px;
        }

        .cart-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .quantity-selector {
            width: 80px;
        }

        .coupon-section {
            margin: 20px 0;
        }

        .cart-summary {
            padding: 20px;
            border-radius: 5px;
            border: solid 1px black
        }

        .checkout-btn {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .checkout-btn:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .apply-coupon {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .apply-coupon:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
    <section class="cart" style="margin-top: 80px; margin-bottom: 140px;">
        <div class="container">
            <ol class="breadcrumb mb-0" style="font-size: 14px">
                <li class="breadcrumb-item">
                    <a href="#" class="opacity5" style="text-decoration: none; color: black">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Cart</li>
            </ol>
            <div style="margin-top: 80px;">
                <form action="{{ route('update-cart', $cart->id) }}" method="post">
                    @csrf
                    @method('put')
                    <table class="table" style="text-align:center">
                        <thead>
                            <tr class="profile-box ">
                                <th class="p-3 col-3">Product</th>
                                <th class="p-3 col-3">Price</th>
                                <th class="p-3 col-3">Quantity</th>
                                <th class="p-3 col-3" class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="m-5">
                            <tr calss='profile-box m-3'>
                                @forelse($cart->items as $item)
                                    <td class="p-3">
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-sm btn-danger me-2"
                                                onclick="deleteItem({{ $item->id }})">×</button>
                                            <img src="{{ asset('images/' . $item->image->first()->image) }}"
                                                alt="LCD Monitor" class="product-img me-2">
                                            <span>{{ $item->name }}</span>
                                        </div>
                                    </td>
                                    <td class="p-3">${{ $item->price }}</td>
                                    <td class="p-3">
                                        <div class="input-group quantity-selector">
                                            <input type="number" name="quantities[{{ $item->id }}]"
                                                class="form-control" value="{{ $item->pivot->quantity }}" min="1">
                                        </div>
                                    </td>
                                    <td class="p-3 align-baseline ">
                                        ${{ $item->total_price != null ? $item->total_price : $item->price }}</td>
                            </tr>
                        @empty
                            <p>No Item Found</p>
                            @endforelse

                        </tbody>
                    </table>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary"
                        style="padding: 16px 48px;color:black">Return To Shop</a>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-outline-secondary" type="submit" style="padding: 16px 48px ;color:black">Update
                        Cart</button>
                </div>
            </div>
            </form>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="coupon-section">
                        <div class="input-group">
                            <input type="text" name="code" class="p-3 col-6" style="border:solid 1px;"
                                placeholder="Coupon Code">
                            <button class="btn apply-coupon text-white" style="padding: 16px 48px;margin-left:10px"
                                type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-md-4">
                    <div class="cart-summary">
                        <h5 class="mb-3">Cart Total</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <span>${{ $total_price }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping:</span>
                            <span>Free</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span>Total:</span>
                            <strong>${{ $total_price }}</strong>
                        </div>
                        <div style="text-align: center">
                            <button class="btn checkout-btn text-white" style="padding: 16px 48px">Process to
                                checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function deleteItem(itemId) {
            $.ajax({
                url: "{{ route('delete-item') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    itemId: itemId,
                },
                success: function(response) {
                    console.log(response);
                }
            });
        }
    </script>
@endsection
