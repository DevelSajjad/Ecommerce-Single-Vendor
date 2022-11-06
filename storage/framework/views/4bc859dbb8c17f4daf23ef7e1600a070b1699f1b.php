
<?php $__env->startSection('manage-product'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="<?php echo e(route('admin.dashboard')); ?>">Admin Dashboard</a>
            <span class="breadcrumb-item ">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                    <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Product List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                        <th class="wd-20p">Product Image</th>
                        <th class="wd-20p">Product Name </th>
                        <th class="wd-10p">Product Quantity </th>
                        <th class="wd-20p">Product Price</th>
                        <th class="wd-5p">Discount Price</th>
                        <th class="wd-5p">Status</th>
                        <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <img src="<?php echo e(asset($products->product_thumbnail)); ?>" alt="" style="width: 100px"> </td>
                            <td> <?php echo e($products->product_name_en); ?> </td>
                            <td><?php echo e($products->product_qty); ?></td>
                            <td><?php echo e($products->selling_price); ?></td>
                            <td>
                                <?php if($products->discount_price == null): ?>
                                    <span class="text-dark"> No Discount</span>
                                    <?php else: ?>  
                                    <?php
                                        $amount = $products->selling_price - $products->discount_price;
                                        $per = round(($amount/$products->selling_price) * 100);
                                        $disPer = 100 - $per;
                                    ?>
                                    <span> <?php echo e($disPer); ?>%</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($products->status == 1): ?>
                                    <span class="badge badge-pill badge-success">Active</span>
                                    <?php else: ?>
                                    <span class="badge badge-pill badge-danger"> Inactive </span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(url('admin/edit-product',$products->id)); ?>" class="btn btn-info btn-sm"><i title="Edit Product" class="fa fa-pencil"></i></a>
                                <a href="<?php echo e(url('/admin/delete-product',$products->id)); ?>" class="btn btn-danger btn-sm" id="delete" title="Product Delete"><i class="fa fa-trash"></i></a>
                                <?php if($products->status == 1): ?>
                                    <a href="<?php echo e(url('admin/status-inactive',$products->id)); ?>" class="btn btn-danger btn-sm">Inactive</a>  
                                    <?php else: ?>
                                    <a href="<?php echo e(url('admin/status-active',$products->id)); ?>" class="btn btn-success btn-sm">Active</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\BITM\wamp\www\Laravel\Ecom\Ecommerce-Single-Vendor\resources\views/admin/product/manage.blade.php ENDPATH**/ ?>