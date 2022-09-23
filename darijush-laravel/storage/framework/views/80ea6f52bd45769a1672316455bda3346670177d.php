<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Post</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('edit', $blog)); ?>" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Title</span>
                                <input type="text" class="form-control" name="title"
                                    value="<?php echo e(old('title', $blog->title)); ?>">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Post</span>
                                <textarea class="form-control textarea" name="post"><?php echo e(old('post',$blog->post)); ?></textarea>
                            </div>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <button type="submit" class="btn btn-primary">SAAAVE!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\darijush-laravel\resources\views/blog/edit.blade.php ENDPATH**/ ?>