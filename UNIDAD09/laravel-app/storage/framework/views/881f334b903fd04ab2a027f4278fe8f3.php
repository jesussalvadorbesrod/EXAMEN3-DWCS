<?php if($errors->any()): ?>
    <ul>
        <h3>Errores</h3>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($e); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\EXAMEN3-DWCS\UNIDAD-09\laravel-app\resources\views/components/errors.blade.php ENDPATH**/ ?>