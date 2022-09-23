<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Truck</h2>
                    </div>
                    <div class="card-body">
                        <div class="truck-card">
                            <small>Plate:</small>
                            <h5 class="plate"><?php echo e($truck->plate); ?></h5>
                            <small>Maker:</small>
                            <h5><?php echo e($truck->maker); ?></h5>
                            <small>MY:</small>
                            <h5><?php echo e($truck->make_year); ?></h5>
                            <small>Mechanic:</small>
                            <h5><?php echo e($truck->getMechanic->name); ?> <?php echo e($truck->getMechanic->surname); ?></h5>
                        </div>
                        <p><?php echo e($truck->mechanic_notices); ?></p>

                        <?php if($truck->photo): ?>
                            <div class="img">
                                <img src="<?php echo e($truck->photo); ?>" alt="photo">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/truck/show.blade.php ENDPATH**/ ?>