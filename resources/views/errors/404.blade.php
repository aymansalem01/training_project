@extends('user.layout.layout')
@section('content')
    <div class="container" style="margin-top: 80px;margin-bottom: 140px;">
        <ol class="breadcrumb mb-0" style="font-size: 14px">
            <li class="breadcrumb-item">
                <a href="#" class="opacity5" style="text-decoration: none; color: black">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">404 Error</li>
        </ol>

        <div style="margin-top: 161px; text-align: center;">
            <h1 style="font-size: 110px;">404 Not Found </h1>
            <p style="font-size: 16px;margin-top: 40px;">Your visited page not found. You may go home page.</p>
        </div>
        <div style="text-align: center;margin-top: 80px;">
            <a  href="{{route('home')}}"
                style="padding: 16px 48px;
        background-color: #DB4444;
        border: none;
        color: white;
        
        ">Back to home page </a>
        </div>
    </div>
@endsection
