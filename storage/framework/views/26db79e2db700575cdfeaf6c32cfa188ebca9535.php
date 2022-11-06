<?php $__env->startSection('content'); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   <?php echo $__env->make('user.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi...!!</span><strong class="text-warning"><?php echo e(Auth::user()->name); ?></strong> Update Your Profile</h3>
                        <div class="card-body">
                            <form action="<?php echo e(route('update-profile-image')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="text" hidden name="old_image" value="<?php echo e(Auth::user()->image); ?>">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image"  class="form-control">
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?> </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Update Image</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/user/userimage.blade.php ENDPATH**/ ?>