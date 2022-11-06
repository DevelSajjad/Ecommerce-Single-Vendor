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
        <a href="<?php echo e(route('brands')); ?>" class="sl-menu-link ">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="<?php echo e(route('brands')); ?>" class="sl-menu-link <?php echo $__env->yieldContent('brands'); ?> " >
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Brands</span>
          </div>
        </a>
        <a href="<?php echo e(route('slider')); ?>" class="sl-menu-link <?php echo $__env->yieldContent('slider'); ?> " >
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Slider</span>
          </div>
        </a>
        <a href="#" class="sl-menu-link <?php echo $__env->yieldContent('categories'); ?> show-sub">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-list-alt tx-20"></i>
            <span class="menu-item-label">Categories</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo e(route('category')); ?>" class="nav-link <?php echo $__env->yieldContent('addCategory'); ?> ">Add Category</a></li>
          <li class="nav-item"><a href="<?php echo e(route('sub-category')); ?>" class="nav-link <?php echo $__env->yieldContent('subcategory'); ?> ">Add Sub-Category</a></li>
          <li class="nav-item"><a href="<?php echo e(route('sub-sub-category')); ?>" class="nav-link <?php echo $__env->yieldContent('subsubcategory'); ?> ">Add Sub-Sub-Category</a></li>
        </ul>

        <a href="#" class="sl-menu-link  show-sub">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-list-alt tx-20"></i>
            <span class="menu-item-label <?php echo $__env->yieldContent('products'); ?>">Products</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo e(route('add-product')); ?>" class="nav-link <?php echo $__env->yieldContent('add-product'); ?> ">Add Product</a></li>
          <li class="nav-item"><a href="<?php echo e(route('manage-product')); ?>" class="nav-link <?php echo $__env->yieldContent('manage-product'); ?> ">Manage Product</a></li>
        </ul>
        <!-- sl-menu-link -->
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
<?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/include/leftbar.blade.php ENDPATH**/ ?>