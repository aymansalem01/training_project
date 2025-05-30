@extends('user.layout.layout')
@section('content')
    <section>
        <form  method="post" action="{{route('order')}}">
            @csrf
        <div class="d-flex align-items-center justify-content-center mt-5 container" style="margin-bottom: 140px">
            <div class="">
                <div style="color:#818181;margin-top:80px">
                    Account / My Account / Product / View Cart / <span class="text-black"> Check Out</span>
                </div>
                <div style="margin-top: 80px;">
                    <h1>Billing Details</h1>
                </div>
                <div class="d-flex align-items-start justify-content-between ">
                        <div class="class=my-4 col-6 for_labe ">
                        <label class="mt-3 mb-1 w-100" style="color:#818181; font-weight:300;" for="first-name">
                            First Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="col-9 border-0 rounded-1" id="first-name" name="first_name" value="{{auth()->user()->name}}"
                            style="background-color:#F4F4F4;height:38px" required>

                        <label class="mt-5 mb-1 w-100" style="color:#818181; font-weight:300;" for="company-name">
                            Company Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="col-9 border-0 rounded-1" id="company-name" name="company_name"
                            style="background-color:#F4F4F4;height:38px" required>

                        <label class="mt-5 mb-1 w-100" style="color:#818181; font-weight:300;" for="street-address">
                            Street Address <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="col-9 border-0 rounded-1" id="street-address" name="address"
                            style="background-color:#F4F4F4;height:38px" required>

                        <label class="mt-5 mb-1 w-100" style="color:#818181; font-weight:300;" for="apartment">
                            Apartment, floor, etc. (optional)
                        </label>
                        <input type="text" class="col-9 border-0 rounded-1" id="apartment" name="more_info"
                            style="background-color:#F4F4F4;height:38px">

                        <label class="mt-5 mb-1 w-100" style="color:#818181; font-weight:300;" for="city">
                            Town / City <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="col-9 border-0 rounded-1" id="city" name="city"
                            style="background-color:#F4F4F4;height:38px" required>

                        <label class="mt-5 mb-1 w-100" style="color:#818181; font-weight:300;" for="phone">
                            Phone Number <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="col-9 border-0 rounded-1" id="phone"  name="phone_number"
                         value="{{auth()->user()->phone_number != null ? auth()->user()->phone_number : ""}}"
                            style="background-color:#F4F4F4;height:38px" required>

                        <label class="mt-5 mb-1 w-100" style="color:#818181; font-weight:300;" for="email">
                            Email Address <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="col-9 border-0 rounded-1" id="email" name="email"
                        value="{{auth()->user()->email != null ? auth()->user()->email : ""}}"
                            style="background-color:#F4F4F4;height:38px" required>

                        <div class="mt-5 d-flex align-items-center">
                            <input class="form-check-input mt-0" type="checkbox" id="save-info" name="save">
                            <label class="form-check-label mx-3" for="save-info" style="font-weight: 400;  color: #000;">
                                Save this information for faster check-out next time
                            </label>
                        </div>
                    </div>

                    <div class="col-5 d-flex align-items-start justify-content-start flex-wrap ">
                        <div class="w-75 pt-4">
                            @foreach ($cart->items as $item )
                            <div class="d-flex align-items-center justify-content-between mb-5">
                                <div class="d-flex align-items-center justify-content-start">

                                    <img src="{{asset('images/'.$item->image->first()->image)}}" alt="Product Image" style="width: 50px; height: auto;" />
                                    <div class="mx-3">
                                        <span style="font-weight: 500; font-size: 16px;"> {{$item->name}}</span>
                                    </div>
                                </div>
                                <div class="">
                                    <span style="font-weight: 500;">${{ $item->total_price != null ? $item->total_price : $item->price }}</span>
                                </div>

                            </div>
                            @endforeach
                            <input type="hidden" name="cart" value="{{$cart->id}}">
                            <div style="border-bottom: 1px solid #000;"
                                class="d-flex align-items-center justify-content-between mt-4 pb-3">
                                <div style="font-weight: 500;"> SubTotal:</div>
                                <div style="font-weight: 500;">
                                    {{$total_price}}$
                                    <input type="hidden" name="total_price" value="{{$total_price}}">
                                </div>
                            </div>
                            <div style="border-bottom: 1px solid #000;"
                                class="d-flex align-items-center justify-content-between mt-4 pb-3">
                                <div style="font-weight: 500;"> Shipping:</div>
                                <div style="font-weight: 500;">
                                    Free
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 pb-3">
                                <div style="font-weight: 500;"> Total:</div>
                                <div style="font-weight: 500;">
                                    {{$total_price}}$
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <input type="radio" id="bank" name="drone" value="bank" />
                                    <label class="mx-2" style="font-weight: 500;" for="bank">Bank</label>
                                    <div class="">
                                        <img class="mx-1" src="{{asset('assets\images\bkash.jpeg')}}" alt="bank"
                                            style="width: 50px; height: auto;" />
                                        <img class="mx-1" src="{{ asset('assets\images\visa.jpeg')}}" alt="bank"
                                            style="width: 50px; height: auto;" />
                                        <img class="mx-1" src="{{asset('assets\images\mastercard.jpeg')}}" alt="bank"
                                            style="width: 50px; height: auto;" />
                                        <img class="mx-1" src="{{asset('assets\images\visa.jpeg')}}" alt="bank"
                                            style="width: 50px; height: auto;" />
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-start">
                                <input type="radio" id="cash" name="drone" value="cash" checked />
                                <label class="mx-1" style="font-weight: 500;" for="cash">Cash on Delivery</label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between w-75 mt-3">
                            <div class="col-7">
                                <input class="w-100 rounded-1" style="height:56px;padding-left: 20px;"
                                    placeholder="Coupon Code" type="text" id="coupon" name="coupon" />
                            </div>
                            <div class="col-5 rounded-1 border-0">
                                <button class="w-100 mx-3 text-white border-0 rounded-1"
                                    style="background-color: #dc4345;height:56px">Apply Coupon</button>
                            </div>
                            <br>
                        </div>
                        <div class="w-100 rounded-1 border-0 mt-4">
                            <button class="col-3 text-white border-0 rounded-1" type="submit"
                                style="background-color: #dc4345;height:56px">Place Order</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    </section>
@endsection
