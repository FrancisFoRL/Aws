<?php if($paginator->hasPages()): ?>
<nav class="d-flex justify-items-center justify-content-between">
    <div class="d-flex justify-content-center flex-fill d-sm-none">
        <ul class="pagination">
            
            <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link" style="background-color: #212121; color:#F2F2F2"><i class="fa-solid fa-chevron-left"></i> Anterior</span>
            </li>
            <?php else: ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>"
                    rel="prev" style="background-color: #212121; color:#F2F2F2"><i class="fa-solid fa-chevron-left"></i> Anterior</a>
            </li>
            <?php endif; ?>

            
            <?php if($paginator->hasMorePages()): ?>
            <li class="page-item">
                <a class="page-link" style="background-color: #212121; color:#F2F2F2" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">Siguiente <i class="fa-solid fa-chevron-right"></i></a>
            </li>
            <?php else: ?>
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link" style="background-color: #212121; color:#F2F2F2">Siguiente <i class="fa-solid fa-chevron-right"></i></span>
            </li>
            <?php endif; ?>
        </ul>
    </div>

    <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
        <div>
            <p class="border border-dark border-2 p-2 rounded" style="color:#212121">
                <?php echo __('Viendo'); ?>

                <span class="fw-bold" style="color:#8B0000"><?php echo e($paginator->firstItem()); ?></span>
                <?php echo __('a'); ?>

                <span class="fw-bold" style="color:#8B0000"><?php echo e($paginator->lastItem()); ?></span>
                <?php echo __('de los'); ?>

                <span class="fw-bold" style="color:#8B0000"><?php echo e($paginator->total()); ?></span>
                <?php echo __('resultados'); ?>

            </p>
        </div>

        <div>
            <ul class="pagination">
                
                <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="Página anterior">
                    <span class="page-link" style="color:#212121; border: 1px solid #212121;" aria-hidden="true" ><i class="fa-solid fa-chevron-left"></i></span>
                </li>
                <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" style="color:#212121; border: 1px solid #212121;" rel="prev"
                        aria-label="Página anterior">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </li>
                <?php endif; ?>

                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $paginator->currentPage()): ?>
                <li class="page-item active" aria-current="page"><span class="page-link fw-bold fs-5"
                        style="background-color: #8B0000; color:#F2F2F2; border: 2px solid #B8860B; border-radius:5px"><?php echo e($page); ?></span></li>
                <?php else: ?>
                <li class="page-item"><a class="page-link" style="background-color: #212121; color:#F2F2F2"
                        href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"
                        style="color:#212121; border: 1px solid #212121;" aria-label="Siguiente Pagina">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
                <?php else: ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="Siguiente Pagina"
                    style="color:#212121; border: 1px solid #212121;">
                    <span class="page-link" aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php endif; ?>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/vendor/pagination/bootstrap-5.blade.php ENDPATH**/ ?>