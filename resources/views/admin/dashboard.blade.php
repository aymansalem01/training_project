@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="row">

            <div class="card mt-4 shadow-lg border-0 rounded-lg cardItem col-md-10 text-center ms-5">

                <div class="card-body">
                    <ul style="border: none" class="list-group list-group-flush">
                        @foreach($payments as $payment)
                        <li class="booking-item d-flex align-items-center justify-content-between hover-effect-list ">

                            <div class="user-info">
                                <h2>{{$payment->user->name}} </h2>
                            <div class="d-flex flex-column">
                                <h6 style="font-size: 2rem" class="fw-bold mb-1"> </h6>
                            <h2  style="font-size: 2rem ; color: black;" class="badge bg-purple p-2 fw-bold fs-6">{{$payment->total_price}} $ </h2>
                                
                            </div>
                        </div>
                            <div class="d-flex flex-column align-items-center" style="display:flex; gap: 20px">
                                 <span style="font-size: 2rem" class="badge bg-light text-dark p-2"><i style="font-size: 2rem" class="fas fa-credit-card me-1"></i> {{$payment->paymet_way}}</span>
                            </div>

                        </li>
                         @endforeach
                    </ul>
                </div>
            </div>


        </div>



    </div>
@endsection
