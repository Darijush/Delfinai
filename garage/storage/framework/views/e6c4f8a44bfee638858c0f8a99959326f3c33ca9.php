<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h2>New Truck</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('t_store')); ?>" method="POST" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Maker</span>
                                <input type="text" class="form-control" name="maker" value="<?php echo e(old('maker')); ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Plate</span>
                                <input type="text" class="form-control" name="plate" value="<?php echo e(old('plate')); ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Make year</span>
                                <input type="text" class="form-control" name="make_year" value="<?php echo e(old('make_year')); ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Mechanic notices</span>
                                <textarea class="form-control" name="mechanic_notices"><?php echo e(old('mechanic_notices')); ?></textarea>
                            </div>
                            <select class="form-select mb-3" name="mechanic_id">
                                <option value="0">Choose mechanic for service</option>
                                <?php $__currentLoopData = $mechanics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mechanic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($mechanic->id); ?>" <?php if($mechanic->id == old('mechanic_id')): ?> selected <?php endif; ?>><?php echo e($mechanic->name); ?> <?php echo e($mechanic->surname); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload photo</label>
                                <input class="form-control" type="file" name="photo">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/truck/create.blade.php ENDPATH**/ ?>