<?php $__env->startSection('page-title'); ?>
Pedido Completado |
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="d-flex justify-content-center mt-5">
        <h2 class="display-4 fw-bold">Pedido Completado</h2>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <p class="fs-5" id="pedido-text">Puedes ver el pedido en el apartado de <a href=" <?php echo e(route('pedidos')); ?>" class="fw-bold text-decoration-none" style="color:#DC143C;">"Mis pedidos"</a></p>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_k10ku8at.json"
            background="transparent" speed="1" style="width: 65vw; height: 25vw; min-height: 600px; min-width: 370px;" autoplay>
        </lottie-player>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
    @media (max-width: 490px) {
        #pedido-text{
            font-size: 14px !important;
        }
    }
</style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/checkout/pedido-completado.blade.php ENDPATH**/ ?>