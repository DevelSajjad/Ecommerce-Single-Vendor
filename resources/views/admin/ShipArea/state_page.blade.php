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
                <h6 class="card-body-title">State List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-25p">Division Name</th>
                        <th class="wd-25p">District Name</th>
                        <th class="wd-25p">State Name</th>
                        <th class="wd-25p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($states as $state)
                        <tr>
                            <td> {{ $state->division->division_name }} </td>
                            <td> {{ $state->district->district_name }} </td>
                            <td> {{ $state->state_name }} </td>
                            <td>
                                <a href="{{ url('admin/edit_state', $state->id) }}" class="btn btn-info btn-sm"><i title="Edit State" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete/state', $state->id) }}" class="btn btn-danger btn-sm" id="delete" title="State Delete"><i class="fa fa-trash"></i></a>
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
                            Add State
                        </div>
                        <form action="{{ route('add-state') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Division: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" name="division_name" id="division_id" data-placeholder="Choose one">
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
                                <label class="form-control-label text-dark">Select District: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" name="district_name" id="district_id" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    
                                </select>
                                @error('district_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">State Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="state_name" value="{{ old('state_name')}}" placeholder="State Name English">
                                @error('state_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add New State" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}backend/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#division_id").on('change', function () {
            var division_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ url('/admin/get_district/') }}/" + division_id,
                datatype: "json",
                success: function(data) {
                    $("#district_id").empty();
                    $.each(data, function(key, value) {
                        $("#district_id").append('<option value="'+value.id+'">'+value.district_name+' </option>');
                    })
                }
            });
        });
    });
</script>
@endsection
