@extends('frontend.master')
@section('title')
	Tag Wise Product
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
				<li><a href="#">Home</a></li>
				<li class='active'>Handbags</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row'>
			<div class='col-md-3 sidebar'>
<!-- ================================== TOP NAVIGATION ================================== -->
    @include('frontend.include.categories');
<!-- ================================== TOP NAVIGATION : END ================================== -->	            <div class="sidebar-module-container">
	            	
<div class="sidebar-filter">
<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp">
    <h3 class="section-title">{{ (session()->get('language') == 'english') ? 'shop by' : 'ক্যাটেগরি দ্বারা' }}</h3>
    <div class="widget-header">
        <h4 class="widget-title">{{ (session()->get('language') == 'english') ? 'Category' : 'ক্যাটেগরি' }}</h4>
    </div>
	<div class="sidebar-widget-body">
		<div class="accordion">
            @foreach ($categories as $category)
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseOne{{ $category->id }}" data-toggle="collapse" class="accordion-toggle collapsed">
                        {{ (session()->get('language') == 'english') ? $category->category_name_en : $category->category_name_bn }}
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseOne{{ $category->id }}" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
                            @foreach ($category->subCategories()->get() as $subcategory)
	                            <li><a href="#">{{ (session()->get('language') == 'english') ? $subcategory->subcategory_name_en : $subcategory->subcategory_name_bn }}</a></li>
                            @endforeach
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->
            @endforeach
	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->

<!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

		            	<!-- ============================================== PRICE SILDER============================================== -->
<div class="sidebar-widget wow fadeInUp">
	<div class="widget-header">
		<h4 class="widget-title">Price Slider</h4>
	</div>
	<div class="sidebar-widget-body m-t-10">
		<div class="price-range-holder">
      	    <span class="min-max">
                 <span class="pull-left">$200.00</span>
                 <span class="pull-right">$800.00</span>
            </span>
            <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">

            <input type="text" class="price-slider" value="" >
   
        </div><!-- /.price-range-holder -->
        <a href="#" class="lnk btn btn-primary">Show Now</a>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRICE SILDER : END ============================================== -->
		            	<!-- ============================================== MANUFACTURES============================================== -->
<div class="sidebar-widget wow fadeInUp">
	<div class="widget-header">
		<h4 class="widget-title">Manufactures</h4>
	</div>
	<div class="sidebar-widget-body">
		<ul class="list">
            <li><a href="#">Forever 18</a></li>
            <li><a href="#">Nike</a></li>
            <li><a href="#">Dolce & Gabbana</a></li>
            <li><a href="#">Alluare</a></li>
            <li><a href="#">Chanel</a></li>
            <li><a href="#">Other Brand</a></li>
          </ul>
        <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== MANUFACTURES: END ============================================== -->

<!-- ============================================== PRODUCT TAGS ============================================== -->
    @include('frontend.include.product_tags')
<!-- ============================================== PRODUCT TAGS : END ============================================== -->		            	<!-- <!-- ============================================== Testimonials============================================== -->

<!-- ============================================== Testimonials: Start ============================================== -->
    @include('frontend.include.testimonials')
<!-- ============================================== Testimonials: END ============================================== -->

<div class="home-banner">
<img src="{{ asset( '/') }}fontend/assets/images/banners/LHS-banner.jpg" alt="Image">
</div> 

	            	</div><!-- /.sidebar-filter -->
	            </div><!-- /.sidebar-module-container -->
            </div><!-- /.sidebar -->
			<div class='col-md-9'>
					<!-- ========================================== SECTION – HERO ========================================= -->

	<div id="category" class="category-carousel hidden-xs">
		<div class="item">	
			<div class="image">
				<img src="{{ asset( '/') }}fontend/assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive">
			</div>
			<div class="container-fluid">
				<div class="caption vertical-top text-left">
					<div class="big-text">
						Big Sale
					</div>

					<div class="excerpt hidden-sm hidden-md">
						Save up to 49% off
					</div>
                    <div class="excerpt-normal hidden-sm hidden-md">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit
					</div>
					
				</div><!-- /.caption -->
			</div><!-- /.container-fluid -->
		</div>
</div>

