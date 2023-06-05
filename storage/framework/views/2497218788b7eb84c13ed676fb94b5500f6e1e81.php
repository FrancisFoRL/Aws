<?php $__env->startSection('page-title'); ?>
<?php echo e($book->title); ?> |
<?php $__env->stopSection(); ?>

<div class="container py-4 mt-lg-5">
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
    <div class="row">
        <div class="col-lg-4 col-12 me-5">
            <h2 class="mb-3 d-md-none d-block text-center" style="font-family: Ubuntu"><?php echo e($book->title); ?></h2>
            <img src="<?php echo e(asset($book->image)); ?>" id="book-image" class="img img-fluid rounded w-100"
                alt="Portada de <?php echo e($book->title); ?>">
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
            <h2 class="mb-3 d-md-block d-none" style="font-family: Ubuntu"><?php echo e($book->title); ?></h2>
            <hr>
            <p class="mb-4 p-4" id="desc"><?php echo e($book->description); ?></p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3 class="mx-lg-1" style="font-family: Ubuntu">Ficha técnica</h3>
                    <div class="p-3 blocks">
                        <p class="mb-2"><span class="fs-5 fw-bold">Autor:</span> <?php echo e($book->author->name); ?></p>
                        <p class="mb-2 fw-bold fs-5">Género/s:</p>
                        <ul>
                            <?php $__currentLoopData = $book->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($category->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        </p>
                        <p class="mb-3"><span class="fw-bold fs-5">Editorial:</span> <?php echo e($book->editorial->name); ?>

                        </p>
                        <p class="mb-2"><span class="fw-bold fs-5">Número de páginas:</span> <?php echo e($book->pages); ?></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-5 px-lg-5 text-center text-lg-start">
                    <div class=" align-items-center mb-4 mt-0 mt-lg-1">
                        <h2 class="display-6" style="font-family:Ubuntu">PVP: <?php echo e($book->price); ?> €</h2>
                    </div>
                    <div>
                        <button wire:click.prevent="store(<?php echo e($book); ?>)" class="btn buttons" id="compra"
                            title="Añadir al carrito">
                            <i class="fa-solid fa-cart-plus me-1"></i> Añadir al carrito
                        </button>
                        <button wire:click.prevent="addToWishlist(<?php echo e($book->id); ?>)" class="btn buttons mt-2 mt-lg-3"
                            id="wishlist" title="Añadir a favoritos el libro">
                            <i class="fa-solid fa-heart m-1"></i> Añadir a favoritos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-5">
        <div>
            <h3 class="display-6" style="font-family: Ubuntu">Reviews</h3>
        </div>
        <?php if(Auth::user()): ?>
        <div>
            <button type="button" class="btn rounded-pill fw-bold" id="addNewOpinion" data-bs-toggle="modal" data-bs-target="#addOpinion">
                <i class="fa-solid fa-plus mx-1"></i> Añadir nueva opinión
            </button>
        </div>
        <?php endif; ?>
    </div>
    <div class="mt-3">
        <?php if(count($book->reviews) != 0): ?>
        <?php $__currentLoopData = $book->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-4">
            <div class="card-header d-flex flex-row-reverse align-items-center text-white">
                <p class="mb-0">
                    <?php for($i = 1; $i <= 5; $i++): ?> <i
                        class="fa-solid fa-star<?php echo e($i <= $review->rating ? '' : '-regular'); ?>"></i>
                        <?php endfor; ?>
                </p>
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo e($review->comment); ?></p>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center bg-light">
                <div>
                    <p class="mb-0"><?php echo e($review->user->name); ?></p>
                    <small style="color:#3a3a3a"><?php echo e($review->created_at->diffForHumans()); ?></small>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <p class="text-center fw-bold fs-4 text-decoration-underline" style="color:#7B0000">No hay reviews de este libro
        </p>
        <?php endif; ?>
    </div>
</div>


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

<?php if(Auth::user()): ?>
 <!-- Modal de añadir opinión -->
 <div class="modal fade" id="addOpinion" tabindex="-1" aria-labelledby="newOpinion" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #212121; color:#F6F6F6;">
                <h1 class="modal-title fs-5" id="newOpinion">Añadir nueva opinión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #F6F6F6">
                <form id="opinionForm" action="<?php echo e(route('addOpinion')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <input type="hidden" name="book_id" value="<?php echo e($book->id); ?>">
                        <label for="content" class="form-label fw-bold">Opinión</label>
                        <textarea class="form-control" id="content" name="opinion" rows="3" style="resize: none;"></textarea>
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold mb-1">Valoración</p>
                        <ul class="d-flex list-unstyled pt" id="stars">
                            <li class="me-2">
                                <label for="rating1"><span class="visually-hidden">Estrella 1</span><i class="fa-regular fa-star"></i></label>
                                <input type="radio" id="rating1" name="ratings" value="1">
                            </li>
                            <li class="mx-2">
                                <label for="rating2"><span class="visually-hidden">Estrella 2</span><i class="fa-regular fa-star"></i></label>
                                <input type="radio" id="rating2" name="ratings" value="2">
                            </li>
                            <li class="mx-2">
                                <label for="rating3"><span class="visually-hidden">Estrella 3</span><i class="fa-regular fa-star"></i></label>
                                <input type="radio" id="rating3" name="ratings" value="3">
                            </li>
                            <li class="mx-2">
                                <label for="rating4"><span class="visually-hidden">Estrella 4</span><i class="fa-regular fa-star"></i></label>
                                <input type="radio" id="rating4" name="ratings" value="4">
                            </li>
                            <li class="ms-2">
                                <label for="rating5"><span class="visually-hidden">Estrella 5</span><i class="fa-regular fa-star"></i></label>
                                <input type="radio" id="rating5" name="ratings" value="5">
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" id="sendOpinion" class="btn fw-bold rounded-pill">
                            <i class="fa-regular fa-paper-plane mx-1"></i> Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('li').on('click', function(){
        var clickedIndex = $(this).index(); // Se obtiene el índice del elemento 'li' clicado
        var stars = $('#stars li'); // Obtiene todos los elementos <li> con la class "stars"
        $('li').removeClass('active'); // Remueve la clase 'active' de todos los elementos <li>
        $('li').removeClass('secondary-active'); // Remueve la clase 'secondary-active' de todos los elementos <li>
        $(this).addClass('active'); // Agrega la clase 'active' al elemento clicado
        $(this).prevAll().addClass('secondary-active'); //Agrega la clase 'secondary-active' a todos los elementos anteriores al elemento clicado
        stars.each(function (index) {
            var star = $(this); // Obtiene el elemento <li> actual
            var starIcon = star.find('i'); // Obtiene el elemento <i> dentro del elemento <li> actual

            // Se comparan el índice actual con el índice del elemento clicado
            if (index <= clickedIndex) {
                star.addClass('active'); // Agrega la clase 'active' al elemento <li> actual
                starIcon.removeClass('fa-regular').addClass('fa-solid'); // Remueve la clase 'fa-regular' y agrega la clase 'fa-solid' al elemento <i>
            } else {
                starIcon.removeClass('fa-solid').addClass('fa-regular'); // Remueve la clase 'fa-solid' y agrega la clase 'fa-regular' al elemento <i>
            }
        });
    });
</script>

<style>
    .container {
        font-family: 'Roboto', sans-serif;
    }

    #desc {
        border: 2px solid #212121;
        border-radius: 10px;
    }

    .blocks {
        border: 2px solid #212121;
        border-radius: 10px;
    }

    .buttons {
        width: 200px;
        height: 50px;
    }

    #book-image {
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
            rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
            rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    #compra {
        background-color: #6D9886;
        border: 2px solid #212121;
        color: #2121http://127.0.0.1:8002/contacto21;
    }

    #compra:hover {
        background-color: transparent;
    }

    #wishlist {
        background-color: #B44F3D;
        border: 2px solid #212121;
        color: #FFFFFF;
    }

    #wishlist:hover {
        background-color: transparent;
        color: #212121;
    }

    #stars li {
        color: black;
        font-size: 20px;
    }

    #stars li:hover {
        color: #FFD700;
    }

    #stars li.active,
    #stars li.secondary-active {
        color: #FFD700;
    }

    #stars input[type="radio"] {
        display: none;
    }

    #addNewOpinion, #sendOpinion{
        background-color: #003366;
        border: 2px solid #66B2FF;
        color: #F6F6F6;
    }

    #addNewOpinion:hover, #sendOpinion:hover{
        background-color: transparent;
        color: #212121;
    }

    @media (max-width: 650px) {
        #book-image {
            height: 490px !important;
        }
    }

    @media (max-width: 990px) {
        #book-image {
            height: 650px;
        }
    }

    .card-header {
        background-color: #212121;
    }
</style>

<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/livewire/show-book.blade.php ENDPATH**/ ?>