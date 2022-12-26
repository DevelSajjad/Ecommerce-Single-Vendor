@extends('admin.master')
@section('role-permission')
    active
@endsection
@section('all-role-permission')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item ">Permission</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Role Permission List</h6>
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
                                @foreach($permissions as $permission)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>{{ $permission->role->name }}</td>
                                    <td>
                                        <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-info btn-sm"><i title="Edit Permission" class="fa fa-pencil"></i></a>
                                        <form action="{{ route('permission.destroy', $permission->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" title="Permission Delete"><i class="fa fa-trash"></i></button>
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
