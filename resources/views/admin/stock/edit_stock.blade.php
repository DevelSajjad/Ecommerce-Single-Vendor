@extends('admin.master')
@section('stock')
active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}">Stock</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Product Stock
                        </div>
                        <form action="{{ route('update-stock', $product->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label text-dark">Product Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" disabled name="name" value="{{ $product->product_name_en }}" placeholder="Product Name English">
                                @error('product_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Product Code: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" disabled name="produt_code" value="{{ $product->product_code }}" placeholder="Product Code">
                                @error('product_code')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-dark">Product QTY: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text"  name="product_qty" value="{{ $product->product_qty }}" placeholder="Product QTY">
                                @error('product_qty')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Stock" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
