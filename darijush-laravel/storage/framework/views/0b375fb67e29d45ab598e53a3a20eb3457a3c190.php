<?php $__env->startSection('title'); ?>
    Super Fun
<?php $__env->stopSection(); ?>

<?php $__env->startSection('fun'); ?>
<?php echo $__env->make('kitkas.bu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if($abc=='keturi'): ?>
<h1>Labai gerai</h1>
<?php else: ?>
    <h1>Nelabai gerai</h1>
<?php endif; ?>
<?php echo e($abc); ?>


<?php $__currentLoopData = $mas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h2><?php echo e($value); ?></h2>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\delfinai\darijush-laravel\resources\views/kitkas/fun.blade.php ENDPATH**/ ?>