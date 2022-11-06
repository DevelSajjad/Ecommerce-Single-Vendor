
<?php $__env->startSection('slider'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="<?php echo e(route('admin.dashboard')); ?>l">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Slider
                        </div>
                        <form action="<?php echo e(route('slide-update')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="slide_id" value="<?php echo e($slide->id); ?>">
                            <input type="hidden" name="old_image" value="<?php echo e($slide->image); ?>">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Title EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_en" value="<?php echo e($slide->title_en); ?>" placeholder="Brand Name English">
                                <?php $__errorArgs = ['slide_title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
            
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_bn" value="<?php echo e($slide->title_bn); ?>" placeholder="Brand Name Bangla">
                                <?php $__errorArgs = ['slide_title_bn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Description EN: <span class="tx-danger">*</span></label>
                                <textarea name="slide_desc_en" id="" cols="47" rows="3"><?php echo e($slide->description_en); ?></textarea>
                                <?php $__errorArgs = ['slide_desc_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Description BN: <span class="tx-danger">*</span></label>
                                <textarea name="slide_desc_bn" id="" cols="47" rows="3"><?php echo e($slide->description_bn); ?></textarea>
                                <?php $__errorArgs = ['slide_desc_bn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Image: <span class="tx-danger">*</span></label>
                                <img class="ml-5" src="<?php echo e(asset($slide->image)); ?>" style="height: 150px; width: 200px" alt="">
                                <input class="form-control" type="file" name="slide_image">
                                <?php $__errorArgs = ['brand_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Slide" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/slider/slide-edit.blade.php ENDPATH**/ ?>