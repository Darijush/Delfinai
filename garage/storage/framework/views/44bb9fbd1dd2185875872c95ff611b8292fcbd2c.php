<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>New Mechanic</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('m_store')); ?>" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                              </div>
                              <div class="input-group">
                                <span class="input-group-text">Surname</span>
                                <input type="text" class="form-control" name="surname" value="<?php echo e(old('surname')); ?>">
                              </div>
                              <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/mechanic/create.blade.php ENDPATH**/ ?>