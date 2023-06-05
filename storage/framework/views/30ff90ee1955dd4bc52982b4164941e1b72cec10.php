<?php $__env->startSection('page-title'); ?>
Lista de deseos |
<?php $__env->stopSection(); ?>
<div class="container">
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
    <h2 class="text-center mt-4 display-6" style="font-family: Ubuntu">Lista de deseos</h2>
    <hr>
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-lg-3 col-md-5 col-10 mb-4 mx-auto">
            <div class="card h-100 wishlist-card">
                <a href="<?php echo e(route('book.show', $item->book->slug)); ?>">
                    <img src="<?php echo e($item->book->image); ?>" class="card-img-top pointer"
                        alt="Portada libro <?php echo e($item->book->title); ?>">
                </a>
                <div class="card-body">
                    <h3 class="card-title" style="font-family: Ubuntu"><?php echo e($item->book->title); ?></h3>
                    <p class="card-text text-center text-md-start" ><?php echo e($item->book->price); ?>€</p>
                </div>
                <div class="card-footer d-flex justify-content-center" style="background-color:#212121">
                    <button class="btn w-25 rounded-pill pointer" id="btn-delete"
                        wire:click="removeFromWishlist(<?php echo e($item->id); ?>)" aria-label="Eliminar artículo"><i
                            class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-12 text-center">
                <p style="font-size: min(5vw, max(40px)); margin-top: 100px; font-weight: bold">Tu lista de deseos está
                    vacía</p>
                <div class="d-flex justify-content-center align-items-center">
                    <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_x8aowqs9.json"
                        background="transparent" speed="1" style="width: 60vw; height: 20vw; min-height: 200px" loop
                        autoplay>
                    </lottie-player>
                </div>
            </div>
        </div>

        <?php endif; ?>
    </div>
</div>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
    .wishlist-card {
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

    .pointer{
        cursor: pointer;
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
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/livewire/wishlist.blade.php ENDPATH**/ ?>