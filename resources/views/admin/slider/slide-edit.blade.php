@extends('admin.master')
@section('slider')
active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}l">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Slider
                        </div>
                        <form action="{{ route('slide-update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="slide_id" value="{{ $slide->id }}">
                            <input type="hidden" name="old_image" value="{{ $slide->image }}">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Title EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_en" value="{{ $slide->title_en }}" placeholder="Brand Name English">
                                @error('slide_title_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_bn" value="{{ $slide->title_bn }}" placeholder="Brand Name Bangla">
                                @error('slide_title_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Description EN: <span class="tx-danger">*</span></label>
                                <textarea name="slide_desc_en" id="" cols="47" rows="3">{{ $slide->description_en }}</textarea>
                                @error('slide_desc_en')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Description BN: <span class="tx-danger">*</span></label>
                                <textarea name="slide_desc_bn" id="" cols="47" rows="3">{{ $slide->description_bn }}</textarea>
                                @error('slide_desc_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Image: <span class="tx-danger">*</span></label>
                                <img class="ml-5" src="{{ asset($slide->image) }}" style="height: 150px; width: 200px" alt="">
                                <input class="form-control" type="file" name="slide_image">
                                @error('brand_image')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Slide" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
