@extends('frontend.master')
@section('title')
	{{ $products->product_name_en }}
@endsection
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
				<li><a href="#">{{ $products->categories()->first()->category_name_en }}</a></li>
				<li class='active'>{{ $products->product_name_en }}</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
					<div class="home-banner outer-top-n">
						<img src="{{ asset('/') }}fontend/assets/images/banners/LHS-banner.jpg" alt="Image">
					</div>		
  
<!-- ============================================== HOT DEALS ============================================== -->
	@include('frontend.include.hot_deals')
<!-- ============================================== HOT DEALS: END ============================================== -->					<!-- ============================================== 

<!-- ============================================== NEWSLETTER ============================================== -->
			<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
				<h3 class="section-title">Newsletters</h3>
				<div class="sidebar-widget-body outer-top-xs">
					<p>Sign Up for Our Newsletter!</p>
					<form role="form">
						<div class="form-group">
							<label class="sr-only" for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
						</div>
						<button class="btn btn-primary">Subscribe</button>
					</form>
				</div><!-- /.sidebar-widget-body -->
			</div><!-- /.sidebar-widget -->
<!-- ============================================== NEWSLETTER: END ============================================== -->

<!-- ============================================== Testimonials============================================== -->
	@include('frontend.include.testimonials')    
<!-- ============================================== Testimonials: END ============================================== -->

 

</div>
	</div><!-- /.sidebar -->
		<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                    <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">
                            <div id="owl-single-product">
                                @foreach ($multiImg as $item)
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
                                            <img class="img-responsive" alt="" src="{{ asset('/') }}fontend/assets/images/blank.gif" data-echo="{{ asset($item->photo_name) }}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                @endforeach
                            </div><!-- /.single-product-slider -->

                            <div class="single-product-gallery-thumbs gallery-thumbs">
                                <div id="owl-single-product-thumbnails">
                                    @foreach ($multiImg as $item)
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                                <img class="img-responsive" width="85" alt="" src="{{ asset($item->photo_name) }}" />
                                            </a>
                                        </div>
                                    @endforeach
                                </div><!-- /#owl-single-product-thumbnails -->
                            </div><!-- /.gallery-thumbs -->
                        </div><!-- /.single-product-gallery -->
                    </div><!-- /.gallery-holder -->        			
					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 id="pname" class="name">{{ (session()->get('language') == 'english') ? $products->product_name_en : $products->product_name_bn }}</h1>
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
											@for ($i = 1; $i <= 5; $i++)
												<span class="glyphicon glyphicon-star{{ $i <= $avgRating ? '' : '-empty' }}" style='color: red' ></span>
											@endfor
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">({{ count($reviews) }} Reviews {{ $avgRating.' / 5' }})</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-2">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value">In Stock</span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
								{!!  (session()->get('language') == 'english') ? $products->short_descp_en : $products->short_descp_bn  !!}
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									<div class="col-sm-6">
										<div class="price-box">
											<span class="price">TK {{ (session()->get('language') == 'english') ? $products->selling_price : priceBn($products->selling_price) }}</span>
											<span class="price-strike">TK {{ (session()->get('language') == 'english') ? $products->discount_price : priceBn($products->discount_price) }}</span>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="product_size">Choose Size</label>
											<select class="form-control" id="product_size">
												@if ((session()->get('language') == 'english'))
													@foreach ($size_en as $size)
														<option value="{{ $size }}"> {{ ucwords($size) }} </option>
													@endforeach
												@else
													@foreach ($size_bn as $size)
														<option value="{{ $size }}"> {{ ucwords($size) }} </option>
													@endforeach
												@endif
											</select>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="product_color">Choose Color</label>
											<select class="form-control" id="product_color">
												@if ((session()->get('language') == 'english'))
													@foreach ($color_en as $color)
														<option value="{{ $color }}"> {{ ucwords($color) }} </option>
													@endforeach
												@else
													@foreach ($color_bn as $color)
														<option value="{{ $color }}"> {{ ucwords($color) }} </option>
													@endforeach
												@endif
											</select>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-2">
										<span class="label">Qty :</span>
									</div>
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
								                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
								                </div>
								                <input type="text" id="qty" value="1" min="1">
							              </div>
							            </div>
									</div>
										<input type="hidden" name="" id="product_id" value="{{ $products->id }}">
									<div class="col-sm-7">
										<button type="submit" onclick="addCart()" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
									</div>
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->
			
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
            </div>
				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">{!! (session()->get('language') == 'english') ? $products->long_descp_en : $products->long_descp_bn !!}</p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
										<div class="product-reviews">
											@foreach ($reviews as $review )
											<h4 class="title">{{ $review->user->name }}</h4>
											<div class="reviews">
												<div class="review">
													<div class="review-title">
														@for ($i = 1; $i <= 5; $i++)
															<span class="glyphicon glyphicon-star{{ $i <= $review->rating ? '' : '-empty' }}" style="color: red;"></span>
														@endfor
														<span class="date"><i class="fa fa-calendar"></i><span>{{ $review->created_at->diffForHumans() }}</span></span></div>
													<div class="text">{{ $review->comment }}</div>
												</div><!-- /.reviews -->
											</div><!-- /.product-reviews -->
									@endforeach	
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
						
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

<!-- ============================================== UPSELL PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">{{ (session()->get('language') == 'english') ? 'Related products' : 'রিলেটেড প্রোডাক্ট' }}</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		@foreach ($related_products as $product)	
			<div class="item item-carousel">
				<div class="products">
					<div class="product">
						<div class="product-image">
							<div class="image">
								<a href="{{ url('single-product-detail',$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a>
							</div><!-- /.image -->
							@php
								$amount = $product->selling_price - $product->discount_price;
								$per = ($amount/$product->selling_price) * 100;
								$dis = 100 - $per;	
							@endphp
								<div class="tag hot"><span>@if ($product->discount_price == null) hot @else {{ (session()->get('language') == 'english') ? round($dis).'%' : priceBn(round($dis)).'%' }} @endif</span></div>
						</div><!-- /.product-image -->

						<div class="product-info text-left">
							<h3 class="name"><a href="{{ url('single-product-detail',$product->id.'/'.$product->product_slug_en ) }}">{{ (session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn }}</a></h3>
							<div class="rating rateit-small"></div>
							<div class="description"></div>

							<div class="product-price">
								<span class="price">TK {{ (session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price) }}</span>
								<span class="price-before-discount">TK {{ (session()->get('language') == 'english') ? $product->discount_price : priceBn($product->discount_price) }}</span>
							</div><!-- /.product-price -->
						</div><!-- /.product-info -->
						<div class="cart clearfix animate-effect">
							<div class="action">
								<ul class="list-unstyled">
									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" id="{{ $product->id }}" onclick="productView(this.id)" type="button" data-toggle="modal" title="Cart" data-target="#cartModal">
											<i class="fa fa-shopping-cart"></i>
										</button>
										<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
									</li>

									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addtoWishlist(this.id)" type="button" title="Wishlist">
											<i class="icon fa fa-heart"></i>
										</button>
									</li>

									<li class="lnk">
										<a class="add-to-cart" href="detail.html" title="Compare">
											<i class="fa fa-signal" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div><!-- /.product -->
				</div><!-- /.products -->
			</div><!-- /.item -->
		@endforeach	
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="JlmGTl9k"></script>
@endsection