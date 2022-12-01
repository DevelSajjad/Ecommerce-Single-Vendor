@extends('frontend.master')
@section('content')
@section('title') SSL HOST Payment @endsection
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class='active'>Payment</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
                
                    <div class="py-5 text-center">
                        <h2>Hosted Payment - SSLCommerz</h2>
                        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. We have provided this sample form for understanding Hosted Checkout Payment with SSLCommerz.</p>
                    </div>
                
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">{{ $qty }}</span>
                            </h4>
                            <div id="coupon_cal">
                                
                            </div>
                            
                            <div class="col-md-12 col-sm-12 estimate-ship-tax">
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
                        </div>
                        <div class="col-md-8 order-md-1">
                            <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                                <input type="hidden" name="name" value="{{ $shipping_name }}">
                                <input type="hidden" name="email" value="{{ $shipping_email }}">
                                <input type="hidden" name="phone" value="{{ $shipping_phone }}">
                                <input type="hidden" name="post_code" value="{{ $post_code }}">
                                <input type="hidden" name="division_id" value="{{ $division_id }}">
                                <input type="hidden" name="district_id" value="{{ $district_id }}">
                                <input type="hidden" name="state_id" value="{{ $state_id }}">
                                <input type="hidden" name="note" value="{{ $note }}">
                                <hr class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <input type="hidden" value="{{ Session::has('coupon') ? Session::get('coupon')['total_amount'] : $total_amount  }}" name="amount" id="total_amount" required/>
                                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                                        address</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                            </form>
                        </div>
                    </div>
                
                    <footer class="my-5 pt-5 text-muted text-center text-small">
                        <p class="mb-1">&copy; 2022 Company Name</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                            <li class="list-inline-item"><a href="#">Terms</a></li>
                            <li class="list-inline-item"><a href="#">Support</a></li>
                        </ul>
                    </footer>
                
            </div>
		</div><!-- /.checkout-box -->
	</div><!-- /.container -->
</div><!-- /.body content -->
@endsection

@section('js')
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
        function couponCalculation() {
            $.ajax({
                type: "GET",
                url: "{{ url('/coupon/calculation') }}",
                dataType: "json",
                success: function(data) {
                    console.log(data.coupon_name);
                    if(data.coupon_name) {
                        $("#coupon_cal").html(`
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Subtotal</h6>
                                    </div>
                                    <span class="text-muted">TK ${data.subtotal}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Coupon Name: </span>
                                    <strong>${data.coupon_name} (${data.coupon_discount})%</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Discount Amount: </span>
                                    <strong>TK ${data.discount_amount}</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total Amount: </span>
                                    <strong>TK ${data.total_amount}</strong>
                                </li>
                            </ul>
                        `);
                    } else {
                        $("#coupon_cal").html(`
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Subtotal</h6>
                                    </div>
                                    <span class="text-muted">TK ${data.total}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>GrandTotal (BDT)</span>
                                    <strong>TK ${data.total}</strong>
                                </li>
                            </ul>
                        `);
                    }
                }
            });
        }
        couponCalculation();
    </script>
@endsection