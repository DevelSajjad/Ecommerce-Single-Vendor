<!-- ============================================== HOT DEALS ============================================== -->
@php
    $hotDeals = App\Models\Product::where('hot_deals', 1)->where('status', 1)->orderBy('id', 'desc')->get();
@endphp
<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
	<h3 class="section-title">hot deals</h3>
	<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
		@forelse ($hotDeals as $product)
			<div class="item">
				<div class="products">
					<div class="hot-deal-wrapper">
						<div class="image">
							<img src="{{ asset($product->product_thumbnail) }}" alt="">
						</div>
						@php
							$amount = $product->selling_price - $product->discount_price;
							$discount = ($amount/$product->selling_price) * 100;
							$discount_percent = round(100 - $discount,2);
						@endphp
						<div class="sale-offer-tag"><span>{{ (session()->get('language') == 'english') ? $discount_percent : priceBn($discount_percent) }}%<br>off</span></div>
						<div class="timing-wrapper">
							<div class="box-wrapper">
								<div class="date box">
									<span class="key">120</span>
									<span class="value">DAYS</span>
								</div>
							</div>

							<div class="box-wrapper">
								<div class="hour box">
									<span class="key">20</span>
									<span class="value">HRS</span>
								</div>
							</div>

							<div class="box-wrapper">
								<div class="minutes box">
									<span class="key">36</span>
									<span class="value">MINS</span>
								</div>
							</div>

							<div class="box-wrapper hidden-md">
								<div class="seconds box">
									<span class="key">60</span>
									<span class="value">SEC</span>
								</div>
							</div>
						</div>
					</div><!-- /.hot-deal-wrapper -->

					<div class="product-info text-left m-t-20">
						<h3 class="name"><a href="{{ url('single-product-detail',$product->id.'/'.$product->product_slug_en) }}">{{ (session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn }}{{ (session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn }}</a></h3>
						<div class="rating rateit-small"></div>

						<div class="product-price">
							<span class="price">
								TK {{ (session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price) }}
							</span>

							<span class="price-before-discount">TK {{ (session()->get('language') == 'english') ? $product->discount_price : priceBn($product->discount_price) }}</span>

						</div><!-- /.product-price -->

					</div><!-- /.product-info -->

					<div class="cart clearfix animate-effect">
						<div class="action">
							<div class="add-cart-button btn-group">
								<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
									<i class="fa fa-shopping-cart"></i>
								</button>
								<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
							</div>
						</div><!-- /.action -->
					</div><!-- /.cart -->
				</div>
			</div>
		@empty
			<h1 class="text-danger"><b>No Hot Deals</b></h1>
		@endforelse
    </div><!-- /.sidebar-widget -->
</div>
<!-- ============================================== HOT DEALS: END ============================================== -->
