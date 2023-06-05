<div>
    <?php if(is_countable($results) && count($results) > 0): ?>
        <ul>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($result->title); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php elseif(!is_countable($results)): ?>
        <p>No se encontraron resultados.</p>
    <?php endif; ?>
</div>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/livewire/search.blade.php ENDPATH**/ ?>