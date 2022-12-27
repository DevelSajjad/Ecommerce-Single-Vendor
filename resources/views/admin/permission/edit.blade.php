@extends('admin.master')
@section('role-permission')
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
                            Update Role Permission
                        </div>
                        <form action="{{ route('permission.update', $permission->id) }}" method="post" >
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="">Select Role</label>
                                      <select class="form-control" name="role_id" id="">
                                        <option>Select Role</option>
                                        @foreach ($roles as $role )
                                            <option value="{{ $role->id }}" {{ ($role->id == $permission->role_id) ? 'selected' : '' }} >{{ $role->name }}</option>
                                        @endforeach
                                      </select>
                                      @error('role_id')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                </div>

                                <div class="col-md-8">

                                    <table class="table table-bordered table-responsive table-danger">
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
                                                    <input type="checkbox" name="permission[product][add]"
                                                        @isset($permission['permission']['product']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][edit]"
                                                    @isset($permission['permission']['product']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][view]"
                                                    @isset($permission['permission']['product']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][delete]" 
                                                    @isset($permission['permission']['product']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[product][list]" 
                                                    @isset($permission['permission']['product']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Brand</td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][add]" 
                                                            @isset($permission['permission']['brand']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][edit]" 
                                                            @isset($permission['permission']['brand']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][view]" 
                                                            @isset($permission['permission']['brand']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][delete]" 
                                                            @isset($permission['permission']['brand']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[brand][list]" 
                                                            @isset($permission['permission']['brand']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Slider</td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][add]" 
                                                            @isset($permission['permission']['slider']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][edit]" 
                                                            @isset($permission['permission']['slider']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][view]" 
                                                            @isset($permission['permission']['slider']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][delete]" 
                                                            @isset($permission['permission']['slider']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[slider][list]"
                                                            @isset($permission['permission']['slider']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Coupon</td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][add]" 
                                                                @isset($permission['permission']['coupon']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][edit]" 
                                                                @isset($permission['permission']['coupon']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][view]" 
                                                                @isset($permission['permission']['coupon']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][delete]" 
                                                                @isset($permission['permission']['coupon']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[coupon][list]" 
                                                                @isset($permission['permission']['coupon']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Review</td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][add]" 
                                                                @isset($permission['permission']['review']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][edit]" 
                                                                @isset($permission['permission']['review']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][view]" 
                                                                @isset($permission['permission']['review']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][delete]" 
                                                                @isset($permission['permission']['review']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[review][list]" 
                                                                @isset($permission['permission']['review']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Categories</td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][add]" 
                                                            @isset($permission['permission']['cat']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][edit]" 
                                                            @isset($permission['permission']['cat']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][view]" 
                                                            @isset($permission['permission']['cat']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][delete]" 
                                                            @isset($permission['permission']['cat']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[cat][list]" 
                                                            @isset($permission['permission']['cat']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Sub Categories</td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][add]" 
                                                            @isset($permission['permission']['subcat']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][edit]"
                                                            @isset($permission['permission']['subcat']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][view]" 
                                                            @isset($permission['permission']['subcat']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][delete]" 
                                                            @isset($permission['permission']['subcat']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subcat][list]" 
                                                            @isset($permission['permission']['subcat']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>SubSubCategories</td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][add]" 
                                                                @isset($permission['permission']['subsubcat']['add'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][edit]" 
                                                                @isset($permission['permission']['subsubcat']['edit'])
                                                            checked
                                                        @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][view]" 
                                                                @isset($permission['permission']['subsubcat']['view'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][delete]"
                                                                @isset($permission['permission']['subsubcat']['delete'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="permission[subsubcat][list]" 
                                                                @isset($permission['permission']['subsubcat']['list'])
                                                    checked
                                                    @endisset
                                                    value="1">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="form-group">
                                        <input class="form-control btn btn-outline-primary" type="submit" value="Update Role Permission">
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
