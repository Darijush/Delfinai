
<?php if($errors->any()): ?>
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(Session::has('success_msg')): ?>
                <div class="container text-center">
                    <div class="row justify-content-center ">
                        <div class="col-6">
                            <div class="alert alert-success alert-dismissible fade show">
                                <h2><?php echo e(Session::get('success_msg')); ?></h2>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(Session::has('danger_msg')): ?>
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="alert alert-danger alert-dismissible fade show">
                            <h2><?php echo e(Session::get('danger_msg')); ?></h2>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(Session::has('info_msg')): ?>
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="alert alert-info alert-dismissible fade show">
                        <h2><?php echo e(Session::get('info_msg')); ?></h2>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/layouts/msg.blade.php ENDPATH**/ ?>