<!-- ========================================= SECTION – HERO : END ========================================= -->
<div class="clearfix filters-container m-t-10">
	<div class="row">
		<div class="col col-sm-6 col-md-2">
			<div class="filter-tabs">
				<ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
					<li class="active">
						<a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a>
					</li>
					<li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
				</ul>
			</div><!-- /.filter-tabs -->
		</div><!-- /.col -->
		<div class="col col-sm-12 col-md-6">
			<div class="col col-sm-3 col-md-6 no-padding">
				<div class="lbl-cnt">
					<span class="lbl">Sort by</span>
					<div class="fld inline">
						<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
							<button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
								Position <span class="caret"></span>
							</button>
							<ul role="menu" class="dropdown-menu">
								<li role="presentation"><a href="#">position</a></li>
								<li role="presentation"><a href="#">Price:Lowest first</a></li>
								<li role="presentation"><a href="#">Price:HIghest first</a></li>
								<li role="presentation"><a href="#">Product Name:A to Z</a></li>
							</ul>
						</div>
					</div><!-- /.fld -->
				</div><!-- /.lbl-cnt -->
			</div><!-- /.col -->
			<div class="col col-sm-3 col-md-6 no-padding">
				<div class="lbl-cnt">
					<span class="lbl">Show</span>
					<div class="fld inline">
						<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
							<button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
								1 <span class="caret"></span>
							</button>

							<ul role="menu" class="dropdown-menu">
								<li role="presentation"><a href="#">1</a></li>
								<li role="presentation"><a href="#">2</a></li>
								<li role="presentation"><a href="#">3</a></li>
								<li role="presentation"><a href="#">4</a></li>
								<li role="presentation"><a href="#">5</a></li>
								<li role="presentation"><a href="#">6</a></li>
								<li role="presentation"><a href="#">7</a></li>
								<li role="presentation"><a href="#">8</a></li>
								<li role="presentation"><a href="#">9</a></li>
								<li role="presentation"><a href="#">10</a></li>
							</ul>
						</div>
					</div><!-- /.fld -->
				</div><!-- /.lbl-cnt -->
			</div><!-- /.col -->
		</div><!-- /.col -->

        <div class="col col-sm-6 col-md-4 text-right">
            <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>	
                    <li class="active"><a href="#">2</a></li>	
                    <li><a href="#">3</a></li>	
                    <li><a href="#">4</a></li>	
                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul><!-- /.list-inline -->
            </div><!-- /.pagination-container -->		
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
<div class="search-result-container ">
    <div id="myTabContent" class="tab-content category-list">
        <div class="tab-pane active " id="grid-container">
            <div class="category-product">
                <div class="row">
                    @foreach ($tagWiseProduct as $product)									
                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                            <div class="products">
                                <div class="product">		
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{ url('single-product-detail',$product->id.'/'.$product->product_slug_en) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a>
                                        </div><!-- /.image -->
                                        @php
                                            $amount = $product->selling_price - $product->discount_price;
                                            $discount = ($amount/$product->selling_price) * 100;
                                            $discount_percent = round(100 - $discount,2);
                                        @endphp			
                                        <div class="tag new"><span>{{ (session()->get('language') == 'english') ? $discount_percent : priceBn($discount_percent) }}%</span></div>                        		   
                                    </div><!-- /.product-image -->
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{ url('single-product-detail',$product->id.'/'.$product->product_slug_en) }}">{{ session()->get('language') == 'english' ? $product->product_name_en : $product->product_name_bn }}</a></h3>
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
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->
                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.category-product -->
		</div><!-- /.tab-pane -->

        <div class="tab-pane"  id="list-container">
            <div class="category-product">
                <div class="category-product-inner wow fadeInUp">
                    <div class="products">	
                        @foreach ($tagWiseProduct as $product)			
                            <div class="product-list product">
                                <div class="row product-list-row">
                                    <div class="col col-sm-4 col-lg-4">
                                        <div class="product-image">
                                            <div class="image">
                                                <img src="{{ asset($product->product_thumbnail) }}" alt="">
                                            </div>
                                        </div><!-- /.product-image -->
                                    </div><!-- /.col -->
                                    <div class="col col-sm-8 col-lg-8">
                                        <div class="product-info">
                                            <h3 class="name"><a href="{{ url('single-product-detail',$product->id.'/'.$product->product_slug_en) }}">{{ session()->get('language') == 'english' ? $product->product_name_en : $product->product_name_bn }}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price">	
                                                <span class="price">TK {{ (session()->get('language') == 'english') ? $product->selling_price : priceBn($product->selling_price) }}</span>
                                                <span class="price-before-discount">TK {{ (session()->get('language') == 'english') ? $product->discount_price : priceBn($product->discount_price) }}</span>
                                            </div><!-- /.product-price -->
                                            <div class="description m-t-10"> {!! (session()->get('language') == 'english') ? $product->short_descp_en : $product->short_descp_bn !!}</div>
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
                                                                    <i class="fa fa-signal"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                        </div><!-- /.product-info -->	
                                    </div><!-- /.col -->
                                </div><!-- /.product-list-row -->
                                @php
                                    $amount = $product->selling_price - $product->discount_price;
                                    $discount = ($amount/$product->selling_price) * 100;
                                    $discount_percent = round(100 - $discount,2);
                                @endphp
                                    @if ($product->discount_price == null)
                                    <div class="tag new"><span>new</span></div> 
                                @else
                                    <div class="tag new"><span>{{ (session()->get('language') == 'english') ? $discount_percent : priceBn($discount_percent) }}%</span></div> 
                                @endif			
                            </div><!-- /.product-list -->
                        @endforeach
                    </div><!-- /.products -->
                </div><!-- /.category-product-inner -->
            </div><!-- /.category-product -->
        </div><!-- /.tab-pane #list-container -->
    </div><!-- /.tab-content -->

    <div class="clearfix filters-container">
        <div class="text-right">
            {{ $tagWiseProduct->links() }}
        </div><!-- /.text-right -->
    </div><!-- /.filters-container -->
</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div><!-- /.row -->

@endsection