@extends('admin.master')
@section('categories')
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
                            Update Category
                        </div>
                        <form action="{{ route('update-category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="cat_id" value="{{ $cat->id }}">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Category Icon: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_icon" value="{{ $cat->category_icon }}" placeholder="Category Icon">
                                @error('category_name_icon')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Category Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_en" value="{{ $cat->category_name_en }}" placeholder="Category Name English">
                                @error('category_name_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Category Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_bn" value="{{ $cat->category_name_bn }}" placeholder="Category Name Bangla">
                                @error('category_name_bn')
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
