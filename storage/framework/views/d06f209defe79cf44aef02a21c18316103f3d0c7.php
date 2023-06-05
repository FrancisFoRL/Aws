<?php $__env->startSection('page-title'); ?>
Pedidos |
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 d-none d-lg-block">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-perfil','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-perfil'); ?>
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
            </div>
            <div class="col-12 col-lg-10 mb-5 mb-md-0">
                <div class="mx-auto m-4 p-4" id="contendor-princ">
                    <h2 class="display-6 mb-4">Mis Pedidos</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="fw-bold fs-5">
                                    <th>Nº Pedido</th>
                                    <th>Total Pagado</th>
                                    <th>Fecha de Pedido</th>
                                    <th>Mas Detalles sobre el Pedido</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="fs-6">
                                    <td class="p-2 p-lg-3"><?php echo e($order->order_number); ?></td>
                                    <td class="p-2 p-lg-3"><?php echo e($order->total_paid); ?> €</td>
                                    <td class="p-2 p-lg-3"><?php echo e($order->created_at); ?></td>
                                    <td class="text-center">
                                        <button class="btn fw-bold pedido-details-btn rounded-pill" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#pedido-details-<?php echo e($order->id); ?>"
                                            aria-expanded="false" aria-controls="pedido-details-<?php echo e($order->id); ?>">
                                            <span class="d-none d-lg-block">Mas detalles sobre el pedido</span> <i
                                                class="fas fa-arrow-down px-1"></i>
                                        </button>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="4" class="hidden-row">
                                        <div class="collapse py-4 px-5" id="pedido-details-<?php echo e($order->id); ?>">
                                            <!-- Contenido adicional del pedido -->
                                            <h3 class="fw-bold text-center text-lg-start">Detalles del pedido</h3>
                                            <hr>
                                            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($book->order_id == $order->id): ?>
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-3 text-center">
                                                    <img src="<?php echo e($book->image); ?>" alt="Portada <?php echo e($book->title); ?>"
                                                        class="img img-fluid rounded-3 border border-dark">
                                                </div>
                                                <div class="col-12 col-lg-3 text-center text-lg-start mt-3 mt-lg-0">
                                                    <p class="fs-5 fw-bold"><?php echo e($book->title); ?></p>
                                                </div>
                                                <div class="col-12 col-lg-3 text-center text-lg-start">
                                                    <p> Número de unidades: <?php echo e($book->book_quantity); ?></p>
                                                    <p>Precio por unidad: <?php echo e($book->price); ?>€</p>
                                                </div>
                                                <div class="col-12 col-lg-3 text-center text-lg-start">
                                                    <p>Total: <?php echo e($book->price * $book->book_quantity); ?> €</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="d-flex flex-row-reverse">
                                                <p class="fs-3 fw-bold text-center text-lg-start">Total del pedido:
                                                    <?php echo e($order->total_paid); ?>€ Envio Incl.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.pedido-details-btn');

        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');

                if (icon.classList.contains('fa-arrow-down')) {
                    icon.classList.remove('fa-arrow-down');
                    icon.classList.add('fa-arrow-up');
                } else {
                    icon.classList.remove('fa-arrow-up');
                    icon.classList.add('fa-arrow-down');
                }
            });
        });
    });
</script>


<style>
    #contendor-princ {
        border: 2px solid #222222;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }

    h2 {
        font-family: 'Ubuntu', sans-serif;
    }

    .pedido-details-btn.active {
        background-color: red;
        color: #fff;
    }


    .table {
        border: 2px solid #212121;
    }

    .btn {
        background-color: #212121;
        color: #fff;
    }

    .btn:hover {
        border-color: #212121;
        color: #212121;
    }

    @media (max-width: 747px) {
        th {
            font-size: 14px;
        }

        td {
            font-size: 12px;
        }
    }
</style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/profile/pedidos.blade.php ENDPATH**/ ?>