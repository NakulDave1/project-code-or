<div class="navbar-area">
    <!-- Responsive Nav Menu for Mobile -->
    <div class="responsive-nav">
        <div class="container">
            <div class="row align-items-center justify-content-center position-relative">
                <!-- Search Form For Mobile Menu-->
                <div class="search-container">
                    <form action="<?php echo e(route('search.products')); ?>" method="GET">
                        <input type="text" name="q" id="search-terms" autocomplete="off" placeholder="Search dresses..." />
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center justify-content-between">
                    <div class="humberger__open" data-toggle="modal" data-target="#mobileMenu">
                        <i class="ri-menu-2-line"></i>

                    </div>
                    <div class="search-link">
                        <a href="javascript:void(0)" class="search-toggle">
                            <i class="ri-search-line"></i>
                        </a>
                    </div>

                </div>

                <div class="col-6 col-md-6 text-center">
                    <div class="logo">
                        <a href="<?php echo e(route('home')); ?>">
                            <?php if(get_settings('logo')): ?>
                                <img src="<?php echo e(\Helper::defaultLogo()); ?>" alt="logo">
                            <?php else: ?>
                                <img src="<?php echo e(asset(get_settings('logo'))); ?>" class="responsive-logo">
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center justify-content-between">
                    <a href="tel:<?php echo e(get_settings('phone')); ?>" class="contact-link">
                        <i class='bx bx-phone-call'></i>
                    </a>
                    <a href="<?php echo e(route('cart')); ?>" class="cart-link">
                        <img src="<?php echo e(asset('frontend/assets/images/icons/shoppingBag.svg')); ?>" alt="Shopping Bag Icon" class="img-icon">
                        <span class="count-badge"><?php echo e(session()->has('cart') ? count(session()->get('cart')) : 0); ?></span>
                    </a>
                </div>
            </div>
            <div class="responsive-menu d-none">
            </div>
        </div>
    </div>
    <!-- Responsive Nav Menu for Mobile Ends -->

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <?php
                            $categories=\App\Models\Category::with('subcategories')->where(['status'=>'active','is_menu'=>1,'level'=>0,'parent_id'=>0])->limit(6)->orderBy('id','DESC')->get()
                        ?>
                        <?php if(count($categories)>0): ?>
                            <?php $__currentLoopData = $categories->sortBy('order'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('product.category',$cat->slug)); ?>" class="nav-link"><?php echo e(ucfirst($cat->title)); ?>

                                        <?php if($cat->subcategories->count()>0): ?>
                                            <i class='bx bx-chevron-down'></i>
                                        <?php endif; ?>
                                    </a>
                                    <?php if($cat->subcategories->count()>0): ?>
                                    <ul class="dropdown-menu">
                                        <?php $__currentLoopData = $cat->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item"><a href="<?php echo e(route('product.category',$subCat->slug)); ?>" class="nav-link "><?php echo e(ucfirst($subCat->title)); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH /home/hpsystem/project/project-code/resources/views/frontend/layouts/nav.blade.php ENDPATH**/ ?>