<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main>
        <?php if(Cart::count()>0): ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h1>Carrito de compra</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio unitario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($book->model->title); ?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-outline-secondary" type="button"
                                            wire:click.prevent='disminuirCantidad("<?php echo e($book->rowId); ?>")'>-</a>
                                        <div class="mx-2"><?php echo e($book->qty); ?></div>
                                        <a class="btn btn-outline-secondary" type="button"
                                            wire:click.prevent='aumentarCantidad("<?php echo e($book->rowId); ?>")'>+</a>
                                    </div>
                                </td>
                                <td><?php echo e($book->model->price); ?></td>
                            </tr>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <p></p>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-primary">Comprar</a>
                    <a href="#" class="btn btn-outline-secondary">Seguir comprando</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/cart/index.blade.php ENDPATH**/ ?>