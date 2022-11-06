@extends('admin.master')
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row">
                        {{-- ////// Side Bar --}}
                            <div class="col-sm-6">
                                @include('admin.include.sidebar')
                            </div>
                        {{-- //////End Side Bar --}}
                        <div class="col-sm-6">
                            <div class="card">
                                <h3 class="text-center"><span class="text-danger">Hi...!!</span><strong class="text-warning">{{ Auth::user()->name; }}</strong> Update Your Profile</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin-image-update') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" hidden name="old_image" value="{{ Auth::user()->image }}">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file" name="image"  class="form-control">
                                            @error('image')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger">Update Image</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
@endsection
