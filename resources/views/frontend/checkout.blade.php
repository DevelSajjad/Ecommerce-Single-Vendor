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
				<li><a href="#">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<form class="register-form" role="form" action="{{ route('payment-info-store') }}" method="POST">
					@csrf
					<div class="col-md-8">
						<div class="panel-group checkout-steps" id="accordion">
							<!-- checkout-step-01  -->
							<div class="panel panel-default checkout-step-01">
								<!-- panel-heading -->
								<div class="panel-heading">
									<h4 class="unicase-checkout-title">
										<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
										<span>1</span>Checkout Method
										</a>
									</h4>
								</div>
								<!-- panel-heading -->
								<div id="collapseOne" class="panel-collapse collapse in">
									<!-- panel-body  -->
									<div class="panel-body">
										<div class="row">
											<div class="col-md-6 col-sm-6 already-registered-login">
													<div class="form-group">
														<label class="info-title" for="exampleInputEmail1">Shipping Name <span>*</span></label>
														<input type="text" value="{{ Auth::user()->name }}" name="shipping_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
													</div>
													<div class="form-group">
														<label class="info-title" for="exampleInputEmail1">Shipping Email <span>*</span></label>
														<input type="email" value="{{ Auth::user()->email }}" name="shipping_email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
													</div>
													<div class="form-group">
														<label class="info-title" for="exampleInputEmail1">Shipping Phone <span>*</span></label>
														<input type="text" value="{{ Auth::user()->phone }}" name="shipping_phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
													</div>
													<div class="form-group">
														<label class="info-title" for="exampleInputEmail1">Post Code <span>*</span></label>
														<input type="text" name="post_code" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
													</div>
											</div>	
											<div class="col-md-6 col-sm-6 already-registered-login">
												<div class="form-group">
													<label class="form-control-label text-dark">Select Division: <span class="tx-danger">*</span></label>
													<select class="form-control select2-show-search" name="division_name" id="division_id" data-placeholder="Choose one">
														<option value=""> Choose One</option>
														@foreach ($divisions as $division )
														<option value="{{ $division->id }}" >{{ ucwords($division->division_name) }}</option>
														@endforeach
													</select>
													@error('division_name')
															<span class="text-danger"> {{$message}}</span>
													@enderror
												</div>

												<div class="form-group">
													<label class="form-control-label text-dark">Select District: <span class="tx-danger">*</span></label>
													<select class="form-control select2-show-search" name="district_name" id="district_id" data-placeholder="Choose one">
														<option value=""> Choose One</option>
													</select>
													@error('district_name')
															<span class="text-danger"> {{$message}}</span>
													@enderror
												</div>
					
												<div class="form-group">
													<label class="form-control-label text-dark">State Name : <span class="tx-danger">*</span></label>
													<select class="form-control select2-show-search" name="state_name" id="state_id" data-placeholder="Choose one">
														<option value=""> Choose One</option>
													</select>
													@error('state_name')
															<span class="text-danger"> {{$message}}</span>
													@enderror
												</div>
												<div class="form-group">
													<label class="form-control-label text-dark">Note : <span class="tx-danger">*</span></label>
													<textarea class="form-control" name="note" id="" cols="10" rows="5"></textarea>
													@error('note')
															<span class="text-danger"> {{$message}}</span>
													@enderror
												</div>
												
											</div>	
										</div>			
									</div>
									<!-- panel-body  -->

								</div><!-- row -->
							</div>
							<!-- checkout-step-01  -->
							<!-- checkout-step-02  -->
							<div class="panel panel-default checkout-step-02">
								<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
									<span>2</span>Billing Information
									</a>
								</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
								</div>
							</div>
							<!-- checkout-step-02  -->

							<!-- checkout-step-03  -->
							<div class="panel panel-default checkout-step-03">
								<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
										<span>3</span>Shipping Information
									</a>
								</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
								</div>
							</div>
							<!-- checkout-step-03  -->

							<!-- checkout-step-04  -->
							<div class="panel panel-default checkout-step-04">
								<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
										<span>4</span>Shipping Method
									</a>
								</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</div>
								</div>
							</div>
							<!-- checkout-step-04  -->

							<!-- checkout-step-05  -->
							<div class="panel panel-default checkout-step-05">
								<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
										<span>5</span>Payment Information
									</a>
								</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
								<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
								</div>
							</div>
							<!-- checkout-step-05  -->

							<!-- checkout-step-06  -->
							<div class="panel panel-default checkout-step-06">
								<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix">
										<span>6</span>Order Review
									</a>
								</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</div>
								</div>
							</div>
							<!-- checkout-step-06  -->
							
						</div><!-- /.checkout-steps -->
					</div>
					<div class="col-md-4">
						<!-- checkout-progress-sidebar -->
						<div class="checkout-progress-sidebar ">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
									</div>
									<div class="">
										<ul class="nav nav-checkout-progress list-unstyled">
											@foreach($carts as $cart)
											<li><strong>Image:</strong>
												<img src="{{ asset($cart->options->image) }}" style="height: 50px; width: 50px" alt="">
												<strong>Qty:</strong>
												{{ $cart->qty }}
												<strong>Color:</strong>
												{{ $cart->options->color }}
												<strong>Size:</strong>
												{{ $cart->options->size }}
											</li>
											@endforeach
											<hr>
											<li>
												@if (Session::has('coupon'))
													<Strong>Subtotal:</Strong>
													{{ $total }} <br>
													<Strong>Coupon Name:</Strong>
													{{ session()->get('coupon')['coupon_name'] }}<br>
													<Strong>Coupon Discount:</Strong>
													{{ '('.session()->get('coupon')['coupon_discount'].')' }}%<br>
													<Strong>Discount Price:</Strong>
													{{ 'TK '.session()->get('coupon')['discount_amount'] }}
													@else
														<hr>
														<li>
															<strong>Subtotal:</strong>
															{{ $total }} <br>
															<strong>Grandtotal:</strong>
															{{ $total }} 
														</li>
												@endif
											</li>
										</ul>		
									</div>
								</div>
							</div>
						</div> 					
						<!-- checkout-progress-sidebar -->
					</div>
					<div class="col-md-4">
						<!-- checkout-progress-sidebar -->
						<div class="checkout-progress-sidebar ">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="unicase-checkout-title">Payment Method</h4>
									</div>
									<div class="">
										<ul class="nav nav-checkout-progress list-unstyled">
											<li>
												<label for="">Stipe</label>
												<input type="radio" name="payment" value="stripe" id="">
											</li>
											<li>
												<label for="">Card</label>
												<input type="radio" name="payment" value="card" id="">
											</li>
											<li>
												<label for="">Cash On Delivery</label>
												<input type="radio" name="payment" value="cash" id="">
											</li>
											<button type="submit" class="btn-upper btn btn-primary checkout-page-button pull-right">Payment Step</button>
										</ul>		
									</div>
								</div>
							</div>
						</div> 					
						<!-- checkout-progress-sidebar -->
					</div>
				</form>	
			</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection
@section('js')
	<script>
		$(document).ready(function() {
			$("#division_id").on('change', function() {
				var division_id = $(this).val();
				$("#district_id").html(`<option> Loading... </option>`);
				$.ajax({
					type: "GET",
					url: "{{ url('/user/get_district/') }}/" + division_id,
					dataType: "json",
					success: function(data) {
						$("#district_id").empty();
						$("#state_id").empty();
						$("#district_id").html(`<option> Choose One </option>`);
						$.each(data, function(key, value) {
							$("#district_id").append(`<option value = "${value.id}" > ${value.district_name} </option>`);
						});
					},
				});
			});

			$("#district_id").on('change', function() {
				var district_id = $(this).val();
				$.ajax({
					type: "GET",
					url: "{{ url('/user/get_state/') }}/" + district_id,
					dataType: "json",
					success: function(data) {
						$("#state_id").empty();
						$("#state_id").html(`<option> Choose One </option>`);
						$.each(data, function(key, value) {
							$("#state_id").append(`<option value = "${value.id}" > ${value.state_name} </option>`);
						});
					}
				});
			});
		});
	</script>
@endsection
