<footer class="footer-area">
    <div class="footer-menu-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 d-block d-md-none">
                    <div class="single-footer-widget footer-contact">
                        <ul class="social-link">
                            <li><a href="<?php echo e(get_settings('facebook_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="<?php echo e(get_settings('twitter_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="<?php echo e(get_settings('instagram_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </li>
                            <li><a href="<?php echo e(get_settings('youtube_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-youtube'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-footer-widget">
                        <a class="logo-wrapper d-none d-md-block" href="<?php echo e(route('home')); ?>">
                            <?php if(get_settings('logo')): ?>
                                <img src="<?php echo e(asset('frontend/assets/images/logo.png')); ?>" alt="logo">
                            <?php else: ?>
                                <img src="<?php echo e(asset(get_settings('logo'))); ?>" alt="logo">
                            <?php endif; ?>
                        </a>
                        <h6 class="d-none d-md-flex font-weight-bold mt-5">Subscribe</h6>
                        <h6 class="d-flex d-md-none font-weight-bold mt-5">Subscribe Newsletter</h6>
                        <div class="footer-newsletter-box mt-3">

                            <div class="input-group mb-3">
                                <input type="email" class="form-control input-newsletter"
                                       placeholder="Enter Your Email" name="s_email" required autocomplete="off">
                                <div class="input-group-prepend">
                                    <button type="button" class="input-group-text subscribe-btn"> <i
                                            class='bx bx-right-arrow-alt'></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-footer-widget pl-4 footer__about-us">
                        <h3>About Us</h3>
                        <div class="d-flex align-items-center">
                            <ul class="customer-support">
                                <li><a href="<?php echo e(route('about.us')); ?>">About <?php echo e(env('APP_NAME')); ?></a></li>
                                <li><a href="<?php echo e(route('frontend.return.policy')); ?>">Return Policy</a></li>
                                <li><a href="<?php echo e(route('frontend.privacy.policy')); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo e(route('frontend.terms.conditions')); ?>">Terms and Conditions</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-none d-md-block">
                    <div class="single-footer-widget footer-customer-center">
                        <h3>Customer Center</h3>
                        <ul class="customer-support">
                            <li><a href="<?php echo e(route('contact.us')); ?>" class="d-inline-block d-none">Contact Us</a></li>
                            <li><a href="<?php echo e(route('contact.us')); ?>" class="d-md-none d-inline-block">Contact us</a></li>
                            <li><a href="<?php echo e(route('frontend.cancellation.policy')); ?>">Cancellation Policy</a></li>
                            <li><a href="<?php echo e(route('frontend.faq')); ?>">FAQ</a></li>
                            <li><a href="<?php echo e(route('frontend.shipping.payment')); ?>">Shipping & Payment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-none d-md-block">
                    <div class="single-footer-widget footer-contact">
                        <h3>Contact Us</h3>
                        <ul class="footer-contact-info">
                            <li class="d-flex"><i class='bx bx-phone-call pr-1'></i>
                                <p >
                                    <span><?php echo e(get_settings('phone')); ?></span>
                                    <small>(toll free)</small>
                                </p>
                            </li>
                        </ul>
                        <ul class="footer-contact-info">
                            <li class="d-flex">
                                <i class='bx bx-envelope pr-1'></i>
                                <p>
                                    <span><?php echo e(get_settings('email')); ?></span>
                                </p>
                            </li>
                        </ul>
                        <ul class="footer-contact-info">
                            <li class="d-flex">
                                <i class='bx bx-map pr-1'></i>
                                <p>
                                    <span><?php echo e(get_settings('address')); ?></span>
                                </p>
                            </li>
                        </ul>
                        <h6 class="font-weight-bold mt-4">Follow us</h6>
                        <ul class="social-link">
                            <li><a href="<?php echo e(get_settings('facebook_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="<?php echo e(get_settings('twitter_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="<?php echo e(get_settings('instagram_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </li>
                            <li><a href="<?php echo e(get_settings('youtube_url')); ?>" class="d-block" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <ul class="payment-types">
                        <li><a href="javascript:;" ><img width="100px" src="<?php echo e(asset('frontend/assets/images/payments/paypal.svg')); ?>" alt="image"></a>
                        </li>
                        <li><a href="javascript:;" ><img width="100px" src="<?php echo e(asset('frontend/assets/images/payments/stripe.svg')); ?>" alt="image"></a>
                        </li>
                        <li><a href="javascript:;" ><img width="100px" src="<?php echo e(asset('frontend/assets/images/payments/razor.png')); ?>"
                                                             alt="image"></a></li>
                        <li><a href="javascript:;" ><img width="100px" src="<?php echo e(asset('frontend/assets/images/payments/cod.jpg')); ?>"
                                                             alt="image"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p><?php echo e(get_settings('copyright_text')); ?> </p>
    </div>
</footer>

<?php $__env->startSection('scripts'); ?>

    

    <script>
        'use strict';
        (function($){
            $(document).on('click','.subscribe-btn' , function(){
                var email    = $('input[name="s_email"]').val();
                $.ajax({
                    url:"<?php echo e(route('subscribe')); ?>",
                    method:"POST",
                    data:{email:email,
                        _token:"<?php echo e(csrf_token()); ?>"
                    },
                    success:function(response)
                    {
                        if(response.status) {
                            $('input[name="s_email"]').val(" ");
                            $.notify({
                                title:'<strong>Success: </strong>',
                                message:response['msg'],
                            },{
                                type: 'info',
                                allow_dismiss: false,
                                delay: 2800,
                                animate: {
                                    enter: 'animated flipInY',
                                    exit: 'animated flipOutX'
                                },
                                onShow: function() {
                                    this.css({'width':'auto','height':'auto'});
                                },
                            });
                        }else{
                            $.notify({
                                title:'<strong>Sorry: </strong>',
                                message:response['msg'],
                            },{
                                type: 'danger',
                                allow_dismiss: false,
                                delay: 2800,
                                animate: {
                                    enter: 'animated flipInY',
                                    exit: 'animated flipOutX'
                                },
                                onShow: function() {
                                    this.css({'width':'auto','height':'auto'});
                                },
                            })
                        }
                    }
                });

            });
        })(jQuery)
    </script>


<?php $__env->stopSection(); ?>

<?php /**PATH /home/hpsystem/project/project-code/resources/views/frontend/layouts/footer.blade.php ENDPATH**/ ?>