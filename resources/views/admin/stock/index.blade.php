@extends('admin.master')
@section('stock')
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
                        <th class="wd-20p">Product Price</th>
                        <th class="wd-10p">Product Quantity </th>
                        <th class="wd-10p">Status</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td> <img src="{{ asset($product->product_thumbnail) }}" alt="" style="width: 100px"> </td>
                            <td> {{ $product->product_name_en }} </td>
                            <td>{{ $product->selling_price }}</td>
                            <td>{{ $product->product_qty }}</td>
                            <td>
                                @if ($product->status == 1)
                                    <span class="badge badge-pill badge-success">Active</span>
                                    @else
                                    <span class="badge badge-pill badge-danger"> Inactive </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/edit-stock-product',$product->id) }}" class="btn btn-info btn-sm"><i title="Edit Product" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete-product',$product->id) }}" class="btn btn-danger btn-sm" id="delete" title="Product Delete"><i class="fa fa-trash"></i></a>
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
