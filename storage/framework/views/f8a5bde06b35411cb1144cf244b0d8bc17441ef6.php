<?php $__env->startSection('page-title'); ?>
Mapa Web |
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
    <div class="container">
        <h2 class="text-center mt-4 display-6" style="font-family: Ubuntu">Mapa Web</h2>
        <hr>
        <div class="p-5 my-5 border border-dark border-2 rounded-4" id="map-container">
            <ul class="sitemap-list">
                <li class="fs-5"><a href="<?php echo e(route('inicio')); ?>">El Rincón de las Letras</a></li>
                <li class="fs-5">Búsqueda</li>
                <li class="fs-5">
                    Mostrar Libro
                    <ul class="sitemap-sublist">
                        <li class="fs-6"><a href="libros/man-and-superman">Man and Superman</a></li>
                        <li class="fs-6"><a href="libros/headlong-hall">Headlong Hall</a></li>
                        <li>...</li>
                    </ul>
                </li>
                <li class="fs-5">
                    Mostrar Categoría
                    <ul class="sitemap-sublist">
                        <li class="fs-6"><a href="categorias/language-arts-disciplines">Language Arts Disciplines</a></li>
                        <li class="fs-6"><a href="categorias/psychology">Psychology</a></li>
                        <li>...</li>
                    </ul>
                </li>
                <li class="fs-5">
                    Perfil de usuario
                    <ul class="sitemap-sublist">
                        <li class="fs-6"><a href="<?php echo e(route('profile.show')); ?>">Datos de usuario</a></li>
                        <li class="fs-6"><a href="<?php echo e(route('pedidos')); ?>">Pedidos</a></li>
                        <li class="fs-6"><a href="<?php echo e(route('opiniones')); ?>">Reseñas</a></li>
                    </ul>
                </li>
                <li class="fs-5"><a href="<?php echo e(route('cart')); ?>">Carrito de Compra</a></li>
                <li class="fs-5"><a href="<?php echo e(route('wishlist')); ?>">Lista de Deseos</a></li>
                <li class="fs-5"><a href="<?php echo e(route('sobrenost')); ?>">Sobre Nosotros</a></li>
                <li class="fs-5"><a href="<?php echo e(route('contacto.show')); ?>">Contacto</a></li>
                <li class="fs-5"><a href="<?php echo e(route('info-legal')); ?>">Información Legal</a></li>
                <li class="fs-5"><a href="<?php echo e(route('privacidad')); ?>">Política de Privacidad</a></li>
            </ul>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<style>

    .sitemap-list li a{
        text-decoration: none;
        color: #8B0000;
    }

    .sitemap-list li a:hover{
        text-decoration: underline;
        text-underline-offset: 6                                            px;
        color: #800080;
        text-decoration-color: #8B0000;
    }

    @media(min-width:2500px) {
        #map-container {
            margin-bottom: 5.7vw !important;
        }
    }
</style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/mapa.blade.php ENDPATH**/ ?>