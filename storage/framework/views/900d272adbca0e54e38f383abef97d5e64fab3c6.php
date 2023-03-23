<script src="<?php echo e(asset('frontend/assets/js/jquery.min.js')); ?>"></script>

<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script src="<?php echo e(asset('frontend/assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/magnific-popup.min.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/assets/js/bootstrap-notify.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/assets/js/parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/rangeSlider.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/meanmenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/sticky-sidebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/wow.min.js')); ?>"></script>


<script src="<?php echo e(asset('frontend/assets/js/ajaxchimp.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js" integrity="sha512-6vo59lZMHB6GgEySnojEnfhnugP7LR4qm6akxptNOw/KW+i9o9MK4Gaia8f/eJATjAzCkgN3CWlIHWbVi2twpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/assets/javascript/main.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/javascript/accordion.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/javascript/slickSlider.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/assets/select2/js/select2.min.js')); ?>"></script>


<script src="<?php echo e(asset('js/share.js')); ?>"></script>




<?php echo $__env->yieldPushContent('scripts'); ?>

<script>
    function currency_change(currency_code) {
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route('currency.change')); ?>',
            data: {
                _token:"<?php echo e(csrf_token()); ?>",
                currency_code: currency_code
            },
            beforeSend:function () {

                $('#loading').show();
            },
            complete:function () {
                $('#loading').hide();
            },
            success: function (response) {
                if(response['status']){
                    location.reload();

                }
                else{
                    alert('Opps!');
                }
            }
        });
    }
</script>



<script>
    $(window).on("scroll", function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $(".go-top").addClass("active");
        if (scrolled < 300) $(".go-top").removeClass("active");
    });
    $(".go-top").on("click", function () {
        $("html, body").animate({ scrollTop: "0" }, 500);
        console.log('top');
    });
</script>

<script>
    if (window.location.hash == "#_=_"){
        window.location.href = "";
    }
</script>

<script>
    $('.add_to_wishlist').click(function () {
        var product_id=$(this).data('product-id');
        var token="<?php echo e(csrf_token()); ?>";
        var url="<?php echo e(route('wishlist.store')); ?>";
        // alert(product_id);
        $.ajax({
            url:url,
            dataType:"JSON",
            type:"POST",
            data:{
                _token:token,
                product_id:product_id,
            },
            beforeSend:function () {

                $('#loading').show();
            },
            complete:function () {

                $('#loading').hide();

            },
            success:function (response) {


                if(response.status==true){
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
                    $('#add_to_wishlist_'+product_id).html(' <i class="bx bxs-heart wishlist-icon" style="color:#FF757B"></i>')


                }
                else if(response.status=='present'){
                    $.notify({
                        title:'<strong>Oops: </strong>',
                        message:response['msg'],
                    },{
                        type: 'warning',
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
                else{
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
        })

    })
</script>
<script>
    <?php echo $__env->make('layouts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>


<?php /**PATH /home/hpsystem/project/project-code/resources/views/frontend/layouts/script.blade.php ENDPATH**/ ?>