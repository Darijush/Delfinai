<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Mechanic</h2>
                    </div>
                    <div class="card-body">
                        <div class="mechanic">
                            <h5><?php echo e($mechanic->name); ?></h5>
                            <h5><?php echo e($mechanic->surname); ?></h5>
                        </div>
                        <ul class="list-group">
                            <?php $__empty_1 = true; $__currentLoopData = $mechanic->getTrucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li class="list-group-item">
                                    <div class="truck-list">
                                        <div class="content-1">
                                            <h5> Plate: <?php echo e($truck->plate); ?></h5>
                                            <p> Maker: <?php echo e($truck->maker); ?></p>
                                            <p> MY: <?php echo e($truck->make_year); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li class="list-group-item">No trucks found</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/mechanic/show.blade.php ENDPATH**/ ?>