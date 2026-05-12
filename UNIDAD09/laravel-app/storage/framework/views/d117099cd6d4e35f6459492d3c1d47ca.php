<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1>Crear producto</h1>
    <?php if (isset($component)) { $__componentOriginal47a245a75a96c9babd2268219857781d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal47a245a75a96c9babd2268219857781d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.errors','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal47a245a75a96c9babd2268219857781d)): ?>
<?php $attributes = $__attributesOriginal47a245a75a96c9babd2268219857781d; ?>
<?php unset($__attributesOriginal47a245a75a96c9babd2268219857781d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal47a245a75a96c9babd2268219857781d)): ?>
<?php $component = $__componentOriginal47a245a75a96c9babd2268219857781d; ?>
<?php unset($__componentOriginal47a245a75a96c9babd2268219857781d); ?>
<?php endif; ?>
    <form action="<?php echo e(route('product.store')); ?>" method='post'>
        <?php if (isset($component)) { $__componentOriginale50d8575ad4e25afab68a02241a71259 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale50d8575ad4e25afab68a02241a71259 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product.form','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale50d8575ad4e25afab68a02241a71259)): ?>
<?php $attributes = $__attributesOriginale50d8575ad4e25afab68a02241a71259; ?>
<?php unset($__attributesOriginale50d8575ad4e25afab68a02241a71259); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale50d8575ad4e25afab68a02241a71259)): ?>
<?php $component = $__componentOriginale50d8575ad4e25afab68a02241a71259; ?>
<?php unset($__componentOriginale50d8575ad4e25afab68a02241a71259); ?>
<?php endif; ?>
    </form>

    <a href="<?php echo e(route('product.index')); ?>">Volver</a>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\EXAMEN3-DWCS\UNIDAD-09\laravel-app\resources\views/product/create.blade.php ENDPATH**/ ?>