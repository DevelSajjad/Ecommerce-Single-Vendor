@extends('admin.master')
@section('manage-product')
active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Product List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-20p">Product Image</th>
                        <th class="wd-20p">Product Name </th>
                        <th class="wd-10p">Product Quantity </th>
                        <th class="wd-20p">Product Price</th>
                        <th class="wd-5p">Discount Price</th>
                        <th class="wd-5p">Status</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $products)
                        <tr>
                            <td> <img src="{{ asset($products->product_thumbnail) }}" alt="" style="width: 100px"> </td>
                            <td> {{ $products->product_name_en }} </td>
                            <td>{{ $products->product_qty }}</td>
                            <td>{{ $products->selling_price }}</td>
                            <td>
                                @if ($products->discount_price == null)
                                    <span class="text-dark"> No Discount</span>
                                    @else  
                                    @php
                                        $amount = $products->selling_price - $products->discount_price;
                                        $disPer = round(($amount/$products->selling_price) * 100);
                                    @endphp
                                    <span> {{ $disPer }}%</span>
                                @endif
                            </td>
                            <td>
                                @if ($products->status == 1)
                                    <span class="badge badge-pill badge-success">Active</span>
                                    @else
                                    <span class="badge badge-pill badge-danger"> Inactive </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/edit-product',$products->id) }}" class="btn btn-info btn-sm"><i title="Edit Product" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete/product/',$products->id) }}" class="btn btn-danger btn-sm" id="delete" title="Product Delete"><i class="fa fa-trash"></i></a>
                                @if ($products->status == 1)
                                    <a href="{{ url('admin/status-inactive',$products->id) }}" class="btn btn-danger btn-sm">Inactive</a>  
                                    @else
                                    <a href="{{ url('admin/status-active',$products->id) }}" class="btn btn-success btn-sm">Active</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>
@endsection
