@extends('admin.master')
@section('pending')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}">Gram Mela Admin</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            
            <div class="col-md-6">
                <ul class="list-group text-center">
                    <li class="list-group-item active text-center">
                        Shipping Information
                    </li>
                    <li class="list-group-item">
                        <strong>Name:</strong> {{ $order->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong> {{ $order->email }}
                    </li>
                    <li class="list-group-item">
                        <strong>Phone:</strong> {{ $order->phone }}
                    </li>
                    <li class="list-group-item">
                        <strong>Division:</strong> {{ $order->division->division_name }}
                    </li>
                    <li class="list-group-item">
                        <strong>District:</strong> {{ $order->district->district_name }}
                    </li>
                    <li class="list-group-item">
                        <strong>State:</strong> {{ $order->state->state_name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Post Code:</strong> {{ $order->post_code }}
                    </li>
                    <li class="list-group-item">
                        <strong>Order Date:</strong> {{ $order->order_date }}
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group text-center">
                    <li class="list-group-item active">
                        Billing Information
                    </li>
                    <li class="list-group-item">
                        <strong>Name:</strong> {{ $order->user->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Phone:</strong> {{ $order->user->phone }}
                    </li>
                    <li class="list-group-item">
                        <strong>Invoice No:</strong> {{ $order->invoice_no }}
                    </li>
                    <li class="list-group-item">
                        <strong>Transaction No:</strong> {{ $order->transaction_id }}
                    </li>
                    <li class="list-group-item">
                        <strong>Payment Method:</strong> {{ $order->payment_method }}
                    </li>
                    <li class="list-group-item">
                        <strong>Total Amount:</strong> {{ $order->amount }} TK
                    </li>
                    <li class="list-group-item">
                        <strong>Order Status:</strong> <span class="badge badge-pill badge-primary">{{ $order->status }}</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 mt-3 col-sm-12 ">
                <table class="table table-striped">
                    <thead class="bg-primary">
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Color</th>
                            <th>Product Size</th>
                            <th>Product QTY</th>
                            <th>Product Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $order_items as $order_item)
                            <tr>
                                <td> <img src="{{ asset($order_item->product->product_thumbnail) }}" height="50px" width="50px" alt="Image" srcset=""></td>
                                <td>{{ $order_item->product->product_name_en }}</td>
                                <td>{{ $order_item->color }}</td>
                                <td>{{ $order_item->size }}</td>
                                <td>{{ $order_item->qty }}</td>
                                <td>{{ $order_item->price }} TK</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
