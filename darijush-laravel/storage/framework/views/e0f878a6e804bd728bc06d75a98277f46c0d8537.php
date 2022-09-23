<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Posts</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li class="list-group-item">
                                    <div class="post-list">
                                        <div class="content">
                                            <h2><?php echo e($blog->title); ?></h2>
                                            <?php $__currentLoopData = $c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h3><?php echo e($l); ?></h3>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <div class="buttons">
                                            <a href="<?php echo e(route('show', $blog)); ?>" class="btn btn-info">Show</a>
                                            <a href="<?php echo e(route('edit', $blog)); ?>" class="btn btn-primary">Edit</a>
                                            <form action="<?php echo e(route('delete',$blog)); ?>" method="POST">
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn btn-secondary">Delete</button>
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li class="list-group-item">no posts to show</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\darijush-laravel\resources\views/blog/index.blade.php ENDPATH**/ ?>