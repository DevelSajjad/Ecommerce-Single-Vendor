@extends('admin.master')
@section('processing')
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
                <h6 class="card-body-title">Processing Order List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-15p">Order Date</th>
                        <th class="wd-15p">Invoice No</th>
                        <th class="wd-20p">Amount</th>
                        <th class="wd-15p">TNX ID</th>
                        <th class="wd-15p">Status</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($processing_order as $order )
                        <tr>
                            <td> {{ $order->order_date }} </td>
                            <td> {{ $order->invoice_no }} </td>
                            <td> {{ $order->amount }} </td>
                            <td> {{ $order->transaction_id }} </td>
                            <td> {{ $order->status }} </td>
                            <td>
                                <a href="{{ url('admin/view/single_order',$order->id) }}" class="btn btn-info btn-sm"><i title="View Order" class="fa fa-eye"></i></a>
                                {{-- <a href="{{ url('admin/delete-category',$order->id) }}" class="btn btn-danger btn-sm" id="delete" title="Delete Category"><i class="fa fa-trash"></i></a> --}}
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
