@extends('admin.master')
@section('brands')
active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}l">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Brand
                        </div>
                        <form action="{{ route('brand-update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                            <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_en" value="{{ $brand->brand_name_en }}" placeholder="Brand Name English">
                                @error('brand_name_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_bn" value="{{ $brand->brand_name_bn }}" placeholder="Brand Name Bangla">
                                @error('brand_name_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Image: <span class="tx-danger">*</span></label>
                                <img class="ml-5" src="{{ asset($brand->brand_image) }}" style="height: 150px; width: 200px" alt="">
                                <input class="form-control" type="file" name="brand_image">
                                @error('brand_image')
                                    <span class="text-danger"> {{ $message }}</span>
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
