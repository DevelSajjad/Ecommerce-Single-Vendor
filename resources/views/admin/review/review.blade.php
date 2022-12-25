@extends('admin.master')
@section('review')
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
            <div class="col-md-12">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Review List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-20p">Product Image</th>
                            <th class="wd-15p">User Name</th>
                            <th class="wd-20p">Comments</th>
                            <th class="wd-10p">Ratings</th>
                            <th class="wd-15p">Status</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $review)
                        <tr>
                            <td> <img src="{{ asset($review->product->product_thumbnail) }}" height="50px" width="50px" alt=""> </td>
                            <td> {{ $review->user->name }} </td>
                            <td><textarea cols="20" rows="2">{{ $review->comment }}</textarea></td>
                            <td>{{ $review->rating }}</td>
                            <td>
                                @if ($review->status == 'Approve')
                                    <span class="badge badge-pill badge-success">Approved</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Pending</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/review/approve', $review->id) }}" class="btn btn-info btn-sm"><i title="Approve" class="fa fa-arrow-circle-up"></i></a>
                                <a href="{{ url('/admin/review/delete', $review->id) }}" class="btn btn-danger btn-sm" id="delete" title="Comment Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
            
        </div>
    </div>
</div>
@endsection
