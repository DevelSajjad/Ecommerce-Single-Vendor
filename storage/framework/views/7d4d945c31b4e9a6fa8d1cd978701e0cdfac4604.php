
<?php $__env->startSection('brands'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="<?php echo e(route('brands')); ?>l">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Brand
                        </div>
                        <form action="<?php echo e(route('brand-update')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="brand_id" value="<?php echo e($brand->id); ?>">
                            <input type="hidden" name="old_image" value="<?php echo e($brand->brand_image); ?>">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_en" value="<?php echo e($brand->brand_name_en); ?>" placeholder="Brand Name English">
                                <?php $__errorArgs = ['brand_name_en'];
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
                                <label class="form-control-label text-dark">Brand Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_bn" value="<?php echo e($brand->brand_name_bn); ?>" placeholder="Brand Name Bangla">
                                <?php $__errorArgs = ['brand_name_bn'];
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
                                <label class="form-control-label text-dark">Brand Image: <span class="tx-danger">*</span></label>
                                <img class="ml-5" src="<?php echo e(asset($brand->brand_image)); ?>" style="height: 150px; width: 200px" alt="">
                                <input class="form-control" type="file" name="brand_image">
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
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Brand" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/brand/edit.blade.php ENDPATH**/ ?>