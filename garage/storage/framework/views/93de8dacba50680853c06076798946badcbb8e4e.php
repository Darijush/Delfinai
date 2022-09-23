<div class="container ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>BreakDowns</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php $__empty_1 = true; $__currentLoopData = $breakdowns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breakdown): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="list-group-item">
                                <div class="truck-list">
                                    <div class="content-1">
                                        <h2>  <?php echo e($breakdown->title); ?></h2>
                                        <h5> Status: <?php echo e($breakdown->status); ?></h5>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="list-group-item">No breakdowns found</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/breakdown/list.blade.php ENDPATH**/ ?>