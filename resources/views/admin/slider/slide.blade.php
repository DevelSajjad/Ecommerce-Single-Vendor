@extends('admin.master')
@section('slider')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Starlight</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Slider List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-25p">Slider Image</th>
                        <th class="wd-20p">Slider Title</th>
                        <th class="wd-25p">Slider Description</th>
                        <th class="wd-10p">Status</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slider as $slide)
                        <tr>
                            <td> <img src="{{ asset($slide->image) }}" alt="" style="width: 100px"> </td>
                            <td> {{ $slide->title_en }} </td>
                            <td>{{ $slide->description_en }}</td>
                            <td>
                                @if ($slide->status == 1)
                                <span class="badge badge-pill badge-success">Active</span>
                                @else
                                <span class="badge badge-pill badge-danger"> Inactive </span>
                            @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/slide-edit',$slide->id) }}" class="btn btn-info btn-sm"><i title="Edit Slider" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete-slide',$slide->id) }}" class="btn btn-danger btn-sm" id="delete" title="Slide Delete"><i class="fa fa-trash"></i></a>
                                @if ($slide->status == 1)
                                    <a href="{{ url('admin/slide-status-inactive',$slide->id) }}" class="btn btn-danger btn-sm" title="inactive"><i class="fa fa-arrow-up"></i></a>  
                                    @else
                                    <a href="{{ url('admin/slide-status-active',$slide->id) }}" class="btn btn-success btn-sm" title="active"><i class="fa fa-arrow-down"></i></a>
                                @endif
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
                            Add Slider
                        </div>
                        <form action="{{ route('add-slide') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="slide_image">
                                @error('slide_image')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_en" value="{{ old('slide_title_en')}}" placeholder="Slide Title English">
                                @error('slide_title_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_bn" value="{{ old('slide_title_bn')}}" placeholder="Slide Title Bangla">
                                @error('slide_title_bn')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Description EN: <span class="tx-danger">*</span></label>
                                <textarea name="slide_desc_en" id="" cols="47" rows="3"></textarea>
                                @error('slide_desc_en')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Description BN: <span class="tx-danger">*</span></label>
                                <textarea name="slide_desc_bn" id="" cols="47" rows="3"></textarea>
                                @error('slide_desc_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Slide" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
