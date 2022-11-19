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
                            Update District
                        </div>
                        <form action="" method="post" >
                            @csrf
                            <input type="hidden" name="coupon_id" value="">

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Division: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" name="division_name" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    @foreach ($divisions as $division )
                                    <option value="{{ $division->id }}" {{ ($division->id == $district->division_id) ? 'selected' : '' }} >{{ ucwords($division->division_name) }}</option>
                                    @endforeach
                                </select>
                                @error('division_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">District Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="district_name" value="{{ $district->district_name }}" placeholder="District Name English">
                                @error('district_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update District" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
