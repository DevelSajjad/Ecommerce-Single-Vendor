
<?php $__env->startSection('content'); ?>
	<?php
		function priceBn($bnPrice)
		{
			$en = array(1,2,3,4,5,6,7,8,9,0);
			$bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
			$bnPrice = str_replace($en,$bn,$bnPrice);
			return $bnPrice;
		}	
	?>
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">

			<!-- ================================== TOP NAVIGATION ================================== -->
			<?php echo $__env->make('frontend.include.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<!-- ================================== TOP NAVIGATION : END ================================== -->

<!-- ============================================== HOT DEALS ============================================== -->
			<?php echo $__env->make('frontend.include.hot_deals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ============================================== HOT DEALS: END ============================================== -->


			<!-- ============================================== SPECIAL OFFER ============================================== -->

<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">Special Offer</h3>
	<div class="sidebar-widget-body outer-top-xs">
			<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
				<?php $__currentLoopData = $specialOffer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item">
	        		<div class="products special-product">
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        		<div class="product">
							<div class="product-micro">
								<div class="row product-micro-row">
									<div class="col col-xs-5">
										<div class="product-image">
											<div class="image">
												<a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en)); ?>">
													<img src="<?php echo e(asset($product->product_thumbnail)); ?>" alt="">
												</a>
											</div><!-- /.image -->
										</div><!-- /.product-image -->
									</div><!-- /.col -->
									<div class="col col-xs-7">
										<div class="product-info">
											<h3 class="name"><a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en)); ?>"><?php echo e((session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn); ?></a></h3>
											<div class="rating rateit-small"></div>
											<div class="product-price">
												<span class="price">TK <?php echo e((session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price)); ?></span>
											</div><!-- /.product-price -->
										</div>
									</div><!-- /.col -->
								</div><!-- /.product-micro-row -->
							</div><!-- /.product-micro -->
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
	        	</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    	</div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->

<!-- ============================================== SPECIAL OFFER : END ============================================== -->
			<!-- ============================================== PRODUCT TAGS ============================================== -->
	<?php echo $__env->make('frontend.include.product_tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ============================================== PRODUCT TAGS : END ============================================== -->
			<!-- ============================================== SPECIAL DEALS ============================================== -->
<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title"><?php echo e((session()->get('language') == 'english') ? 'Special Deals' : 'স্পেসাল ডিল'); ?></h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
			<?php $__currentLoopData = $specialDeals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item">
					<div class="products special-product">
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="product">
								<div class="product-micro">
									<div class="row product-micro-row">
										<div class="col col-xs-5">
											<div class="product-image">
												<div class="image">
													<a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en)); ?>">
														<img src="<?php echo e(asset($product->product_thumbnail)); ?>"  alt="">
													</a>
												</div><!-- /.image -->
											</div><!-- /.product-image -->
										</div><!-- /.col -->
										<div class="col col-xs-7">
											<div class="product-info">
												<h3 class="name"><a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en)); ?>"><?php echo e((session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn); ?></a></h3>
												<div class="rating rateit-small"></div>
												<div class="product-price">
													<span class="price">TK <?php echo e((session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price)); ?></span>
												</div><!-- /.product-price -->
											</div>
										</div><!-- /.col -->
									</div><!-- /.product-micro-row -->
								</div><!-- /.product-micro -->
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL DEALS : END ============================================== -->
			<!-- ============================================== NEWSLETTER ============================================== -->
