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
                            Update Sub-Category
                        </div>
                        <form action="{{ route('update-subcategory') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="subcatId" value="{{ $subcate->id }}">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" name="category_id" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    @foreach ($category as $cat )
                                    <option value="{{ $cat->id }}" {{ $cat->id == $subcate->category_id ? 'selected' : '' }} > {{ $cat->category_name_en }}  </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Sub Category Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subcategory_name_en" value="{{ $subcate->subcategory_name_en }}" placeholder="Sub Category Name English">
                                @error('subcategory_name_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Sub Category Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subcategory_name_bn" value="{{ $subcate->subcategory_name_bn }}" placeholder="Sub Category Name Bangla">
                                @error('subcategory_name_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Subcategory" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
