@extends('frontend.master')

@section('content')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-3 col-sm-3">
                    @include('user.include.sidebar')
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                    <tr style="background: #E9EBEC;">
                                        <td class="col-md-1">
                                            <label for="">Date</label>
                                        </td>
                                        <td class="col-md-3">
                                        <label for="">Total</label>
                                        </td>
        
                                        <td class="col-md-2">
                                            <label for="">Payment</label>
                                        </td>
        
                                        <td class="col-md-2">
                                            <label for="">Invoice</label>
                                        </td>
        
                                        <td class="col-md-2">
                                            <label for="">Order </label>
                                        </td>
        
                                        <td class="col-md-1">
                                            <label for="">Action</label>
                                        </td>
        
                                    </tr>
        
                                @foreach ($cancel_orders as $order)
                                    <tr>
                                        <td class="col-md-1">
                                        <strong>{{ $order->order_date }}</strong>
                                        </td>
                                        <td class="col-md-3">
                                        <strong>৳{{ $order->amount }}</strong>
                                        </td>
        
                                        <td class="col-md-2">
                                        <strong>{{ $order->payment_method }}</strong>
                                        </td>
        
                                        <td class="col-md-2">
                                        <strong>{{ $order->invoice_no }}</strong>
                                        </td>
        
                                        <td class="col-md-2 text-center">
                                            <span class="badge badge-pill badge-warning" style="background: #418DB9; text:white;">{{ ucwords($order->status) }}</span>
                                        </td>
                                        <td class="col-md-1">
                                            <a href="{{ url('user/order-view/'.$order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
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
