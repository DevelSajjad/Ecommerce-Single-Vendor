@extends('admin.master')
@section('ship')
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
                <h6 class="card-body-title">Division List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-50p">Division Name</th>
                        <th class="wd-50p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($divisions as $division)
                        <tr>
                            <td> {{ $division->division_name }} </td>
                            <td>
                                <a href="{{ url('admin/edit_division', $division->id) }}" class="btn btn-info btn-sm"><i title="Edit Coupon" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete/division', $division->id) }}" class="btn btn-danger btn-sm" id="delete" title="Coupon Delete"><i class="fa fa-trash"></i></a>
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
                            Add Division
                        </div>
                        <form action="{{ route('add-division') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label text-dark">Division Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="division_name" value="{{ old('division_name')}}" placeholder="Division Name English">
                                @error('division_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add New Division" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
