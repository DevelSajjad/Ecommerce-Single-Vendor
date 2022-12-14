@extends('admin.master')
@section('body')
@section('products')
    active show-sub
@endsection
@section('manage-product')
    active
@endsection

     <!-- ########## START: MAIN PANEL ########## -->
     <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="index.html">SHopMama</a>
          <span class="breadcrumb-item active">Update Product</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Update product</h6>
              <form action="{{ route('update-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" hidden name="product_id" value="{{ $product->id }}">
            <div class="row row-sm">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Select Brand: <span class="tx-danger">*</span></label>
                            <select class="form-control select2-show-search" data-placeholder="Select One" name="brand_id">
                              <option label="Choose one"></option>
                              @foreach ($brand as $brand)
                              <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ ucwords($brand->brand_name_en) }}</option>
                              @endforeach
                            </select>
                            @error('brand_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Select Category: <span class="tx-danger">*</span></label>
                            <select class="form-control select2-show-search" id="category" data-placeholder="Select One" name="category_id">
                              <option label="Choose one"></option>
                              @foreach ($category as $cat)
                              <option value="{{ $cat->id }}" {{($cat->id == $product->category_id) ? 'selected' : ''  }}>{{ ucwords($cat->category_name_en) }}</option>
                              @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Select Sub-Category: <span class="tx-danger">*</span></label>
                            <select class="form-control select2-show-search" id="subcategory" data-placeholder="Select One" name="subcategory_id">
                              <option label="Choose one"></option>
                              {{-- @foreach ($categories as $cat)
                              <option value="{{ $cat->id }}">{{ ucwords($cat->category_name_en) }}</option>
                              @endforeach --}}
                            </select>
                            @error('subcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Select Sub-SubCategory: <span class="tx-danger">*</span></label>
                            <select class="form-control select2-show-search" id="subsubcategory" data-placeholder="Select One" name="subsubcategory_id">
                              {{-- <option label="Choose one"></option>
                              @foreach ($categories as $cat)
                              <option value="{{ $cat->id }}">{{ ucwords($cat->category_name_en) }}</option>
                              @endforeach --}}
                            </select>
                            @error('subsubcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Name English: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_name_en" value="{{ $product->product_name_en }}" placeholder="Enter Product Name English">
                        @error('product_name_en')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Name Bangla: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_name_bn" value="{{ $product->product_name_bn }}" placeholder="Product Name Bangla">
                        @error('product_name_bn')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_code" value="{{ $product->product_code }}" placeholder="Enter Product Code">
                        @error('product_code')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_qty" value="{{ $product->product_qty }}" placeholder="Enter Product Quantity">
                        @error('product_qty')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Tags English: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_tags_en" value="{{ $product->product_tags_en }}" placeholder="Product Tags English" data-role="tagsinput">
                        @error('product_tags_en')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Tags Bangla: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_tags_bn" value="{{ $product->product_tags_bn }}" placeholder="product tags bangla" data-role="tagsinput">
                        @error('product_tags_bn')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Size English: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_size_en" value="{{ $product->product_size_en }}" placeholder="Product Size English" data-role="tagsinput">
                        @error('product_size_en')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Size Bangla: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_size_bn" value="{{ $product->product_size_bn }}" placeholder="Product Size Bangla" data-role="tagsinput">
                        @error('product_size_bn')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Color English: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_color_en" value="{{ $product->product_color_en }}" placeholder="Product Color Rnglish" data-role="tagsinput">
                        @error('product_color_en')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Color Bangla: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_color_bn" value="{{ $product->product_color_bn }}" placeholder="Enter Product Color Bangla" data-role="tagsinput">
                        @error('product_color_bn')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="selling_price" value="{{ $product->selling_price }}" placeholder="Selling Price">
                        @error('selling_price')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="discount_price" value="{{ $product->discount_price }}" placeholder="Discount Price">
                        @error('discount_price')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label">Short Description English: <span class="tx-danger">*</span></label>
                        <textarea name="short_descp_en" id="summernote">{{$product->short_descp_en}}</textarea>
                        @error('short_descp_en')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label">Short Description Bangla: <span class="tx-danger">*</span></label>
                        <textarea name="short_descp_bn" id="summernote2">{{$product->short_descp_bn}}</textarea>
                        @error('short_descp_bn')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label">Long Description English: <span class="tx-danger">*</span></label>
                        <textarea name="long_descp_en" id="summernote3">{{$product->long_descp_en}}</textarea>
                        @error('long_descp_en')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label">Long Description Bangla: <span class="tx-danger">*</span></label>
                        <textarea name="long_descp_bn" id="summernote4">{{$product->long_descp_en}}</textarea>
                        @error('long_descp_bn')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  </div>

                  <div class="col-md-4">
                  <label class="ckbox">
                    <input type="checkbox" name="hot_deals" value="1" {{ ($product->hot_deals == 1) ? 'checked' : '' }}><span>Hot Deals</span>
                  </label>
                  </div>

                  <div class="col-md-4">
                    <label class="ckbox">
                      <input type="checkbox" name="featured" value="1" {{ ($product->featured == 1) ? 'checked' : '' }}><span>Featured</span>
                    </label>
                    </div>

                    <div class="col-md-4">
                        <label class="ckbox">
                          <input type="checkbox" name="special_offer" value="1" {{ ($product->special_offer == 1) ? 'checked' : '' }}><span>special_offer</span>
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label class="ckbox">
                          <input type="checkbox" name="special_deals" value="1" {{ ($product->special_deals == 1) ? 'checked' : '' }}><span>special_deals</span>
                        </label>
                    </div>

                  <div class="form-layout-footer mt-3">
                  <button class="btn btn-info mg-r-5" type="submit" style="cursor: pointer;">Update Products</button>
                </div><!-- form-layout-footer -->
            </form>
            </div>
               <form action="{{ route('multi-image-update') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="row row-sm mt-5">
                        @foreach ($multiImg as $images)
                          <div class="col-md-4">
                            <div class="card-deck">
                              <div class="card">
                                <img class="card-img-top" src="{{ asset($images->photo_name) }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title"> <a href="{{ url('admin/multiImage-delete',$images->id) }}" id="delete" class="btn btn-danger">X</a></h5>
                                  <input class="form-control" type="file" name="multi_img[{{ $images->id }}]">
                                </div>
                              </div>
                            </div> 
                          </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary ml-5">Update Image</button>
                  </form>

                  <form action="{{ route('thumb-image-update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="pro_id" value="{{ $product->id }}">
                    <input type="hidden" name="old_img" value="{{ $product->product_thumbnail }}">
                      <div class="row row-sm mt-5">
                            <div class="col-md-4">
                              <div class="card-deck">
                                <div class="card">
                                  <img class="card-img-top" src="{{ asset($product->product_thumbnail) }}" alt="Card image cap">
                                  <div class="card-body">
                                    <input class="form-control" type="file" name="thumb_img">
                                  </div>
                                </div>
                              </div> 
                            </div>
                      </div>
                      <button type="submit" class="btn btn-primary ml-5">Update Thumb Image</button>
                    </form>
            </div><!-- row -->

            
            {{-- <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Main Thambnail: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="file" name="product_thambnail" value="{{ old('product_thambnail') }}" onchange="mainThambUrl(this)">
                    @error('product_thambnail')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <img src="" id="mainThmb">
                  </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Multiple_image: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="file" name="multi_img[]" value="{{ old('multi_img') }}" multiple id="multiImg">
                    @error('multi_img')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="row" id="preview_img" >
                </div>
            </div> --}}
    </div>
    <script src="{{ asset('/') }}backend/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (){
          $("#category").on('change',function(){
            var category_id = $(this).val();
            if(category_id){
                  $.ajax({
                  url: "{{ url('admin/subcategory/ajax') }}/"+category_id,
                  type: "GET",
                  dataType: "json",
                  success: function(data) {
                    $("#subsubcategory").html('');
                    var d = $("#subcategory").empty();
                    $.each(data,function(key, value){
                      $("#subcategory").append('<option value = "'+value.id+'"> '+value.subcategory_name_en+' </option>');
                    })
                  }
                });
            }else{
              alert('danger')
            }
          });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
          $("#subcategory").on("change",function(){
            var subcategory_id = $(this).val();
            if(subcategory_id){
                  $.ajax({
                  url: "{{ url('admin/subsubcategory/ajax') }}/"+subcategory_id,
                  type: "GET",
                  dataType: "json",
                  success: function(data){
                    var a = $("#subsubcategory").empty();
                    $.each(data,function(key , value){
                      $("#subsubcategory").append('<option value = "'+value.id+'">'+value.subsubcategory_name_en+'</option>');
                    });
                  }
                });
            }else{
              alert('danger');
            }
          });
        });
    </script>

    {{-- ********Multiple Image Show********* --}}
    <script>
      $(document).ready(function(){
       $('#multiImg').on('change', function(){ //on file input change
          if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
          {
              var data = $(this)[0].files; //this file data
              $.each(data, function(index, file){ //loop though each file
                  if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                      var fRead = new FileReader(); //new filereader
                      fRead.onload = (function(file){ //trigger function on successful read
                      return function(e) {
                          var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                      .height(80); //create image element
                          $('#preview_img').append(img); //append image to output element
                      };
                      })(file);
                      fRead.readAsDataURL(file); //URL representing the file's data.
                  }
              });
          }else{
              alert("Your browser doesn't support File API!"); //if File API is absent
          }
       });
      });
      </script>
    
      <script>
        function mainThambUrl(input){
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThmb').attr('src',e.target.result).width(80)
                      .height(80);
            };
            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>
@endsection