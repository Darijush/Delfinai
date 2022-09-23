<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit truck</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('t_update', $truck)); ?>" method="POST" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Maker</span>
                                <input type="text" class="form-control" name="maker"
                                    value="<?php echo e(old('maker', $truck->maker)); ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Plate</span>
                                <input type="text" class="form-control" name="plate"
                                    value="<?php echo e(old('plate', $truck->plate)); ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Make year</span>
                                <input type="text" class="form-control" name="make_year"
                                    value="<?php echo e(old('make_year', $truck->make_year)); ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Mechanic notices</span>
                                <textarea class="form-control" name="mechanic_notices"><?php echo e(old('mechanic_notices', $truck->mechanic_notices)); ?></textarea>
                            </div>
                            <select class="form-select mb-3" name="mechanic_id">
                                <option value="0">Choose mechanic for service</option>
                                <?php $__currentLoopData = $mechanics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mechanic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($mechanic->id); ?> " <?php if($mechanic->id == old('mechanic_id', $truck->mechanic_id)): ?> selected <?php endif; ?>>
                                        <?php echo e($mechanic->name); ?> <?php echo e($mechanic->surname); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($truck->photo): ?>
                                <div class="img">
                                    <img src="<?php echo e($truck->photo); ?>" alt="photo">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="del-photo"
                                            name="delete_photo">
                                        <label class="form-check-label" for="del-photo">
                                            Delete photo
                                        </label>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload photo</label>
                                <input class="form-control" type="file" name="photo">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/truck/edit.blade.php ENDPATH**/ ?>