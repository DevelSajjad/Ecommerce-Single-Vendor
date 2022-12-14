<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title> <?php echo $__env->yieldContent('title'); ?> </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/blue.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/rateit.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>fontend/assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://js.stripe.com/v3/"></script>
<body class="cnt-home">
	<!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="<?php echo e(url('/cache-clear')); ?>"> Cache Clear</a></li>
                        <li><a href="#"><i class="icon fa fa-user"></i><?php echo e((session()->get('language') == 'english') ? 'My Account' : '????????????????????????'); ?></a></li>
                        <li><a href="<?php echo e(url('/user/wishlist/view')); ?>"><i class="icon fa fa-heart"></i><?php echo e((session()->get('language') == 'english') ? 'Wishlis' : '??????????????? ??????????????????'); ?></a></li>
                        <li><a href="<?php echo e(route('cart-list')); ?>"><i class="icon fa fa-shopping-cart"></i><?php echo e((session()->get('language') == 'english') ? 'My Cart' : '???????????? ???????????????'); ?></a></li>
                        <li><a href="<?php echo e(route('checkout')); ?>"><i class="icon fa fa-check"></i><?php echo e((session()->get('language') == 'english') ? 'Checkout' : '??????????????????'); ?></a></li>
                        <?php if(auth()->guard()->check()): ?>
                            <li><a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon fa fa-check"></i><?php echo e((session()->get('language') == 'english') ? 'Profile' : '????????????????????????'); ?></a></li>
                            <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon fa fa-check"></i><i class="icon fa fa-lock"></i><?php echo e((session()->get('language') == 'english') ? 'Logout' : '???????????????'); ?></a></li>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                            </form>
                            <?php else: ?>
                            <li><a href="<?php echo e(route('login')); ?>"><i class="icon fa fa-lock"></i><?php echo e((session()->get('language') == 'english') ? 'Login/Register' : '????????????/???????????????????????????'); ?></a></li>
                        <?php endif; ?>

                    </ul>
                </div><!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="drl">
                            <a href="#"  data-toggle="modal" data-target="#exampleModal" ><span class="value">Track Order </span></a>
                        </li>
                        
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('track_order')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h5>Invoice No</h5>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input class="form-control" name="invoice_no" type="text" placeholder="Invoive Number">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value"><?php echo e((session()->get('language') == 'english') ? 'English' : '???????????? ????????????????????????'); ?> </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php if(session()->get('language') == 'english'): ?>
                                    <li><a href="<?php echo e(route('bangla-language')); ?>">???????????????</a></li>
                                    <?php else: ?>
                                    <li><a href="<?php echo e(route('english-language')); ?>">English</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="<?php echo e(url('/')); ?>">

                            <img src="<?php echo e(asset('/')); ?>fontend/assets/images/logo.png" alt="">

                        </a>
                    </div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

				<div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
					<!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form action="<?php echo e(route('search')); ?>" method="GET" >
        <div class="control-group">

            <input class="search-field" id="search" name="search" placeholder="Search here..." />
            <button type="submit" class="search-button" ></button>
        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

<div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
	<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
                <div class="basket">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
				<div class="basket-item-count"><span id="cartQty" class="count"></span></div>
                    <div class="total-price-basket">
                        <span class="lbl">cart -</span>
                        <span class="total-price">
                            <span class="sign">TK </span><span id="subTotal" class="value"></span>
                        </span>
                    </div>
		    </div>
		</a>
		<ul class="dropdown-menu">
			<li>
                <div id="miniCart">

                </div>
				<div class="clearfix"></div>
			<hr>
			<div class="clearfix cart-total">
				<div class="pull-right">
						<span class="text">Sub Total :</span><span id="subTotal" class='price'></span>
				</div>
				<div class="clearfix"></div>
				<a href="<?php echo e(route('checkout')); ?>" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
			</div><!-- /.cart-total-->
		</li>
		</ul><!-- /.dropdown-menu-->
	</div><!-- /.dropdown-cart -->

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
			</div><!-- /.row -->

		</div><!-- /.container -->

	</div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a href="<?php echo e(url('/')); ?>" data-hover="dropdown" class="dropdown-toggle" ><?php echo e((session('language') == 'english') ? 'Home' : '?????????'); ?></a>
                                </li>
                                <?php
                                    $categories = App\Models\Category::orderBy('category_name_en','asc')->get();  
                                ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="dropdown yamm mega-menu">
                                        <a href="" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><?php echo e((session('language') == 'english') ? $category->category_name_en : $category->category_name_bn); ?></a>
                                        <?php if($category->subCategories->isNotEmpty()): ?>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <?php
                                                            $subcategories = App\Models\Subcategory::where('category_id', $category->id)->orderBy('subcategory_name_en','asc')->get();   
                                                        ?>
                                                        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <a href="<?php echo e(url('subcategory/product', $subcategory->id.'/'.$subcategory->subcategory_slug_en)); ?>"><h2 class="title"><?php echo e((session('language') == 'english') ? $subcategory->subcategory_name_en : $subcategory->subcategory_name_bn); ?></h2></a>
                                                            <?php
                                                                $subsubcategories = App\Models\Subsubcategory::where('subcategory_id', $subcategory->id)->orderBy('subsubcategory_name_en','asc')->get();   
                                                            ?>
                                                            <?php $__currentLoopData = $subsubcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <ul class="links">
                                                                <li><a href="<?php echo e(url('subsubcategory/product', $subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en)); ?>"><?php echo e((session('language') == 'english') ? $subsubcategory->subsubcategory_name_en : $subsubcategory->subsubcategory_name_bn); ?></a></li>
                                                            </ul>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div><!-- /.col -->
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive" src="assets/images/banners/top-menu-banner.jpg" alt="">
                                                        </div><!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->
    </div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->


