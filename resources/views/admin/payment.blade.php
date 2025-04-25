@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Payment </h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>User name</th>
                                <th>number of items </th>
                                <th>payment way</th>
                                <th>total cash</th>
                                <th>shipping to</th>
                                <th>use coupon</th>
                                <th>tools</th>
                            </thead>
                            <tbody>
                                @foreach ( $payments as $payment )
                                <tr>
                                    <td>{{$payment->user->name}} </td>
                                    <td>{{$payment->cart->items()->count()}} </td>
                                    <td>{{$payment->paymet_way}} </td>
                                    <td>{{$payment->total_price}} </td>
                                    <td>{{$payment->shipp->address}}  </td>
                                    <td>{{$payment->use_coupon == false ? 'no' : $payment->coupon}}</td>
                                    <td>
                                        <a href="{{ route('show_payment', $payment->id) }}"
                                            class="btn btn-sm btn-info me-2 iconsh">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
