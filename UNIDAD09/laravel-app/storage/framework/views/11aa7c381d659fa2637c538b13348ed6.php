<?php echo csrf_field(); ?> 

<label for="name">Introduce el nombre del producto</label>
<input type="text" name="name" id="name" placeholder="Por ejemplo: PlayStation 5" max="100" value="<?php echo e(old('name', $product->name ?? '')); ?>">

<label for="description">Introduce la descripción</label>
<textarea name="description" id="description"><?php echo e(old('description', $product->description ?? '')); ?></textarea>

<label for="prize">Introduce un precio</label>
<input type="number" name="prize" id="prize" placeholder="500" value="<?php echo e(old('prize', $product->prize ?? '0')); ?>">

<br><br>
<button type="submit" name="save" id="save">Guardar</button><?php /**PATH C:\xampp\htdocs\EXAMEN3-DWCS\UNIDAD-09\laravel-app\resources\views/components/product/form.blade.php ENDPATH**/ ?>