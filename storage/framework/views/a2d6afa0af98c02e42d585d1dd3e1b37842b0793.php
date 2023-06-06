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
        <h2 class="my-lg-4 my-4 text-center text-lg-left" style="font-family: Ubuntu">Se han encontrado <?php echo e($total); ?> libro/s que corresponde a la busqueda</h2>
        <hr>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-lg-3 col-md-6 col-11 mb-4 mx-auto">
                <div class="card h-100 wishlist-card">
                    <a href="<?php echo e(route('book.show', $book->slug)); ?>">
                        <img src="<?php echo e($book->image); ?>" class="card-img-top" alt="Portada libro <?php echo e($book->title); ?>">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title fs-5 fw-bold" style="font-family: Roboto"><?php echo e($book->title); ?></h3>
                        <p class="card-text"><?php echo e($book->price); ?>€</p>
                    </div>
                    <div class="card-footer d-flex justify-content-center" style="background-color:#212121">

                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="d-flex justify-content-center align-books-center">
                <div class="col-md-12 text-center">
                    <p style="font-size: min(5vw, max(40px)); margin-top: 100px; font-weight: bold">No hubo ningun
                        resultado</p>
                    <div class="d-flex justify-content-center align-books-center">
                        <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_x8aowqs9.json"
                            background="transparent" speed="1" style="width: 60vw; height: 20vw; min-height: 200px" loop
                            autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>

            <?php endif; ?>

        </div>
        <?php echo e($books->withQueryString()->links()); ?>

    </div>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <style>
        .wishlist-card {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(0, 0, 0, 0.4);

            transition: box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .wishlist-card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
        }

        #btn-delete {
            background-color: #dc3545;
            color: #ffffff;
        }

        #btn-delete:hover {
            background-color: #a71f2b;
            color: #ffffff;
        }

        .card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-img-top {
            height: 350px;
            object-fit: fill;
        }

        @media (max-width: 992px) {
            .container {
                margin-bottom: 100px;
            }
        }
    </style>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/fran/Escritorio/AWS/Aws/resources/views/search.blade.php ENDPATH**/ ?>