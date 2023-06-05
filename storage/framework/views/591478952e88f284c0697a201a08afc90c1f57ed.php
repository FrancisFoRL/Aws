<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?> style="color:#a71f2b">
        <div class="fw-bold"><?php echo e(__('¡Vaya! Algo salió mal.')); ?></div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li ><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/components/validation-errors.blade.php ENDPATH**/ ?>