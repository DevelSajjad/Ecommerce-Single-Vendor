@extends('admin.master')
@section('subcategory')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}">Dashboard</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Subcategory List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-30p">Category Name</th>
                        <th class="wd-25p">Subcategory Name EN</th>
                        <th class="wd-25p">Subcategory Name BN</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i title="Edit SubCategory" class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm" id="delete" title="Delete SubCategory"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                       {{-- @endforeach --}}
                    </tbody>
                    </table>
                </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Add Sub-Category
                        </div>
                        <form action="{{ route('add-category') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    @foreach ($category as $cat )
                                    <option value="{{ $cat->id }}" >{{ ucwords($cat->category_name_en) }}</option>
                                    @endforeach

                                </select>
                                @error('category_name_icon')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Category Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_en" value="{{ old('category_name_en')}}" placeholder="Category Name English">
                                @error('category_name_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Category Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_bn" value="{{ old('category_name_bn')}}" placeholder="Category Name Bangla">
                                @error('category_name_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Category" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
