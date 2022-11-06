<?php $__env->startSection('brands'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="<?php echo e(route('brands')); ?>">Starlight</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Brand List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-30p">Brand Image</th>
                        <th class="wd-25p">Brand Name EN</th>
                        <th class="wd-25p">Brand Name BN</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brandData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <img src="<?php echo e(asset($brandData->brand_image)); ?>" alt="" style="width: 100px"> </td>
                            <td> <?php echo e($brandData->brand_name_en); ?> </td>
                            <td><?php echo e($brandData->brand_name_bn); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin/edit-brand',$brandData->id)); ?>" class="btn btn-info btn-sm"><i title="Edit Brand" class="fa fa-pencil"></i></a>
                                <a href="<?php echo e(url('/admin/delete/brand',$brandData->id)); ?>" class="btn btn-danger btn-sm" id="delete" title="Brand Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Add Brand
                        </div>
                        <form action="<?php echo e(route('add-brand')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="form-control-label text-dark">Brand Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_en" value="<?php echo e(old('brand_name_en')); ?>" placeholder="Brand Name English">
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
                                <input class="form-control" type="text" name="brand_name_bn" value="<?php echo e(old('brand_name_bn')); ?>" placeholder="Brand Name Bangla">
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
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Brand" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/brand/brand.blade.php ENDPATH**/ ?>