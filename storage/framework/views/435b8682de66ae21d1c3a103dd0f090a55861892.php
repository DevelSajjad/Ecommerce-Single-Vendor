<div class="col-sm-6">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <img class="card-img-top" style="border-radius: 50%" src="<?php echo e(asset(Auth::user()->image)); ?>"
                alt="Card image cap" height="40%" width="100%" alt="Profile Image">

        </div>
        <ul class="list-group list-group-flush">
            <a href="<?php echo e(route('user.dashboard')); ?>" class="btn btn-primary btn-sm btn-block">Home</a>
            <a href="<?php echo e(route('order-list')); ?>" class="btn btn-primary btn-sm btn-block">My Orders</a>
            <a href="<?php echo e(route('user-image')); ?>" class="btn btn-primary btn-sm btn-block">Update Image</a>
            <a href="<?php echo e(route('update-password')); ?>" class="btn btn-primary btn-sm btn-block">Change Password</a>
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm btn-block">Logout</a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
            </form>
        </ul>
    </div>
</div>
<?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/user/include/sidebar.blade.php ENDPATH**/ ?>