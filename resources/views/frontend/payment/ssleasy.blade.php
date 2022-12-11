@extends('frontend.master')
@section('content')
@section('title') SSL Easy Payment @endsection
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
                            <h4 class="mb-3">Billing address</h4>
                            <form method="POST" class="needs-validation" novalidate>
                                <input type="hidden" value="{{ Session::has('coupon') ? Session::get('coupon')['total_amount'] : $total_amount  }}" name="amount" id="total_amount" required/>
                                <input type="hidden" id="post_code" name="post_code" value="{{ $post_code }}">
                                <input type="hidden" id="division_id" name="division_id" value="{{ $division_id }}">
                                <input type="hidden" id="district_id" name="district_id" value="{{ $district_id }}">
                                <input type="hidden" id="state_id" name="state_id" value="{{ $state_id }}">
                                <input type="hidden" id="note" name="note" value="{{ $note }}">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="firstName">Full name</label>
                                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder=""
                                               value="{{ $shipping_name }}" required>
                                        <div class="invalid-feedback">
                                            Valid customer name is required.
                                        </div>
                                    </div>
                                </div>
                
                                <div class="mb-3">
                                    <label for="mobile">Mobile</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+88</span>
                                        </div>
                                        <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"
                                               value="{{$shipping_phone}}" required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Your Mobile number is required.
                                        </div>
                                    </div>
                                </div>
                
                                <div class="mb-3">
                                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                    <input type="email" name="customer_email" class="form-control" id="email"
                                           placeholder="you@example.com" value="{{$shipping_email}}" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <hr class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <input type="hidden" value="1200" name="amount" id="total_amount" required/>
                                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                                        address</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                                        token="if you have any token validation"
                                        postdata="your javascript arrays or objects which requires in backend"
                                        order="If you already have the transaction generated for current order"
                                        endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                                </button>
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

<!-- If you want to use the popup integration, -->
<script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.post_code = $('#post_code').val();
    obj.district_id = $('#district_id').val();
    obj.division_id = $('#division_id').val();
    obj.state_id = $('#state_id').val();
    obj.note = $('#note').val();
    obj.amount = $('#total_amount').val();
    
    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
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