@extends('admin.layout.layout')

@section('content')
<style>
    .form-container {
        width: 100%;
        max-width: 400px;
        background: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }
    .form-control,
    .form-select,
    .btn-custom {
        height: 45px;
        border-radius: 10px;
        font-size: 16px;
        width: 100%;
        color: #333
    }
    .btn-custom {
        background-color: #a92dfc;
        border: none;
        color: white;
        font-weight: bold;
        transition: 0.3s ease;
        width: 100%;
    }
    .btn-custom:hover {
        background-color: #911ede;
        color: white
    }
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        background-image: url("{{ asset('assets/img/create9.jpg') }}");
        background-size: cover;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 40px;
        font-weight: bold;
        color: black;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px
    }

    .custom-error {
        background-color: #ffceec;
        font-weight: bold;
        font-size: 14px;
        color: #a49e9e;
        padding: 10px;
        border-radius: 20px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
    }
</style>

<div class="form-container">
    <h2>Update coupon</h2>

    <form action="{{ route('coupon.update', $coupon->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="code">Coupon Code</label>
            <input type="text" name="code" id="code" class="form-control mb-3" placeholder="Enter coupon code"
                value="{{ old('code', $coupon->code) }}" required>
            @error('code')
                <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="value">Value of coupon</label>
            <input type="integer" name="value" id="code" class="form-control mb-3" placeholder="Enter coupon Value"
                value="{{ old('value',$coupon->value) }}" required>
            @error('value')
                <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-custom w-100">Update coupon</button>
    </form>
</div>
@endsection
