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
                        <th class="wd-30p">Slider Image</th>
                        <th class="wd-25p">Slider Title</th>
                        <th class="wd-25p">Slider Description</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slider as $slide)
                        <tr>
                            <td> <img src="{{ asset($slide->image) }}" alt="" style="width: 100px"> </td>
                            <td> {{ $slide->title }} </td>
                            <td>{{ $slide->description }}</td>
                            <td>
                                <a href="{{ url('admin/slide',$slide->id) }}" class="btn btn-info btn-sm"><i title="Edit Slider" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete-slide/',$slide->id) }}" class="btn btn-danger btn-sm" id="delete" title="Slide Delete"><i class="fa fa-trash"></i></a>
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
                                <input class="form-control" type="text" name="slide_title" value="{{ old('slide_title')}}" placeholder="Slide Title">
                                @error('slide_title')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Description: <span class="tx-danger">*</span></label>
                                <textarea name="slide_desc" id="" cols="47" rows="10"></textarea>
                                @error('slide_desc')
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
