<!-- Top Header Bar Starts -->
<div class="top-header d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <ul class="header-contact-info">
                    <li class="text-uppercase">Express Delivery </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                <ul class="header-top-menu">
                    <li>
                        <div class="content-wrapper d-inline-block">
                            <i class='bx bx-phone-call'></i>
                            <span class="text-uppercase mr-1">Toll Free:</span>
                            <a href="tel:<?php echo e(get_settings('phone')); ?>">
                                <?php echo e(get_settings('phone')); ?>

                            </a>
                        </div>
                    </li>
                    <li>
                        <i class='bx bx-time'></i>
                        <span class=""><?php echo e(strtoupper(get_settings('office_time'))); ?></span>
                    </li>
                    <li>
                        <a target="_blank" href="" class="btn btn-info py-2 px-3" style="border-radius: 30px;">Buy In 49$</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Top Header Bar Ends -->

<!-- Bottom Header Starts -->
<div class="bottom-header d-none d-lg-block py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 d-flex align-items-center justify-content-between">
            <?php
                Helper::currency_load();
                $currency_code = session('currency_code');
                $currency_symbol= session('currency_symbol');
                $currency_img= session('flag_path');

                if ($currency_symbol=="")
                {
                    $system_default_currency_info = session('system_default_currency_info');
                    $currency_symbol = $system_default_currency_info->symbol;
                    $currency_code = $system_default_currency_info->code;
                    $currency_img = $system_default_currency_info->flag_path;
                }
            ?>


                <!-- Search Form -->
                <div class="float-right">
                    <form class="search-form" data-toggle="validator" action="<?php echo e(route('search.products')); ?>" method="GET">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="bg-white border-0 input-group-text"> <i
                                        class='bx bx-search'></i> </button>
                            </div>
                            <input name="q" type="text" class="input-search border-0 search-bar-input" placeholder="Search by product name.."
                                   required autocomplete="off">
                        </div>
                        <div id="validator-search" class="form-result"></div>
                    </form>
                </div>
            </div>

            <!-- Logo Area  -->
            <div class="col-lg-4 text-center">
                <a class="logo-wrapper" href="<?php echo e(route('home')); ?>">
                    <?php if(get_settings('logo') ==null): ?>
                        <img src="<?php echo e(\Helper::defaultLogo()); ?>" alt="logo">
                    <?php else: ?>
                        <img src="<?php echo e(asset(get_settings('logo'))); ?>" alt="logo">
                    <?php endif; ?>
                </a>
            </div>
            <!-- Logo Area Ends -->

            <!-- Right Widgets -->
            <div class="col-lg-4">
                <ul class="header-widgets-menu">
                    <li class="">

                    </li>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="">
                            <a href="<?php echo e(route('login')); ?>">
                                <img src="<?php echo e(asset('frontend/assets/images/icons/login.svg')); ?>" alt="Login Icon" class="img-icon">
                                <?php
                                    $name=explode(' ',auth()->user()->full_name);
                                ?>
                                <span><?php echo e(auth()->user()->username ?? ucfirst($name[0])); ?></span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="">
                            <a href="<?php echo e(route('login')); ?>">
                                <img src="<?php echo e(asset('frontend/assets/images/icons/login.svg')); ?>" alt="Login Icon" class="img-icon">
                                <span>Login</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="">
                        <a href="<?php echo e(route('cart')); ?>" class="cart-link" >
                            <img src="<?php echo e(asset('frontend/assets/images/icons/shoppingBag.svg')); ?>" alt="Shopping Bag Icon" class="img-icon">
                            <span class="count-badge"><?php echo e(session()->has('cart') ? count(session()->get('cart')) : 0); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Right Widgets Ends-->

        </div>
    </div>
</div>
<!-- Bottom Header Ends -->
<?php /**PATH /home/hpsystem/project/project-code/resources/views/frontend/layouts/header.blade.php ENDPATH**/ ?>