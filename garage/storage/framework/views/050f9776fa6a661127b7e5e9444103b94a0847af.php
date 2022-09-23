<select data-create class="form-select mb-3" name="truck_id">
    <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($truck->id); ?>">
            <?php echo e($truck->plate); ?> <?php echo e($truck->maker); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH C:\xampp\htdocs\delfinai\garage\resources\views/breakdown/trucks_list.blade.php ENDPATH**/ ?>