<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Admin Panel</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ route('brands') }}" class="sl-menu-link ">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('brands') }}" class="sl-menu-link @yield('brands') " >
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Brands</span>
          </div>
        </a>
        <a href="{{ route('slider') }}" class="sl-menu-link @yield('slider') " >
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Slider</span>
          </div>
        </a>
        <a href="{{ route('coupon') }}" class="sl-menu-link @yield('coupon') " >
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Coupon</span>
          </div>
        </a>
        <a href="#" class="sl-menu-link @yield('order') show-sub">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-list-alt tx-20"></i>
            <span class="menu-item-label">Orders</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('pending-order') }}" class="nav-link @yield('pending') ">Pending</a></li>
          <li class="nav-item"><a href="{{ route('confirm-order') }}" class="nav-link @yield('confirm') ">Confirm</a></li>
          <li class="nav-item"><a href="{{ route('processing-order') }}" class="nav-link @yield('processing') ">Processing</a></li>
          <li class="nav-item"><a href="{{ route('picked-order') }}" class="nav-link @yield('picked') ">Picked</a></li>
          <li class="nav-item"><a href="{{ route('shipped-order') }}" class="nav-link @yield('shipping') ">Shipped</a></li>
          <li class="nav-item"><a href="{{ route('delivered-order') }}" class="nav-link @yield('delivered') ">Deliver</a></li>
          <li class="nav-item"><a href="{{ route('cancel-order') }}" class="nav-link @yield('cancel') ">Cancel</a></li>
        </ul>
        <a href="#" class="sl-menu-link @yield('categories') show-sub">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-list-alt tx-20"></i>
            <span class="menu-item-label">Categories</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('category') }}" class="nav-link @yield('addCategory') ">Add Category</a></li>
          <li class="nav-item"><a href="{{ route('sub-category') }}" class="nav-link @yield('subcategory') ">Add Sub-Category</a></li>
          <li class="nav-item"><a href="{{ route('sub-sub-category') }}" class="nav-link @yield('subsubcategory') ">Add Sub-Sub-Category</a></li>
        </ul>
        
        <a href="#" class="sl-menu-link  show-sub">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-list-alt tx-20"></i>
            <span class="menu-item-label @yield('products')">Products</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add-product') }}" class="nav-link @yield('add-product') ">Add Product</a></li>
          <li class="nav-item"><a href="{{ route('manage-product') }}" class="nav-link @yield('manage-product') ">Manage Product</a></li>
        </ul>

        <a href="#" class="sl-menu-link  show-sub">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-list-alt tx-20"></i>
            <span class="menu-item-label @yield('ship')">Ship Area</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add-division-page') }}" class="nav-link @yield('add-division') ">Add Division</a></li>
          <li class="nav-item"><a href="{{ route('add-district-page') }}" class="nav-link @yield('add-district') ">Add Discrict</a></li>
          <li class="nav-item"><a href="{{ route('add-state-page') }}" class="nav-link @yield('add-state') ">Add States</a></li>    
        </ul>
        <!-- sl-menu-link -->
      </div><!-- sl-sideleft-menu -->
      
      <br>
    </div><!-- sl-sideleft -->
