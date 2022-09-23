<?php $__env->startSection('content'); ?>
    <div class="container text-center --content">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Mechanics</h2>
                        <form action="<?php echo e(route('m_index')); ?>" method="get">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="sort" class="form-select mt-1">
                                                        <option value="name_asc"
                                                            <?php if('name_asc' == $sortSelect): ?> selected <?php endif; ?>>Name AZ
                                                        </option>
                                                        <option value="name_desc"
                                                            <?php if('name_desc' == $sortSelect): ?> selected <?php endif; ?>>Name ZA
                                                        </option>
                                                        <option value="surname_asc"
                                                            <?php if('surname_asc' == $sortSelect): ?> selected <?php endif; ?>>Surname AZ
                                                        </option>
                                                        <option value="surname_desc"
                                                            <?php if('surname_desc' == $sortSelect): ?> selected <?php endif; ?>>Surname ZA
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-2">
                                                    <select name="per_page" class="form-select mt-1">
                                                        <option value="all"
                                                        <?php if('all' == $perPage): ?> selected <?php endif; ?>>All</option>
                                                        <option value="5"
                                                            <?php if('5' == $perPage): ?> selected <?php endif; ?>>5</option>
                                                        <option value="10"
                                                            <?php if('10' == $perPage): ?> selected <?php endif; ?>>10</option>
                                                        <option value="20"
                                                            <?php if('20' == $perPage): ?> selected <?php endif; ?>>20</option>
                                                        <option value="50"
                                                            <?php if('50' == $perPage): ?> selected <?php endif; ?>>50</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    
                                                    <a href="<?php echo e(route('m_index')); ?>" class="btn btn-secondary m-1">Reset</a>
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
                            <?php $__empty_1 = true; $__currentLoopData = $mechanics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mechanic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li class="list-group-item">
                                    <div class="mechanic-list">
                                        <div class="content">
                                            <h2><?php echo e($mechanic->name); ?></h2>
                                            <h2><?php echo e($mechanic->surname); ?></h2>
                                            <span>[<?php echo e($mechanic->getTrucks()->count()); ?>]</span>
                                        </div>
                                        <div class="buttons">
                                            <a href="<?php echo e(route('m_show', $mechanic)); ?>" class="btn btn-info">Show</a>
                                            <a href="<?php echo e(route('m_edit', $mechanic)); ?>" class="btn btn-secondary">Edit</a>
                                            <form action="<?php echo e(route('m_delete', $mechanic)); ?>" method="POST">
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li class="list-group-item">No mechanics found</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="me-3 mx-3 mt-3">
                    <?php echo e($mechanics->links()); ?></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/mechanic/index.blade.php ENDPATH**/ ?>