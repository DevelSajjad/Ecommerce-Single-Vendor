@extends('admin.master')
@section('ship')
active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}">Coupon</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update State
                        </div>
                        <form action="{{ route('update-state') }}" method="post" >
                            @csrf
                            <input type="hidden" name="state_id" value="{{ $state->id }}">

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Division: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="division_id" name="division_name" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    @foreach ($divisions as $division )
                                    <option value="{{ $division->id }}" {{ ($division->id == $state->division_id) ? 'selected' : '' }} >{{ ucwords($division->division_name) }}</option>
                                    @endforeach
                                </select>
                                @error('division_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select District: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="district_id" name="district_name" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
            
                                    <option value="{{ $state->district->id }}" {{ ($state->district->id == $state->district_id) ? 'selected' : '' }} >{{ $state->district->district_name }}</option>
                                    
                                </select>
                                @error('district_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">State Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="state_name" value="{{ $state->state_name }}" placeholder="State Name English">
                                @error('state_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update State" name="submit">
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
