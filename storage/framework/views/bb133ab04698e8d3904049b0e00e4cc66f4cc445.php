<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0"><?php echo e(get_settings('copyright_text')); ?>  Version : <?php echo e(get_settings('system_version')); ?></p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<?php echo $__env->make('backend.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/hpsystem/project/project-code/resources/views/backend/layouts/footer.blade.php ENDPATH**/ ?>