@extends('admin.master')
@section('brands')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}">Starlight</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Brand List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-30p">Brand Image</th>
                        <th class="wd-25p">Brand Name EN</th>
                        <th class="wd-25p">Brand Name BN</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brand as $brandData)
                        <tr>
                            <td> <img src="{{ asset($brandData->brand_image) }}" alt="" style="width: 100px"> </td>
                            <td> {{ $brandData->brand_name_en }} </td>
                            <td>{{ $brandData->brand_name_bn }}</td>
                            <td>
                                <a href="{{ url('admin/edit-brand',$brandData->id) }}" class="btn btn-info btn-sm"><i title="Edit Brand" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete/brand/',$brandData->id) }}" class="btn btn-danger btn-sm" id="delete" title="Brand Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Add Brand
                        </div>
                        <form action="{{ route('add-brand') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_en" value="{{ old('brand_name_en')}}" placeholder="Brand Name English">
                                @error('brand_name_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_bn" value="{{ old('brand_name_bn')}}" placeholder="Brand Name Bangla">
                                @error('brand_name_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="brand_image">
                                @error('brand_image')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Brand" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
