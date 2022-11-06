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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Sub-Sub-Category
                        </div>
                        <form action="{{ route('Update-Sub-Sub') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $subsubcat->id }}" name="subsubcat">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="category_id" name="category_id" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    @foreach ($category as $cat )
                                    <option value="{{ $cat->id }}" {{ ($cat->id == $subsubcat->category_id) ? 'selected' : '' }} >{{ ucwords($cat->category_name_en) }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Sub Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="subcategory_id" name="subcategory_id" data-placeholder="Choose one">
                                    <option value="" >Choose One </option>
                                </select>
                                @error('subcategory_id')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Sub Sub Category Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subsubcategory_name_en" value="{{ $subsubcat->subsubcategory_name_en }}" placeholder=" Sub-SubCategory Name English">
                                @error('subsubcategory_name_en')
                                        <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Sub Sub Category Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subsubcategory_name_bn" value="{{ $subsubcat->subsubcategory_name_bn}}" placeholder="Sub-SubCategory Name Bangla">
                                @error('subsubcategory_name_bn')
                                    <span class="text-danger"> {{ $message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Sub Sub category" name="submit">
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
    $(document).ready(function(){
        $("#category_id").on('change',function(){
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url: "{{ url('admin/subcategory/ajax') }}/"+category_id,
                    type: 'GET',
                    dataType: "json",
                    success: function(data){
                        var d = $("#subcategory_id").empty();
                        $.each(data,function(key, value){
                            $("#subcategory_id").append('<option value="'+value.id+'"> '+value.subcategory_name_en+ '</option>')
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
