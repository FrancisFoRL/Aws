<?php $__env->startSection('page-title'); ?>
Carrito |
<?php $__env->stopSection(); ?>
<div class="container mb-5">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.messages','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('messages'); ?>
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
    <?php if(Cart::count()>0): ?>
    <div class="my-md-4 my-3">
        <h2 style="font-family: Ubuntu" class="display-6 text-center text-md-start">Carrito de Compra</h2>
    </div>

    <div class="contenido">
        <div class="row">
            <div class="col-11 col-md-12 col-lg-8 mx-auto" id="contenedor_book">
                <div class="p-5">
                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row my-3">
                        <div class="col-md-3">
                            <img src="<?php echo e($book->model->image); ?>" class="img-fluid mx-auto d-block"
                                alt="Portada del libro <?php echo e($book->model->title); ?>" id="img-book">
                        </div>
                        <div class="col-md-8">
                            <div>
                                <div class="row">
                                    <div class="col-12 col-md-5 text-center text-md-start mt-3 mt-lg-0">
                                        <div>
                                            <span style="" class="fw-bold"><?php echo e($book->model->title); ?></span>
                                        </div>
                                        <div>
                                            <div class="mt-2">
                                                <b>Autor: </b><span class="value"><?php echo e($book->model->author->name); ?></span>
                                            </div>
                                            <div class="mt-2">
                                                <b>Nº Páginas: </b><span class="value"><?php echo e($book->model->pages); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mt-3 mt-lg-0">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a class="btn fw-bold" type="button"
                                                wire:click.prevent='disminuirCantidad("<?php echo e($book->rowId); ?>")'>-</a>
                                            <div class="mx-2"><?php echo e($book->qty); ?></div>
                                            <a class="btn fw-bold" type="button"
                                                wire:click.prevent='aumentarCantidad("<?php echo e($book->rowId); ?>")'>+</a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2 text-center text-md-start mt-2 mt-lg-0">
                                        <span><?php echo e($book->model->price * $book->qty); ?> €</span>
                                    </div>

                                    <div class="col-12 col-md-1 mt-3 mt-lg-5">
                                        <div class="d-flex align-items-end pb-4 justify-content-center">
                                            <i class="fa-regular fa-circle-xmark fa-xl"
                                                style="color: #a51d2d; cursor: pointer"
                                                wire:click.self='eliminar("<?php echo e($book->rowId); ?>")'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-11 col-md-12 col-lg-4 p-5 mx-auto" id="detalles">
                <div>
                    <h2 class="mb-md-3">Detalles</h2>
                    <div class="d-flex justify-content-between"><span>Subtotal</span><span><?php echo e($subtotal); ?> €</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between"><span>Envio</span><span>4,99 €</span></div>
                    <hr>
                    <div class="d-flex justify-content-between"><span>Total</span><span><?php echo e($subtotal + 4,99); ?>

                            €</span></div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="button" class="btn btn-lg w-50" id="btn-check"
                            onclick="window.location.href='<?php echo e(route('checkout')); ?>'">Pagar ahora</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 pb-5 pb-0 text-center text-lg-start">
        <button class="btn rounded-pill" id="btn-delete" wire:click="clearCart">Borrar Carrito</button>
    </div>
    <?php else: ?>
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-12 text-center">
            <p style="font-size: min(5vw, max(40px)); margin-top: 100px; font-weight: bold">Tu carrito de la compra está
                vacío</p>
            <div class="d-flex justify-content-center align-items-center">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_z9agdrw6.json"
                    background="transparent" speed="1" style="width: 60vw; height: 20vw; min-height: 200px;" loop
                    autoplay>
                </lottie-player>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
    #detalles {
        background-color: #6D9886;
        color: #212121;
        border-radius: 0 10px 10px 0;
    }

    #img-book {
        border: 1px solid #212121;
        border-radius: 5px;
        height: 200px;
        width: 150px;
        object-fit: fill;
    }

    #btn-check {
        background-color: #D4AF37;
    }

    #btn-check:hover {
        background-color: transparent;
        border: 1px solid #D4AF37;
    }

    .btn {
        background-color: #6D9886;
        color: #000000;
    }

    .btn:hover {
        background-color: #2E524B;
        color: #000000;
    }

    #btn-delete {
        background-color: #6D9886;
        border: 2px solid #212121;
        color: #212121;
        padding: 10px 30px 10px 30px;
    }

    #btn-delete:hover {
        background-color: transparent;
        box-shadow: 3px 3px 0 #6D9886;
        color: #212121;
    }

    #contenedor_book {
        border: 1px solid #212121;
        border-right: 0px;
        border-radius: 10px 0 0 10px;
    }

    @media (max-width: 992px) {
        #contenedor_book {
            border: 1px solid #212121;
            border-radius: 10px 10px 0 0;
        }

        #detalles {
            background-color: #6D9886;
            color: #212121;
            border-radius: 0 0 10px 10px;
        }

        .container {
            margin-bottom: 100px;
        }

        #btn-check{
            width: 170px !important;
        }
    }
</style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/cart/cart-show.blade.php ENDPATH**/ ?>