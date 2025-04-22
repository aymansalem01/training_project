@extends('user.layout.layout')
@section('content')
    <div class="full">
        <div class="left_image">
            <img src="{{asset('assets/images/regester.jpg')}}" alt="">
        </div>
        <div class="right_side">
            <div>
                <h1>Log in to Exclusive</h1>
                <h6>Enter your details below </h6>
            </div>
            <form action="{{route('log')}}" method="post">
                @csrf
                <div>
                    <input type="text" name="email" value="{{old('email')}}"  placeholder="Email or Phone Number" required>
                    @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
                </div>
                <div>
                    <input type="password" name="password"  placeholder="Password" required>
                    @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                </div>
                <div class="btn-coll">
                <button type="submit" class="btn btn-create mb-3">Log in</button>
                <div class="login-link mt-2">
                    <a href="#">Forget password?</a>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
