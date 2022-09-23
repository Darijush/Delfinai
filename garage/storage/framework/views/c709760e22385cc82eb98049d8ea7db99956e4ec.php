<?php $__env->startSection('content'); ?>
    <div class="container ">
        <div class="row ">
            <div class="col-5">
                <?php echo $__env->make('breakdown.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-7" id="breakdowns-list">
                list
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/breakdown/index.blade.php ENDPATH**/ ?>