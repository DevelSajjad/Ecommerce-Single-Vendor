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
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">Remove</th>
                                    <th class="cart-description item">Image</th>
                                    <th class="cart-product-name item">Product Name</th>
                                    <th class="cart-qty item">Quantity</th>
                                    <th class="cart-sub-total item">Subtotal</th>
                                </tr>
                            </thead><!-- /thead -->
                            {{-- <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="shopping-cart-btn">
                                            <span class="">
                                                <a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                                <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
                                            </span>
                                        </div><!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot> --}}
                            <tbody id="cartList">
                                
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->				

				<div class="col-md-6 col-sm-12 estimate-ship-tax">
					@if (!Session::has('coupon'))
					<table class="table" id="couponTbl">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Discount Code</span>
									<p>Enter your coupon code if you have one..</p>
								</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td>
										<div class="form-group">
											<input type="text"  id="coupon_apply"  class="form-control unicase-form-control text-input" placeholder="You Coupon..">
										</div>
										<div class="clearfix pull-right">
											<button type="submit" onclick="couponApply()" class="btn-upper btn btn-primary">APPLY COUPON</button>
										</div>
									</td>
								</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
					@endif
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-6 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead id="coupon_cal">
							
						</thead><!-- /thead -->
						<tbody>
								<tr>
									<td>
										<div class="cart-checkout-btn pull-right">
											<button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
											<span class="">Checkout with multiples address!</span>
										</div>
									</td>
								</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->			
			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection

@section('js')
	<script>
		function cartListView()
		{
			$.ajax({
			type: "GET",
			url: "{{ url('/cart/list/view') }}",
			dataType: "json",
			success: function (data) {
				// cartListView();
				miniCart();
				var cartList = " ";
				$.each(data.carts, function (key, value) {		
					 cartList += `
								<tr>
                                    <td class="romove-item"><button type="button" id="${value.rowId}" onclick="cartRemove(this.id)" title="cancel" class="btn btn-danger  icon"><i class="fa fa-trash-o"></i></button></td>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="detail.html">
                                            <img src="/${value.options.image}" alt="">
                                        </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class='cart-product-description'><a href="detail.html">${value.name}</a></h4>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="rating rateit-small"></div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="reviews">
                                                    (06 Reviews)
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                        <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>${value.options.color}</span></span>
                                        </div>
                                    </td>
                                    
                                    <td class="cart-product-quantity">
                                        <div class="cart-quantity">
                                            <div class="quant-input">
                                                <div class="arrows">
													<div id="${value.rowId}" onclick="increment(this.id)" class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
													<div id="${value.rowId}" onclick="decrement(this.id)" class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                </div>
                                                <input type="text" value="${value.qty}">
                                        	</div>
                                        </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">TK ${value.qty * value.price}</span></td>
                                </tr>
					 `
				});

				$("#cartList").html(cartList);
			}
		});
		}
		cartListView();

		function increment(rowId)
		{
			$.ajax({
				type: "GET",
				dataType: "json",
				url: "{{ url('/cart/quantity/increment/') }}/" + rowId,
				success: function(data) {
					couponCalculation();
					cartListView();
				}
			})
		}
		function decrement(rowId)
		{
			$.ajax({
				type: "GET",
				dataType: "json",
				url: "{{ url('/cart/quantity/decrement/') }}/" + rowId,
				success: function(data) {
					couponCalculation();
					cartListView();
				}
			})
		}
	</script>
	<script>
		function couponApply()
		{
			var coupon = $("#coupon_apply").val();
			$.ajax({
				type: "POST",
				url: "{{ url('/coupon_apply') }}",
				dataType: "json",
				data: {coupon_name:coupon},
				success: function(data) {
					if (data.hasOwnProperty("success")) {
						$("#coupon_apply").val('');
						couponCalculation();
						$("#couponTbl").hide();	
					}
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
			});
		}
	</script>
	<script>
		function couponCalculation()
		{
			$.ajax({
				type: "GET",
				url: "{{ url('/coupon/calculation/') }}",
				dataType: "json",
				success: function(data) {
					if (!data.total) {
						$("#coupon_cal").html(`
							<tr>
								<th>
									<div class="cart-sub-total">
										Subtotal<span class="inner-left-md">TK ${data.subtotal}</span>
									</div>
									<div class="cart-sub-total">
										<button class="btn btn-sm btn-danger" onclick="couponRemove()" type="submit" >X</button>
										Coupon<span class="inner-left-md">${data.coupon_name}</span>
									</div>
									<div class="cart-grand-total">
										Discount<span class="inner-left-md">TK ${data.discount_amount}</span>
									</div>
									<div class="cart-grand-total">
										Grand Total<span class="inner-left-md">TK ${data.total_amount}</span>
									</div>
								</th>
							</tr>
						`);
					} else {
						$("#coupon_cal").html(`
							<tr>
								<th>
									<div class="cart-sub-total">
										Subtotal<span class="inner-left-md">TK ${data.total}</span>
									</div>
								</th>
							</tr>
						`);
					}
				}
			});
		}
		couponCalculation();
		function couponRemove()
		{
			$.ajax({
				type: "GET",
				url: "{{ url('/coupon/remove') }}",
				dataType: "json",
				success: function (data) {
					$("#couponTbl").show();
					couponCalculation();

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
			});
		}
	</script>
@endsection