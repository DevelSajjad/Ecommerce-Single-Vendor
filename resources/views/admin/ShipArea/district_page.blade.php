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
                <h6 class="card-body-title">District List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-50p">Division Name</th>
                        <th class="wd-50p">District Name</th>
                        <th class="wd-50p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($districts as $district)
                        <tr>
                            <td> {{ $district->division->division_name }} </td>
                            <td> {{ $district->district_name }} </td>
                            <td>
                                <a href="{{ url('admin/edit_district', $district->id) }}" class="btn btn-info btn-sm"><i title="Edit District" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete/district', $district->id) }}" class="btn btn-danger btn-sm" id="delete" title="District Delete"><i class="fa fa-trash"></i></a>
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
                            Add District
                        </div>
                        <form action="{{ route('add-district') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Division: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" name="division_name" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    @foreach ($divisions as $division )
                                    <option value="{{ $division->id }}" >{{ ucwords($division->division_name) }}</option>
                                    @endforeach
                                </select>
                                @error('division_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">District Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="district_name" value="{{ old('district_name')}}" placeholder="District Name English">
                                @error('district_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add New District" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
