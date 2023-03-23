<!doctype html>
<html lang="">

<head>
    <?php echo $__env->make('frontend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        @media  screen and (max-width: 767.99px) {
            #loading .loader{
                left: 23% !important;
                top: 32% !important;
            }
        }
        .js-cookie-consent{
            position: fixed;
            bottom: 60px;
            left: 20px;
            right: 20px;
            max-width: 310px;
            z-index: 1070;
            background: #55a2a6;
            color: white;
            padding: 14px 16px;
            border-radius: 4px;
            font-size: 14px;

        }
        @media(max-width:530px){
            .js-cookie-consent{
                display:none;
            }
            .footer-area{
                margin-bottom: 26px;
            }
            .banner-bottom-area{
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                z-index: 99999;
                height: auto;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="loading" style="display: none;">
                <div class="loader" style="position: fixed;z-index: 9999; left: 40%;top: 37% ;width: 100%">
                    <img width="200" src="<?php echo e(Helper::loader()); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<!----====== Header Starts====== --->

<?php echo $__env->make('frontend.partials._leftsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!----====== Header Starts====== --->

<div id="header">
    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div id="nav">
    <?php echo $__env->make('frontend.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php echo $__env->yieldContent('content'); ?>
<div class="modal fade add-to-cart-modal" id="addedToCart">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative m-3">
            <div class="c-preloader text-center">
                <i class="las la-spinner la-spin la-3x"></i>
            </div>
            <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="bx bx-x"></span>
            </button>
            <div id="addToCart-modal-body">

            </div>
        </div>
    </div>
</div>

<!-- Footer Starts -->
<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Footer Ends -->
<?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="go-top"><i class="bx bx-chevron-up"></i></div>

<!-- CDN Links -->
<?php echo $__env->make('frontend.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /home/hpsystem/project/project-code/resources/views/frontend/layouts/master.blade.php ENDPATH**/ ?>