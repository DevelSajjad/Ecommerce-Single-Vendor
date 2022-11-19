@extends('admin.master')
@section('ship')
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
                            Update Division
                        </div>
                        <form action="{{ route('update-division') }}" method="post" >
                            @csrf
                            <input type="hidden" name="coupon_id" value="{{ $division->id }}">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Division Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="division_name" value="{{ $division->division_name }}" placeholder="Division Name English">
                                @error('division_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Division" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
