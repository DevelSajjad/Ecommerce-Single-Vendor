
<?php $__env->startSection('slider'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="<?php echo e(route('admin.dashboard')); ?>">Starlight</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Slider List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-25p">Slider Image</th>
                        <th class="wd-20p">Slider Title</th>
                        <th class="wd-25p">Slider Description</th>
                        <th class="wd-10p">Status</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <img src="<?php echo e(asset($slide->image)); ?>" alt="" style="width: 100px"> </td>
                            <td> <?php echo e($slide->title_en); ?> </td>
                            <td><?php echo e($slide->description_en); ?></td>
                            <td>
                                <?php if($slide->status == 1): ?>
                                <span class="badge badge-pill badge-success">Active</span>
                                <?php else: ?>
                                <span class="badge badge-pill badge-danger"> Inactive </span>
                            <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(url('admin/slide-edit',$slide->id)); ?>" class="btn btn-info btn-sm"><i title="Edit Slider" class="fa fa-pencil"></i></a>
                                <a href="<?php echo e(url('/admin/delete-slide',$slide->id)); ?>" class="btn btn-danger btn-sm" id="delete" title="Slide Delete"><i class="fa fa-trash"></i></a>
                                <?php if($slide->status == 1): ?>
                                    <a href="<?php echo e(url('admin/slide-status-inactive',$slide->id)); ?>" class="btn btn-danger btn-sm" title="inactive"><i class="fa fa-arrow-up"></i></a>  
                                    <?php else: ?>
                                    <a href="<?php echo e(url('admin/slide-status-active',$slide->id)); ?>" class="btn btn-success btn-sm" title="active"><i class="fa fa-arrow-down"></i></a>
                                <?php endif; ?>
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
                            Add Slider
                        </div>
                        <form action="<?php echo e(route('add-slide')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Slide Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="slide_image">
                                <?php $__errorArgs = ['slide_image'];
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
                                <label class="form-control-label text-dark">Slide Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_en" value="<?php echo e(old('slide_title_en')); ?>" placeholder="Slide Title English">
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
                                <label class="form-control-label text-dark">Slide Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slide_title_bn" value="<?php echo e(old('slide_title_bn')); ?>" placeholder="Slide Title Bangla">
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
                                <textarea name="slide_desc_en" id="" cols="47" rows="3"></textarea>
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
                                <textarea name="slide_desc_bn" id="" cols="47" rows="3"></textarea>
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
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Slide" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/slider/slide.blade.php ENDPATH**/ ?>