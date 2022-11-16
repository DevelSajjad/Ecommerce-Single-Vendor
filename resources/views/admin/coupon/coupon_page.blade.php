@extends('admin.master')
@section('coupon')
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
                <h6 class="card-body-title">Coupon List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-30p">Coupon Name</th>
                        <th class="wd-25p">Coupon Discount(%)</th>
                        <th class="wd-25p">Coupon Validity</th>
                        <th class="wd-25p">Status</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coupons as $coupon)
                        <tr>
                            <td> {{ $coupon->coupon_name }} </td>
                            <td>{{ $coupon->coupon_discount }}</td>
                            <td>{{ $coupon->coupon_validity }}</td>
                            <td>
                                @if ($coupon->status == 1)
                                    <span class="badge badge-pill badge-success">Availble</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Unavailble</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/edit-coupon',$coupon->id) }}" class="btn btn-info btn-sm"><i title="Edit Coupon" class="fa fa-pencil"></i></a>
                                <a href="{{ url('/admin/delete/coupon',$coupon->id) }}" class="btn btn-danger btn-sm" id="delete" title="Coupon Delete"><i class="fa fa-trash"></i></a>
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
                            Add Coupon
                        </div>
                        <form action="{{ route('add-coupon') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label text-dark">Coupon Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="coupon_name" value="{{ old('coupon_name')}}" placeholder="Coupon Name English">
                                @error('coupon_name')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Coupon Discount(%): <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="coupon_discount" value="{{ old('coupon_discount')}}" placeholder="Coupon Discount">
                                @error('coupon_discount')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Coupon Validity: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="date" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" name="coupon_validity" value="{{ old('coupon_validity')}}" placeholder="Coupon Discount">
                                @error('coupon_validity')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add New Coupon" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
