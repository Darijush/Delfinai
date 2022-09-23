


<?php if(Session::has('res')): ?>
<h2><?php echo e(Session::get('res')); ?></h2>
<?php endif; ?>
<form action="<?php echo e(route('calculate')); ?>" method="POST">
X: <input type="text" name="x"><br/><br/>
Y: <input type="text" name="y"><br/><br/>
<?php echo csrf_field(); ?>
<button type="submit">SUM</button>
</form>

<?php /**PATH C:\xampp\htdocs\delfinai\darijush-laravel\resources\views/form.blade.php ENDPATH**/ ?>