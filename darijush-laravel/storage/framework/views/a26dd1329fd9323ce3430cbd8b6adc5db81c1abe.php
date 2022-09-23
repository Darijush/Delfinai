<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Post</h2>
                    </div>
                    <div class="card-body">
                        <h5><?php echo e($blog->title); ?></h5>
                        <p><?php echo e($blog->post); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\darijush-laravel\resources\views/blog/show.blade.php ENDPATH**/ ?>