<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
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
	<?php echo $__env->make('frontend.include.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ============================================== Testimonials: END ============================================== -->

<div class="home-banner">
<img src="<?php echo e(asset('/')); ?>fontend/assets/images/banners/LHS-banner.jpg" alt="Image">
</div>




		</div><!-- /.sidemenu-holder -->
		<!-- ============================================== SIDEBAR : END ============================================== -->

		<!-- ============================================== CONTENT ============================================== -->
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			<!-- ========================================== SECTION – HERO ========================================= -->

	<div id="hero">
		<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
			<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="item" style="background-image: url(<?php echo e(asset($slider->image)); ?>">
				<div class="container-fluid">
					<div class="caption bg-color vertical-center text-left">
						<div class="slider-header fadeInDown-1"></div>
						<div class="big-text fadeInDown-1">
							<?php echo e((session()->get('language') == 'english') ? $slider->title_en : $slider->title_bn); ?>

						</div>
						<div class="excerpt fadeInDown-2 hidden-xs">
						<span><?php echo e((session()->get('language') == 'english') ? $slider->description_en : $slider->description_bn); ?></span>
						</div>
						<div class="button-holder fadeInDown-3">
							<a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
						</div>
					</div><!-- /.caption -->
				</div><!-- /.container-fluid -->
			</div><!-- /.item -->
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div><!-- /.owl-carousel -->
	</div>

<!-- ========================================= SECTION – HERO : END ========================================= -->

			<!-- ============================================== INFO BOXES ============================================== -->
<div class="info-boxes wow fadeInUp">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">

						<div class="col-xs-12">
							<h4 class="info-box-heading green">money back</h4>
						</div>
					</div>
					<h6 class="text">30 Days Money Back Guarantee</h6>
				</div>
			</div><!-- .col -->

			<div class="hidden-md col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">

						<div class="col-xs-12">
							<h4 class="info-box-heading green">free shipping</h4>
						</div>
					</div>
					<h6 class="text">Shipping on orders over $99</h6>
				</div>
			</div><!-- .col -->

			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">

						<div class="col-xs-12">
							<h4 class="info-box-heading green">Special Sale</h4>
						</div>
					</div>
					<h6 class="text">Extra $5 off on all items </h6>
				</div>
			</div><!-- .col -->
		</div><!-- /.row -->
	</div><!-- /.info-boxes-inner -->

</div><!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->
			<!-- ============================================== SCROLL TABS ============================================== -->
<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
	<div class="more-info-tab clearfix ">
	    <h3 class="new-product-title pull-left"><?php echo e((session()->get('language') == 'english') ? 'New Products ' : 'নতুন প্রোডাক্ট'); ?></h3>
		<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
			<li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><a data-transition-type="backSlide" href="#category<?php echo e($category->id); ?>" data-toggle="tab"><?php echo e((session()->get('language') == 'english') ? $category->category_name_en : $category->category_name_bn); ?></a></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		</ul><!-- /.nav-tabs -->
	</div>

	<div class="tab-content outer-top-xs">
		<div class="tab-pane in active" id="all">
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
					<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="item item-carousel">
						<div class="products">
							<div class="product">
								<div class="product-image">
									<div class="image">
										<a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?> "><img  src="<?php echo e(asset($product->product_thumbnail)); ?>" alt=""></a>
									</div><!-- /.image -->
									<?php
										$amount = $product->selling_price - $product->discount_price;
										$per = ($amount/$product->selling_price) * 100;
										$dis = 100 - $per;	
									?>
									<div class="tag new"><span><?php if($product->discount_price == null): ?> new <?php else: ?> <?php echo e((session()->get('language') == 'english') ? round($dis).'%' : priceBn(round($dis)).'%'); ?> <?php endif; ?></span></div>
								</div><!-- /.product-image -->

								<div class="product-info text-left">
									<h3 class="name"><a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?>"><?php echo e((session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn); ?></a></h3>
									<div class="rating rateit-small"></div>
									<div class="description"></div>
									<div class="product-price">
										<span class="price"> TK <?php echo e((session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price)); ?> </span>
										<span class="price-before-discount">TK <?php echo e((session()->get('language') == 'english') ? $product->discount_price : priceBn($product->discount_price)); ?></span>
									</div><!-- /.product-price -->
								</div><!-- /.product-info -->
								<div class="cart clearfix animate-effect">
									<div class="action">
										<ul class="list-unstyled">
											<li class="add-cart-button btn-group">
												<button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
													<i class="fa fa-shopping-cart"></i>
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
											</li>
											<li class="add-cart-button btn-group">
												<button data-toggle="tooltip" id="<?php echo e($product->id); ?>" onclick="addtoWishlist(this.id)" class="btn btn-primary icon" type="button" title="Add Wishlit">
													<i class="fa fa-heart"></i>
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to Wishlist</button>
											</li>

											

											<li class="lnk">
												<a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare">
													<i class="fa fa-signal" aria-hidden="true"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.action -->
								</div><!-- /.cart -->
							</div><!-- /.product -->

						</div><!-- /.products -->
					</div><!-- /.item -->
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
		</div><!-- /.tab-pane -->
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="tab-pane" id="category<?php echo e($category->id); ?>">
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
					<?php $__empty_1 = true; $__currentLoopData = $category->products()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<div class="item item-carousel">
						<div class="products">
							<div class="product">
								<div class="product-image">
									<div class="image">
										<a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?>"><img  src="<?php echo e(asset($product->product_thumbnail)); ?>" alt=""></a>
									</div><!-- /.image -->
									<?php
										$amount = $product->selling_price - $product->discount_price;
										$per = ($amount/$product->selling_price) * 100;
										$dis = 100 - $per;	
									?>
									<div class="tag new"><span><?php if($product->discount_price == null): ?> new <?php else: ?> <?php echo e((session()->get('language') == 'english') ? round($dis).'%' : priceBn(round($dis)).'%'); ?> <?php endif; ?></span></div>
								</div><!-- /.product-image -->


								<div class="product-info text-left">
									<h3 class="name"><a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?>"><?php echo e((session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn); ?></a></h3>
									<div class="rating rateit-small"></div>
									<div class="description"></div>

									<div class="product-price">
										<span class="price">TK <?php echo e((session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price)); ?></span>
										<span class="price-before-discount">TK <?php echo e((session()->get('language') == 'english') ? $product->discount_price : priceBn($product->discount_price)); ?></span>
									</div><!-- /.product-price -->

								</div><!-- /.product-info -->
									<div class="cart clearfix animate-effect">
										<div class="action">
											<ul class="list-unstyled">
												<li class="add-cart-button btn-group">
													<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
														<i class="fa fa-shopping-cart"></i>
													</button>
													<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
												</li>

												<li class="add-cart-button btn-group">
													<button class="btn btn-primary icon" id="<?php echo e($product->id); ?>" onclick="addWishlist(this.id)" data-toggle="dropdown" type="button">
														<i class="fa fa-heart"></i>
													</button>
													<button class="btn btn-primary cart-btn" type="button">Add to Wishlis</button>
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
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<h3 class="text-danger">No Product</h3>
					<?php endif; ?>
				</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
		</div><!-- /.tab-pane -->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div><!-- /.tab-content -->
</div><!-- /.scroll-tabs -->
<!-- ============================================== SCROLL TABS : END ============================================== -->
			<!-- ============================================== WIDE PRODUCTS ============================================== -->
<div class="wide-banners wow fadeInUp outer-bottom-xs">
	<div class="row">
<div class="col-md-7 col-sm-7">
<div class="wide-banner cnt-strip">
<div class="image">
<img class="img-responsive" src="<?php echo e(asset('/')); ?>fontend/assets/images/banners/home-banner1.jpg" alt="">
</div>

</div><!-- /.wide-banner -->
</div><!-- /.col -->
<div class="col-md-5 col-sm-5">
<div class="wide-banner cnt-strip">
<div class="image">
<img class="img-responsive" src="<?php echo e(asset('/')); ?>fontend/assets/images/banners/home-banner2.jpg" alt="">
</div>

</div><!-- /.wide-banner -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.wide-banners -->

<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
			<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title"><?php echo e((session()->get('language') == 'english') ? 'Featured products' : 'ফিচার প্রোডাক্ট'); ?></h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
			<div class="item item-carousel">
				<div class="products">
					<div class="product">
						<div class="product-image">
							<div class="image">
								<a href="<?php echo e(url('single-product-detail',$featured->id.'/'.$featured->product_slug_en )); ?>"><img  src="<?php echo e(asset($featured->product_thumbnail)); ?>" alt=""></a>
							</div><!-- /.image -->
							<div class="tag hot"><span>hot</span></div>
						</div><!-- /.product-image -->
						
						<div class="product-info text-left">
							<h3 class="name"><a href="<?php echo e(url('single-product-detail',$featured->id.'/'.$featured->product_slug_en )); ?>"><?php echo e((session()->get('language') == 'english') ? $featured->product_name_en : $featured->product_name_bn); ?></a></h3>
							<div class="rating rateit-small"></div>
							<div class="description"></div>

							<div class="product-price">
								<span class="price">TK <?php echo e((session()->get('language') == 'english') ? $featured->selling_price : priceBn($featured->selling_price)); ?></span>
								<span class="price-before-discount">TK <?php echo e((session()->get('language') == 'english') ? $featured->discount_price : priceBn($featured->discount_price)); ?></span>
							</div><!-- /.product-price -->
						</div><!-- /.product-info -->
						<div class="cart clearfix animate-effect">
							<div class="action">
								<ul class="list-unstyled">
									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" id="<?php echo e($featured->id); ?>" onclick="productView(this.id)" type="button" data-toggle="modal" data-target="#cartModal">
											<i class="fa fa-shopping-cart"></i>
										</button>
										<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
									</li>

									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" id="<?php echo e($featured->id); ?>" onclick="addtoWishlist(this.id)" type="button" >
											<i class="fa fa-heart"></i>
										</button>
										<button class="btn btn-primary cart-btn" type="button">Add to Wishlist</button>
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
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->

<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

<section class="section featured-product wow fadeInUp">
	<h3 class="section-title"><?php echo e((session()->get('language') == 'english') ? $brand_skip_0->brand_name_en : $brand_skip_0->brand_name_bn); ?></h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		<?php $__currentLoopData = $brand_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
			<div class="item item-carousel">
				<div class="products">
					<div class="product">
						<div class="product-image">
							<div class="image">
								<a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?>"><img  src="<?php echo e(asset($product->product_thumbnail)); ?>" alt=""></a>
							</div><!-- /.image -->
							<div class="tag hot"><span>hot</span></div>
						</div><!-- /.product-image -->

						<div class="product-info text-left">
							<h3 class="name"><a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?>"><?php echo e((session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn); ?></a></h3>
							<div class="rating rateit-small"></div>
							<div class="description"></div>

							<div class="product-price">
								<span class="price">TK <?php echo e((session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price)); ?></span>
								<span class="price-before-discount">TK <?php echo e((session()->get('language') == 'english') ? $product->discount_price : priceBn($product->discount_price)); ?></span>
							</div><!-- /.product-price -->
						</div><!-- /.product-info -->
						<div class="cart clearfix animate-effect">
							<div class="action">
								<ul class="list-unstyled">
									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
											<i class="fa fa-shopping-cart"></i>
										</button>
										<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
									</li>

									<li class="lnk wishlist">
										<a class="add-to-cart" href="detail.html" title="Wishlist">
											<i class="icon fa fa-heart"></i>
										</a>
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
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->



<section class="section featured-product wow fadeInUp">
	<h3 class="section-title"><?php echo e((session()->get('language') == 'english') ? $category_skip_0->category_name_en : $category_skip_0->category_name_bn); ?></h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		<?php $__currentLoopData = $category_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
			<div class="item item-carousel">
				<div class="products">
					<div class="product">
						<div class="product-image">
							<div class="image">
								<a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?>"><img  src="<?php echo e(asset($product->product_thumbnail)); ?>" alt=""></a>
							</div><!-- /.image -->
							<div class="tag hot"><span>hot</span></div>
						</div><!-- /.product-image -->

						<div class="product-info text-left">
							<h3 class="name"><a href="<?php echo e(url('single-product-detail',$product->id.'/'.$product->product_slug_en )); ?>"><?php echo e((session()->get('language') == 'english') ? $product->product_name_en : $product->product_name_bn); ?></a></h3>
							<div class="rating rateit-small"></div>
							<div class="description"></div>

							<div class="product-price">
								<span class="price">TK <?php echo e((session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price)); ?></span>
								<span class="price-before-discount">TK <?php echo e((session()->get('language') == 'english') ? $product->discount_price : priceBn($product->discount_price)); ?></span>
							</div><!-- /.product-price -->
						</div><!-- /.product-info -->
						<div class="cart clearfix animate-effect">
							<div class="action">
								<ul class="list-unstyled">
									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
											<i class="fa fa-shopping-cart"></i>
										</button>
										<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
									</li>

									<li class="lnk wishlist">
										<a class="add-to-cart" href="detail.html" title="Wishlist">
											<i class="icon fa fa-heart"></i>
										</a>
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
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->


			<!-- ============================================== WIDE PRODUCTS ============================================== -->
<div class="wide-banners wow fadeInUp outer-bottom-xs">
	<div class="row">

		<div class="col-md-12">
			<div class="wide-banner cnt-strip">
				<div class="image">
					<img class="img-responsive" src="<?php echo e(asset('/')); ?>fontend/assets/images/banners/home-banner.jpg" alt="">
				</div>
				<div class="strip strip-text">
					<div class="strip-inner">
						<h2 class="text-right">New Mens Fashion<br>
						<span class="shopping-needs">Save up to 40% off</span></h2>
					</div>
				</div>
				<div class="new-label">
				    <div class="text">NEW</div>
				</div><!-- /.new-label -->
			</div><!-- /.wide-banner -->
		</div><!-- /.col -->

	</div><!-- /.row -->
</div><!-- /.wide-banners -->
<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
			<!-- ============================================== BEST SELLER ============================================== -->

<div class="best-deal wow fadeInUp outer-bottom-xs">
	<h3 class="section-title">Best seller</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
	        	        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p20.jpg" alt="">
					</a>
				</div><!-- /.image -->



								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p21.jpg" alt="">
					</a>
				</div><!-- /.image -->


								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p22.jpg" alt="">
					</a>
				</div><!-- /.image -->


								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p23.jpg" alt="">
						</a>
				</div><!-- /.image -->



								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p24.jpg" alt="">
					</a>
				</div><!-- /.image -->



								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p25.jpg" alt="">
					</a>
				</div><!-- /.image -->


								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p26.jpg" alt="">
								</a>
				</div><!-- /.image -->



								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p27.jpg" alt="">
					</a>
				</div><!-- /.image -->


								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">
				<span class="price">
					$450.99				</span>

			</div><!-- /.product-price -->

			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->

						</div>
		        		        	</div>
	        </div>
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== BEST SELLER : END ============================================== -->

			<!-- ============================================== BLOG SLIDER ============================================== -->
<section class="section latest-blog outer-bottom-vs wow fadeInUp">
	<h3 class="section-title">latest form blog</h3>
	<div class="blog-slider-container outer-top-xs">
		<div class="owl-carousel blog-slider custom-carousel">

				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="<?php echo e(asset('/')); ?>fontend/assets/images/blog-post/post1.jpg" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->


						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
							<span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->


					</div><!-- /.blog-post -->
				</div><!-- /.item -->


				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="<?php echo e(asset('/')); ?>fontend/assets/images/blog-post/post2.jpg" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->


						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->


					</div><!-- /.blog-post -->
				</div><!-- /.item -->


				<!-- /.item -->


				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="<?php echo e(asset('/')); ?>fontend/assets/images/blog-post/post1.jpg" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->


						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->


					</div><!-- /.blog-post -->
				</div><!-- /.item -->


				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="<?php echo e(asset('/')); ?>fontend/assets/images/blog-post/post2.jpg" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->


						<div class="blog-post-info text-left">
						<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->


					</div><!-- /.blog-post -->
				</div><!-- /.item -->


				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="<?php echo e(asset('/')); ?>fontend/assets/images/blog-post/post1.jpg" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->


						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->


					</div><!-- /.blog-post -->
				</div><!-- /.item -->


		</div><!-- /.owl-carousel -->
	</div><!-- /.blog-slider-container -->
</section><!-- /.section -->
<!-- ============================================== BLOG SLIDER : END ============================================== -->

			<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section class="section wow fadeInUp new-arriavls">
	<h3 class="section-title">New Arrivals</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

		<div class="item item-carousel">
			<div class="products">

	<div class="product">
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p19.jpg" alt=""></a>
			</div><!-- /.image -->

			<div class="tag new"><span>new</span></div>
		</div><!-- /.product-image -->


		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>

			</div><!-- /.product-price -->

		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

						</li>

		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
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

		<div class="item item-carousel">
			<div class="products">

	<div class="product">
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p28.jpg" alt=""></a>
			</div><!-- /.image -->

			<div class="tag new"><span>new</span></div>
		</div><!-- /.product-image -->


		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>

			</div><!-- /.product-price -->

		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

						</li>

		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
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

		<div class="item item-carousel">
			<div class="products">

	<div class="product">
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p30.jpg" alt=""></a>
			</div><!-- /.image -->

			                        <div class="tag hot"><span>hot</span></div>
		</div><!-- /.product-image -->


		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>

			</div><!-- /.product-price -->

		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

						</li>

		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
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

		<div class="item item-carousel">
			<div class="products">

	<div class="product">
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p1.jpg" alt=""></a>
			</div><!-- /.image -->

			                        <div class="tag hot"><span>hot</span></div>
		</div><!-- /.product-image -->


		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>

			</div><!-- /.product-price -->

		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

						</li>

		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
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

		<div class="item item-carousel">
			<div class="products">

	<div class="product">
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p2.jpg" alt=""></a>
			</div><!-- /.image -->

			            <div class="tag sale"><span>sale</span></div>
		</div><!-- /.product-image -->


		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>

			</div><!-- /.product-price -->

		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

						</li>

		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
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

		<div class="item item-carousel">
			<div class="products">

	<div class="product">
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="<?php echo e(asset('/')); ?>fontend/assets/images/products/p3.jpg" alt=""></a>
			</div><!-- /.image -->

			            <div class="tag sale"><span>sale</span></div>
		</div><!-- /.product-image -->


		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>

			</div><!-- /.product-price -->

		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

						</li>

		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
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
			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

		</div><!-- /.homebanner-holder -->
		<!-- ============================================== CONTENT : END ============================================== -->
	</div><!-- /.row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/frontend/index.blade.php ENDPATH**/ ?>