@extends('user.layout.layout')
@section('content')
    <div class="full">
        <div class="left_image">
            <img src="{{asset('assets/images/regester.jpg')}}" alt="">
        </div>
        <div class="right_side">
            <div>
                <h1>Create an account</h1>
                <h6>Enter your details below </h6>
            </div>
            <form action="{{route('sign')}}" method="Post" >
                @csrf
                <div>
                    <input type="text" name="name" value="{{old('name')}}"  placeholder="Name" required>
                    @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
                </div>
                <div>
                    <input type="text" name="email" value="{{old('email')}}" placeholder="Email or Phone Number" required>
                    @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" required>
                    @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                </div>
                <button type="submit" class="btn btn-create mb-3">Create Account</button>
                <button type="button" class="btn btn-google">
                    <svg class="google-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path fill="#4285F4" d="M17.64 9.2c0-.637-.057-1.251-.164-1.84H9v3.481h4.844c-.209 1.125-.843 2.078-1.796 2.717v2.258h2.908c1.702-1.567 2.684-3.874 2.684-6.615z"/>
                        <path fill="#34A853" d="M9 18c2.43 0 4.467-.806 5.956-2.18l-2.908-2.259c-.806.54-1.837.86-3.048.86-2.344 0-4.328-1.584-5.036-3.711H.957v2.332C2.438 15.983 5.482 18 9 18z"/>
                        <path fill="#FBBC05" d="M3.964 10.71c-.18-.54-.282-1.117-.282-1.71s.102-1.17.282-1.71V4.958H.957C.347 6.173 0 7.548 0 9s.348 2.827.957 4.042l3.007-2.332z"/>
                        <path fill="#EA4335" d="M9 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.463.891 11.426 0 9 0 5.482 0 2.438 2.017.957 4.958L3.964 7.29C4.672 5.163 6.656 3.58 9 3.58z"/>
                    </svg>
                    Sign up with Google
                </button>
                <div class="login-link">
                    Already have account? <a href="{{route('login')}}">Log in</a>
                </div>
            </form>
        </div>
    </div>

    @endsection
