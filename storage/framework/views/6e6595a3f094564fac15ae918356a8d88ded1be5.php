<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Login | <?php echo e(get_settings('site_title')); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(asset('backend/assets')); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?php echo e(asset('backend/assets')); ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/assets')); ?>/css/dark-style.css" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/assets')); ?>/css/transparent-style.css" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets')); ?>/css/skin-modes.css" rel="stylesheet" />

    <!-- SINGLE-PAGE CSS -->
    <link href="<?php echo e(asset('backend/assets')); ?>/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

    <!-- P-scroll bar css-->
    <link href="<?php echo e(asset('backend/assets')); ?>/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(asset('backend/assets')); ?>/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('backend/assets')); ?>/colors/color1.css" />

    
    <link href="<?php echo e(asset('css/iziToast.min.css')); ?>" rel="stylesheet">
</head>

<body>

<!-- BACKGROUND-IMAGE -->
<div class="login-img">

    <!-- GLOABAL LOADER -->
    <div id="global-loader">
        <img src="<?php echo e(asset('backend')); ?>/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOABAL LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- Theme-Layout -->

            <!-- CONTAINER OPEN -->


            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form action="<?php echo e(route('admin.login.submit')); ?>" method="post" class="login100-form validate-form ">
                        <?php echo csrf_field(); ?>
                        <div class="col col-login mx-auto mt-4 pb-5">
                            <div class="text-center">
                                <a href="<?php echo e(url('/')); ?>">
                                    <img src="<?php echo e(asset(get_settings('logo'))); ?>" class="header-brand-img" alt="<?php echo e(get_settings('site_title')); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active">
                                        <div class="wrap-input100 validate-input input-group">
                                            <a href="javascript:;" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" name="email" type="email" placeholder="Test@gmail.com"  value="<?php echo e(!demoCheck() ? 'admin@gmail.com' : ''); ?>">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="invalid-feedback d-block">
                                                    <strong><?php echo e($message); ?></strong>
                                                </p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:;" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" type="password" name="password"  placeholder="*********" value="<?php echo e(!demoCheck() ? 'admin123' : ''); ?>">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="invalid-feedback d-block">
                                                <strong><?php echo e($message); ?></strong>
                                            </p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="wrap-input100 validate-input input-group">
                                            <div class="checkbox p-0">
                                                <input id="checkbox1" type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?> name="remember">
                                                <label class="text-muted" for="checkbox1" >Remember password</label>
                                            </div>
                                        </div>

                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>
<!-- BACKGROUND-IMAGE CLOSED -->

<!-- login js-->

<!-- JQUERY JS -->
<script src="<?php echo e(asset('backend/assets')); ?>/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="<?php echo e(asset('backend/assets')); ?>/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo e(asset('backend/assets')); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SHOW PASSWORD JS -->
<script src="<?php echo e(asset('backend/assets')); ?>/js/show-password.min.js"></script>

<!-- GENERATE OTP JS -->
<script src="<?php echo e(asset('backend/assets')); ?>/js/generate-otp.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="<?php echo e(asset('backend/assets')); ?>/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- Color Theme js -->
<script src="<?php echo e(asset('backend/assets')); ?>/js/themeColors.js"></script>

<script src="<?php echo e(asset('js/iziToast.min.js')); ?>"></script>

<!-- CUSTOM JS -->
<script src="<?php echo e(asset('backend/assets')); ?>/js/custom.js"></script>
<!-- Plugin used-->
<?php echo $__env->make('layouts.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /home/hpsystem/project/project-code/resources/views/auth/admin/login.blade.php ENDPATH**/ ?>