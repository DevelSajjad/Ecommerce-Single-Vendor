@extends('admin.master')
@section('role')
    active
@endsection
@section('add-role')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item ">Role</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Add Role
                        </div>
                        <form action="{{ route('role.store') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label text-dark">Role Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ old('name')}}" placeholder="Role Name English">
                                @error('name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Role" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
