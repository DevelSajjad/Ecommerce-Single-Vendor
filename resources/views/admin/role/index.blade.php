@extends('admin.master')
@section('role')
    active
@endsection
@section('all-role')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item ">Roles</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8 m-auto">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Role List</h6>
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                <th class="wd-30p">SL</th>
                                <th class="wd-25p">Role Name</th>
                                <th class="wd-20p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ route('role.edit', $role->id) }}" class="btn btn-info btn-sm"><i title="Edit Role" class="fa fa-pencil"></i></a>
                                        <form action="{{ route('role.destroy', $role->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" title="Role Delete"><i class="fa fa-trash"></i></button>
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
