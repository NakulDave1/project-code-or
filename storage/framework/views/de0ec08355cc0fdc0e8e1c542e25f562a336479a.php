<?php $__env->startSection('content'); ?>
    <!-- Hero Slider Starts -->
    <?php if(count($banners) > 0): ?>
        <div class="home-slides owl-carousel owl-theme">
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="">
                    <div class="main-banner" style="background-image:url(<?php echo e(asset($banner->image)); ?>)">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="main-banner-content">
                                        <?php echo html_entity_decode($banner->content); ?>

                                        <div id="heroNav" class="hero-owl-nav"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    <!-- Hero Slider Ends -->
    <?php if($categories->count() > 0): ?>
        <section class="categories-area d-md-block pt-40">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Popular</span>
                    <h2>Categories</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="owl-carousel owl-theme categories-slides">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-category-box" data-slick-index="7" aria-hidden="false" tabindex="0"
                                        style="width: 166px;">
                                        <figure class=" img-hover-scale overflow-hidden">
                                            <a href="<?php echo e(route('product.category', $cat->slug)); ?>" tabindex="0"><img
                                                    src="<?php echo e($cat->banner ? asset($cat->banner) : Helper::DefaultImage()); ?>"
                                                    alt="category-image"></a>
                                        </figure>
                                        <h5><a href="<?php echo e(route('product.category', $cat->slug)); ?>"
                                                tabindex="0"><?php echo e(ucfirst($cat->title)); ?></a></h5>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if($featured_product->count() > 0): ?>
        <section class="products-area pt-20">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Featured</span>
                    <h2>Products
                        <a href="<?php echo e(route('viewAllProducts','featured')); ?>" class="view-all">View All</a>
                    </h2>
                </div>
                <div class="owl-carousel owl-theme products-slides home_products">
                    <?php $__currentLoopData = $featured_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('frontend.partials._single_product', compact('item'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if($featured_category): ?>
        <!-- Occasion Dresses -->
        <section class="products-area pt-20">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Shop Now</span>
                    <h2><?php echo e(ucfirst($featured_category->title)); ?>

                        <a href="<?php echo e(route('product.category', $featured_category->slug)); ?>" class="view-all">View All</a>
                    </h2>
                </div>
                <div class="owl-carousel owl-theme products-slides">
                    <?php $__currentLoopData = $featured_category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('frontend.partials._single_product', compact('item'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php if($promo_banners): ?>
        <section class="products-area">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-bg wow fadeIn animated animated animated"
                            style="background-image: url(<?php echo e(asset($promo_banners->image)); ?>); visibility: visible;background-position: center;
                                 background-size: cover;
                                 padding: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if($latest_products->count() > 0): ?>
        <section class="products-area pt-20">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Latest</span>
                    <h2>Products
                        <a href="<?php echo e(route('viewAllProducts','latest')); ?>" class="view-all">View All</a>
                    </h2>
                </div>
                <div class="owl-carousel owl-theme products-slides home_products">
                    <?php $__currentLoopData = $latest_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('frontend.partials._single_product', compact('item'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .offer-content p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            margin-bottom: 24px;
            height: 54px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hpsystem/project/project-code/resources/views/frontend/index.blade.php ENDPATH**/ ?>