@extends('admin.master')
@section('coupon')
active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}">Coupon</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Coupon
                        </div>
                        <form action="{{ url('/admin/edit-coupon') }}" method="post">
                            @csrf
                            <input type="hidden" name="coupon_id" value="{{ $coupon->id }}">
                            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Coupon Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="coupon_name" value="{{ $coupon->coupon_name }}" placeholder="Coupon Name English">
                                @error('coupon_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Coupon Discount(%): <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="coupon_discount" value="{{ $coupon->coupon_discount }}" placeholder="Coupon Discount">
                                @error('coupon_discount')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-dark">Coupon Date: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="date" min="{{ date('Y-m-d') }}" name="coupon_validity" value="{{ $coupon->coupon_validity }}" placeholder="Coupon Discount">
                                @error('coupon_validity')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Brand" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