<?php echo $__env->yieldContent('content'); ?>

	<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo e(asset('/')); ?>fontend/assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->

</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->


<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="pname"></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" id="pimg" src="" alt="Card image cap" height="200px">
                    </div>
                </div>

                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item text-warning active">Product Info</li>
                        <li class="list-group-item"><b>Price: </b><span id="price"> </span> <del class="text-light" id="pdiscount"></del> </li>
                        <li class="list-group-item"><b>Product Code: </b><span id="pcode">  </span></li>
                        <li class="list-group-item"><b>Category Name: </b><span id="pcatname"> </span></li>
                        <li class="list-group-item"><b>Brand: </b><span id="pbrand"> </span></li>
                        <li class="list-group-item"><b>Stock: </b><span id="pstock">  </span></li>
                      </ul>
                </div>

                <div class="col-md-4">
                    <div class="form-group" id="product_size_hide">
                        <label for="exampleFormControlSelect1">Choose Size</label>
                        <select class="form-control" id="product_size">
                         
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose Color</label>
                        <select class="form-control" id="product_color">
                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" id="qty" value="1" min="1">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
           <input type="hidden" id="product_id">
          <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="cartbtn" onclick="addCart()">Add Cart</button>
        </div>
      </div>
    </div>
  </div>



<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>+(888) 123-4567<br>+(888) 456-7890</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#">flipmart@themesground.com</a></span>
                </div>
            </li>

            </ul>
    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us"><?php echo e((session()->get('language') == 'english') ? 'My Account' : '????????????????????????'); ?></a></li>
                <li><a href="#" title="About us"><?php echo e((session()->get('language') == 'english' ? 'Order History' : '???????????? ????????????')); ?></a></li>
                <li><a href="#" title="faq"><?php echo e((session()->get('language') == 'english' ? 'FAQ' : '??????????????????')); ?></a></li>
                <li><a href="#" title="Popular Searches"><?php echo e((session()->get('language') == 'english' ? 'Specials' : '???????????????')); ?></a></li>
                <li class="last"><a href="#" title="Where is my order?"><?php echo e((session()->get('language') == 'english' ? 'Help Center' : '???????????????????????? ?????????????????????')); ?></a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                          <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                  <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                  <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                  <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                  <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                  <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="<?php echo e(asset('/')); ?>fontend/assets/images/payments/1.png" alt=""></li>
                        <li><img src="<?php echo e(asset('/')); ?>fontend/assets/images/payments/2.png" alt=""></li>
                        <li><img src="<?php echo e(asset('/')); ?>fontend/assets/images/payments/3.png" alt=""></li>
                        <li><img src="<?php echo e(asset('/')); ?>fontend/assets/images/payments/4.png" alt=""></li>
                        <li><img src="<?php echo e(asset('/')); ?>fontend/assets/images/payments/5.png" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes ??? can be removed on production -->


	<!-- For demo purposes ??? can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/jquery-1.11.1.min.js"></script>

	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/bootstrap.min.js"></script>

	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/owl.carousel.min.js"></script>

	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/echo.min.js"></script>
	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>fontend/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>fontend/assets/js/lightbox.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>fontend/assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>fontend/assets/js/wow.min.js"></script>
	<script src="<?php echo e(asset('/')); ?>fontend/assets/js/scripts.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        <?php if(Session::has('message')): ?>
        //   toastr.options =
        //   {
        //   	"closeButton" : true,
        //   	"progressBar" : true
        //   }
                toastr.success("<?php echo e(session('message')); ?>");
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
        //   toastr.options =
        //   {
        //   	"closeButton" : true,
        //   	"progressBar" : true
        //   }
                toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
        //   toastr.options =
        //   {
        //   	"closeButton" : true,
        //   	"progressBar" : true
        //   }
                toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
        //   toastr.options =
        //   {
        //   	"closeButton" : true,
        //   	"progressBar" : true
        //   }


                toastr.warning("<?php echo e(session('warning')); ?>");
        <?php endif; ?>
    </script>
    
    <script type="text/javascript">
            ///View Modal
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        function productView(id)
        {
            $.ajax({
                type: 'GET',
                url:   '/product/view/model/'+id,
                datatype: 'json',
                success: function(data){
                    if($("#pname").text(data.products.product_name_en)) {
                        $("#pname").text();
                    }else{
                        $("#pname").append(data.products.product_name_en);
                    }    
                    $("#pimg").attr('src', '/'+data.products.product_thumbnail);
                    $("#price").text(data.products.selling_price);
                    $("#pdiscount").text(data.products.discount_price);
                    $("#pcode").text(data.products.product_code);
                    $("#pcatname").text(data.products.categories.category_name_en);
                    $("#pbrand").text(data.products.brand.brand_name_en);
                    $("#product_id").val(id);
                    $("#qty").val(1);
                    if(data.products.product_qty > 0) {
                        $("#cartbtn").show();
                        $("#pstock").css('background-color', 'green').addClass('badge badge-pill badge-success').text('Avilable');
                    }else{
                        $("#cartbtn").hide();
                        $("#pstock").css('background-color', 'red').addClass('badge badge-pill badge-danger').text('Out Of Stock');
                    }
                   
                    //size
                    if (data.size_en == '') {
                        $("#product_size_hide").hide();
                    }else {
                        $("#product_size_hide").show();
                        $("#product_size").empty();
                        $.each(data.size_en, function(key, value){
                        $("#product_size").append('<option value="'+value+'"> '+value+' </option>')
                    })
                    }
                    //Color
                    $("#product_color").empty();
                    $.each(data.color_en, function(key, value){
                        $("#product_color").append('<option value="'+value+'">'+value+'</option>')
                    })
                }
            });
        }
        
        // Add Cart with Modal
            function addCart()
            {
                var product_id = $("#product_id").val();
                var product_name = $("#pname").text();
                var product_size = $("#product_size option:selected").text();
                var product_color = $("#product_color option:selected").text();
                var quantity      =  $("#qty").val();
                $.ajax({
                    type: "POST",
                    url: "/add/cart/data/"+product_id,
                    datatype: "json",
                    data: {
                        product_name:product_name, size:product_size, color: product_color, quantity:quantity
                    },
                    success:function(data) {
                        miniCart();
                        $("#closeModal").click();
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
        //End Add Cart with Modal
    </script>

    <script>
        function miniCart()
        {
            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/cart/view/data",
                success: function(data){
                
                    $('span[id="subTotal"]').text(data.cartTotal);
                    $("#cartQty").text(data.cartQty);
                    var miniCart = "";
                    $.each(data.carts, function(key, value) {
                        miniCart += ` 
                        <div class="cart-item product-summary">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="image">
                                        <a href="/single-product-detail/${value.id}/${value.options.slug}"><img src="/${value.options.image}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3 class="name"><a href="/single-product-detail/${value.id}/${value.options.slug}">${value.name}</a></h3>
                                    <div class="price">TK ${value.price}</div>
                                </div>
                                <div class="col-xs-1 action">
                                    <button type="submit" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        </div><!-- /.cart-item --> `
                    })
                    $("#miniCart").html(miniCart);
                }
            });
        }
        miniCart();
        function cartRemove(rowId)
        {
            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/cart/remove/"+rowId,
                success: function(data) {
                    miniCart();
                    cartListView();
                    couponCalculation();
                    $("#couponTbl").show();
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


<script>
    function addtoWishlist(product_id)
    {
        $.ajax({
            type: "POST",
            datatype: "json",
            url: "<?php echo e(url('/add/wishlist/')); ?>/"+product_id,
            success: function(data) {
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




<?php echo $__env->yieldContent('js'); ?>

</body>

</html>
<?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/frontend/master.blade.php ENDPATH**/ ?>