@extends('admin.master')
@section('subadmin')
    active
@endsection
@section('all-subadmin')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item ">SubAdmin</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8 m-auto">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Subadmin List</h6>
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-5p">SL</th>
                                    <th class="wd-20p">Name</th>
                                    <th class="wd-20p">Role Name</th>
                                    <th class="wd-15p">Email</th>
                                    <th class="wd-20p">Phone</th>
                                <th class="wd-20p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        <a href="{{ route('subadmin.edit', $user->id) }}" class="btn btn-info btn-sm"><i title="Edit SubAdmin" class="fa fa-pencil"></i></a>
                                        <form action="{{ route('subadmin.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" title="Subadmin Delete"><i class="fa fa-trash"></i></button>
                                        </form>
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
