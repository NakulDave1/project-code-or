
<?php if(Session::has('error')): ?>

    $.notify({
    title:'<strong>Oops:</strong>',
    message:"<?php echo e(session()->get('error')); ?>"
    },
    {
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
    });
    <?php
        \Illuminate\Support\Facades\Session::forget('error');
    ?>
<?php endif; ?>

<?php if(Session::has('info')): ?>

    $.notify({
    title:'<strong>Warning:</strong>',
    message:"<?php echo e(session()->get('info')); ?>"
    },
    {
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
    },
    {
    type:'warning'
    });
    <?php
        \Illuminate\Support\Facades\Session::forget('info');
    ?>
<?php endif; ?>
<?php /**PATH /home/hpsystem/project/project-code/resources/views/layouts/notification.blade.php ENDPATH**/ ?>