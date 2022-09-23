<?php $__env->startSection('content'); ?>
    <div class="container text-center --content">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Trucks</h2>
                        <form action="<?php echo e(route('t_index')); ?>" method="get">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="mech" class="form-select mt-1">
                                                        <option value="0">All</option>
                                                        <?php $__currentLoopData = $mechanics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mechanic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($mechanic->id); ?>"
                                                                <?php if($mechanic->id == $mech): ?> selected <?php endif; ?>>
                                                                <?php echo e($mechanic->name); ?>

                                                                <?php echo e($mechanic->surname); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="s"
                                                            value="<?php echo e($s); ?>">
                                                        <button type="submit" class="input-group-text">Search</button>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <a href="<?php echo e(route('t_index')); ?>" class="btn btn-secondary m-1">Reset</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php $__empty_1 = true; $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li class="list-group-item">
                                    <div class="trucks-list">
                                        <div class="content">
                                            <h2> Plate: <?php echo e($truck->plate); ?></h2>
                                            <h4> Maker: <?php echo e($truck->maker); ?></h4>
                                            <h4> MY: <?php echo e($truck->make_year); ?></h4>
                                            <h4> Mechanic: <a href="<?php echo e(route('m_show', $truck->getMechanic->id)); ?>">
                                                    <?php echo e($truck->getMechanic->name); ?> <?php echo e($truck->getMechanic->surname); ?>

                                                </a>
                                            </h4>
                                            <?php if($truck->photo): ?>
                                                <h4><a href="<?php echo e($truck->photo); ?>" target="_BLANK">Photo</a></h4>
                                            <?php endif; ?>
                                        </div>
                                        <div class="buttons">
                                            <a href="<?php echo e(route('t_show', $truck)); ?>" class="btn btn-info">Show</a>
                                            <a href="<?php echo e(route('t_edit', $truck)); ?>" class="btn btn-secondary">Edit</a>
                                            <form action="<?php echo e(route('t_delete', $truck)); ?>" method="POST">
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li class="list-group-item">No trucks found</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="me-3 mx-3 mt-3">
                    <?php echo e($trucks->links()); ?></div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/truck/index.blade.php ENDPATH**/ ?>