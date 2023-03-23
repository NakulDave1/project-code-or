<?php $__env->startSection('content'); ?>
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">All Products</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <form class="mg-b-20">
                                    <div class="float-end my-1">
                                        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary me-2"><i class="fe fe-plus-circle"></i> Add Product</a>
                                        <a href="#" class="btn btn-danger delete_all" data-url="<?php echo e(route('product.delete.all')); ?>"><i class="fe fe-trash-2"></i> Clear All</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body pt-4">
                                <div class="grid-margin">
                                    <div class="table-responsive">
                                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                            <thead class="border-top">
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll" id="check_box">
                                                    </div>
                                                </th>
                                                <th>S.N.</th>
                                                <th>Image</th>
                                                <th>Product Detail</th>
                                                <th>Price</th>
                                                <th>Categories</th>
                                                <th>Featured</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input check_item" data-id="<?php echo e($item->id); ?>">
                                                        </div>
                                                    </td>
                                                    <td>#<?php echo e($loop->iteration); ?></td>
                                                    <td><img src="<?php echo e(asset($item->thumbnail_image)); ?>"
                                                             style="width: 100px;"
                                                             alt="<?php echo e($item->title); ?>">
                                                    </td>
                                                    <td>
                                                        <?php echo e(ucfirst($item->title)); ?><br>
                                                    </td>

                                                    <td>
                                                        <strong>Unit Price: </strong><?php echo e(get_settings('currency')); ?><?php echo e($item->unit_price); ?><br>
                                                        <strong>Selling Price: </strong><?php echo e(get_settings('currency')); ?><?php echo e($item->purchase_price); ?>

                                                    </td>

                                                    <td>
                                                        <?php echo e($item->category->title); ?>

                                                    </td>

                                                    <td>
                                                        <?php if($item->is_featured==1): ?>
                                                            <i class="fa fa-check-circle text-success" data-bs-toggle="tooltip" title="Yes">
                                                        <?php else: ?>
                                                            <i class="fa fa-times-circle text-danger" data-bs-toggle="tooltip" title="No">
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="mt-sm-1 d-block">
                                                            <span class="badge bg-<?php echo e($item->status=='active' ? 'success' : 'warning'); ?>-transparent rounded-pill text-<?php echo e($item->status=='active' ? 'success' : 'warning'); ?> p-2 px-3"><?php echo e(ucfirst($item->status)); ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="g-2 d-flex">
                                                            <a href="<?php echo e(route('product.edit',$item->id)); ?>" class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                            <form action="<?php echo e(route('product.destroy',$item->id)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <button type="submit" class="btn text-danger btn-sm show_confirm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-4 END -->

            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hpsystem/project/project-code/resources/views/backend/product/index.blade.php ENDPATH**/ ?>