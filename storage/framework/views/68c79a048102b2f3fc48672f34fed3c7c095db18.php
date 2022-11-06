
<?php $__env->startSection('subcategory'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="<?php echo e(route('brands')); ?>">Dashboard</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Subcategory List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-30p">Category Name</th>
                        <th class="wd-25p">Subcategory Name EN</th>
                        <th class="wd-25p">Subcategory Name BN</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <tr>
                            <td> <?php echo e($subcat->cat->category_name_en); ?> </td>
                            <td> <?php echo e($subcat->subcategory_name_en); ?> </td>
                            <td> <?php echo e($subcat->subcategory_name_bn); ?> </td>
                            <td>
                                <a href="<?php echo e(url('admin/editSubCategory',$subcat->id)); ?>" class="btn btn-info btn-sm"><i title="Edit SubCategory" class="fa fa-pencil"></i></a>
                                <a href="<?php echo e(url('admin/deleteSubCategory',$subcat->id)); ?>" class="btn btn-danger btn-sm" id="delete" title="Delete SubCategory"><i class="fa fa-trash"></i></a>
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
                            Add Sub-Category
                        </div>
                        <form action="<?php echo e(route('add-subcategory')); ?>" method="post">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" name="category_id" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>" ><?php echo e(ucwords($cat->category_name_en)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['category_id'];
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
                                <label class="form-control-label text-dark">Category Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subcategory_name_en" value="<?php echo e(old('subcategory_name_en')); ?>" placeholder="SubCategory Name English">
                                <?php $__errorArgs = ['subcategory_name_en'];
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
                                <label class="form-control-label text-dark">SubCategory Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subcategory_name_bn" value="<?php echo e(old('subcategory_name_bn')); ?>" placeholder="SubCategory Name Bangla">
                                <?php $__errorArgs = ['subcategory_name_bn'];
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
                                <input class="form-control btn btn-outline-primary" type="submit" value="Add Subcategory" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/subcategory/subcategory.blade.php ENDPATH**/ ?>