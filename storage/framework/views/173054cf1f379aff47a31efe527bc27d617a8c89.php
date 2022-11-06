
<?php $__env->startSection('subsubcategory'); ?>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Update Sub-Sub-Category
                        </div>
                        <form action="<?php echo e(route('Update-Sub-Sub')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($subsubcat->id); ?>" name="subsubcat">
                            <div class="form-group">
                                <label class="form-control-label text-dark">Select Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="category_id" name="category_id" data-placeholder="Choose one">
                                    <option value=""> Choose One</option>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>" <?php echo e(($cat->id == $subsubcat->category_id) ? 'selected' : ''); ?> ><?php echo e(ucwords($cat->category_name_en)); ?></option>
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
                                <label class="form-control-label text-dark">Select Sub Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" id="subcategory_id" name="subcategory_id" data-placeholder="Choose one">
                                    <option value="" >Choose One </option>
                                </select>
                                <?php $__errorArgs = ['subcategory_id'];
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
                                <label class="form-control-label text-dark">Sub Sub Category Name EN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subsubcategory_name_en" value="<?php echo e($subsubcat->subsubcategory_name_en); ?>" placeholder=" Sub-SubCategory Name English">
                                <?php $__errorArgs = ['subsubcategory_name_en'];
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
                                <label class="form-control-label text-dark">Sub Sub Category Name BN: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="subsubcategory_name_bn" value="<?php echo e($subsubcat->subsubcategory_name_bn); ?>" placeholder="Sub-SubCategory Name Bangla">
                                <?php $__errorArgs = ['subsubcategory_name_bn'];
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
                                <input class="form-control btn btn-outline-primary" type="submit" value="Update Sub Sub category" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('/')); ?>backend/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#category_id").on('change',function(){
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url: "<?php echo e(url('admin/subcategory/ajax')); ?>/"+category_id,
                    type: 'GET',
                    dataType: "json",
                    success: function(data){
                        var d = $("#subcategory_id").empty();
                        $.each(data,function(key, value){
                            $("#subcategory_id").append('<option value="'+value.id+'"> '+value.subcategory_name_en+ '</option>')
                        });
                    }
                });
            }else{  
                alert('danger');
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/subSubCategory/edit_sub_sub.blade.php ENDPATH**/ ?>