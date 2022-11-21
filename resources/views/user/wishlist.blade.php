@extends('frontend.master')
@section('content')
	@php
		function priceBn($bnPrice)
		{
			$en = array(1,2,3,4,5,6,7,8,9,0);
			$bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
			$bnPrice = str_replace($en,$bn,$bnPrice);
			return $bnPrice;
		}	
	@endphp

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Wishlist</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="my-wishlist-page">
			<div class="row">
				<div class="col-md-12 my-wishlist">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="4" class="heading-title">My Wishlist</th>
                                </tr>
                            </thead>
                            <tbody id="wishlists">
                                
                            </tbody>
                        </table>
                    </div>
                </div>			
            </div><!-- /.row -->
		</div><!-- /.sigin-in-->
    </div><!-- /.container -->
</div><!-- /.body-content -->
@endsection

@section('js')
{{-- =====================Wishlist Start===================== --}}
<script>
   function wishlistView()
   {
    $.ajax({
        type: "GET",
        datatype: "json",
        url: "{{ url('/user/wishlist/data') }}",
        success: function (data) {
            var wishlist = '';
            $.each(data, function(key, value) {
                wishlist +=` <tr>
                                    <td class="col-md-2"><img src="/${value.product.product_thumbnail}" alt="imga"></td>
                                    <td class="col-md-7">
                                        <div class="product-name"><a href="/single-product-detail/${value.product_id}/${value.product.product_slug_en}">${value.product.product_name_en}</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star non-rate"></i>
                                            <span class="review">( 06 Reviews )</span>
                                        </div>
                                        <div class="price">
                                            ${value.product.discount_price == null
                                               ? `TK ${value.product.selling_price}`
                                               : `TK ${value.product.selling_price} <span>TK ${value.product.discount_price}</span>`
                                            }
                                            
                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <button href="#" class="btn-upper btn btn-primary" type="button" id="${value.product_id}" onclick="productView(this.id)" data-toggle="modal" data-target="#cartModal">Add to cart</button>
                                    </td>
                                    <td class="col-md-1 close-btn">
                                        <button type="button" id="${value.id}" onclick="wishlistRemove(this.id)" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>`
            })
            $("#wishlists").html(wishlist);
        }
    })
   }
   wishlistView();

   function wishlistRemove(wishlist_id)
   {
    $.ajax({
        type: "GET",
        datatype: "json",
        url: "{{ url('/user/wishlist/remove/') }}/" + wishlist_id,
        success: function(data) {
            wishlistView();
            const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                        })

                           if($.isEmptyObject(data.error)){
                            Toast.fire({
                                type: 'success',
                                title: data.success
                            })
                           }else {
                                Toast.fire({
                                    type: 'error',
                                    title: data.error
                                })
                           }
        }
    })
   }
</script>
{{-- =====================Wishlist End===================== --}}
@endsection