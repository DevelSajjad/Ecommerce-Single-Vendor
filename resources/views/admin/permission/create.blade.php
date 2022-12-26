@extends('admin.master')
@section('role-permission')
    active
@endsection
@section('add-role-permission')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item ">Add-Role-Permission</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Add Role Permission
                        </div>
                        <form action="{{ route('permission.store') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="">Select Role</label>
                                      <select class="form-control" name="role_id" id="">
                                        <option>Select Role</option>
                                        @foreach ($roles as $role )
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                      </select>
                                      @error('role_id')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                </div>

                                <div class="col-md-8">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Permission</th>
                                                <th>Add</th>
                                                <th>Edit</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                                <th>List</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Product</td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][list]" value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Brand</td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][list]" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Slider</td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][list]" value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Coupon</td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][list]" value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Review</td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][list]" value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Categories</td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][list]" value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Sub Categories</td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][list]" value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>SubSubCategories</td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][add]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][edit]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][view]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][delete]" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][list]" value="1">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="form-group">
                                        <input class="form-control btn btn-outline-primary" type="submit" value="Add Role Permission">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
