<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Productos</title>
</head>
<body>

<?php if(session('status')): ?>
    <div><?php echo e(session('status')); ?></div>
<?php endif; ?>
    
<?php echo e($slot); ?>


</body>
</html><?php /**PATH C:\xampp\htdocs\EXAMEN3-DWCS\UNIDAD-09\laravel-app\resources\views/components/layout.blade.php ENDPATH**/ ?>