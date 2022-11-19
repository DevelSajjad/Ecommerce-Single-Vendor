@extends('admin.master')
@section('subsubcategory')
    active
@endsection
@section('body')
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('brands') }}">Dashboard</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">SubSubcategory List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-20p">Cat Name</th>
                        <th class="wd-20p">Subcat Name</th>
                        <th class="wd-20p">SubSubcat Name EN</th>
                        <th class="wd-20p">SubSubcat Name BN</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($subsubcat as $subsubcat)  
                        <tr>
                            <td> {{ $subsubcat->category->category_name_en }} </td>
                            <td> {{ $subsubcat->subcategory->subcategory_name_en }} </td>
                            <td> {{ $subsubcat->subsubcategory_name_en }} </td>
                            <td> {{ $subsubcat->subsubcategory_name_bn }} </td>
                            <td>
                                <a href="{{ url('admin/editSubSubCat',$subsubcat->id) }}" class="btn btn-info btn-sm"><i title="Edit SubCategory" class="fa fa-pencil"></i></a>
                                <a href="{{ url('admin/deleteSubSubCategory',$subsubcat->id) }}" class="btn btn-danger btn-sm" id="delete" title="Delete SubCategory"><i class="fa fa-trash"></i></a>
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
                            Add Sub-Sub-Category
                        </div>
                        <form action="{{ route('add-sub-sub-category') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="category_id" name="category_id" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    @foreach ($category as $cat )
                                    <option value="{{ $cat->id }}" >{{ ucwords($cat->category_name_en) }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Sub Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="subcategory_id" name="subcategory_id" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                </select>
                                @error('subcategory_id')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Sub Sub Category Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subsubcategory_name_en" value="{{ old('subsubcategory_name_en')}}" placeholder=" Sub-SubCategory Name English">
                                @error('subsubcategory_name_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Sub Sub Category Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subsubcategory_name_bn" value="{{ old('subsubcategory_name_bn')}}" placeholder="Sub-SubCategory Name Bangla">
                                @error('subsubcategory_name_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Sub Sub category" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}backend/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#category_id").on('change', function() {
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url: "{{ url('admin/subcategory/ajax') }}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data){
                        var d = $("#subcategory_id").empty();
                        $.each(data, function(key, value){
                            $("#subcategory_id").append('<option value="'+value.id+'"> '+value.subcategory_name_en+'</option> ');
                        });
                    }
                });
            }else{  
                alert('danger');
            }
        });
    });
</script>
@endsection
