<nav class="navbar navbar-expand-sm bg-body-tertiary d-none d-lg-block " id="navPrincipal">
    <div class="container-fluid">
        <div class="d-flex align-items-center ">
            <a class="navbar-brand" href="<?php echo e(route('inicio')); ?>">
                <img src="<?php echo e(Storage::url('Logo.svg')); ?>" alt="Logo El Rincon de las Letras - Ir a la página principal"
                    id='logo' width="50" height="50" class="me-4">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#categorias-collapse"
                        role="button" aria-expanded="false" aria-controls="categorias-collapse" id="categorias-link">
                        Categorías
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo e(route('contacto.show')); ?>">Contactanos</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo e(route('sobrenost')); ?>">Sobre nosotros</a>
                </li>
            </ul>
            <div class="d-flex mx-auto justify-md-content-center">
                <div class="input-group">
                    <form action="<?php echo e(route('search')); ?>" method="GET" id="searchForm">
                        <?php echo csrf_field(); ?>
                        <label for="inputSearch" class="visually-hidden" style="color:#D9D9D9">Buscar un libro</label>
                        <input class="form-control rounded-pill" name="titulo" id="inputSearch" type="search"
                            placeholder="Buscar" aria-label="Buscar un libro">
                    </form>
                </div>
            </div>
            <ul class="navbar-nav ms-auto me-2 align-items-center">
                <li class="nav-item me-4">
                    <a href="<?php echo e(route('wishlist')); ?>" class="text-decoration-none" id="heart">
                        <i class="fa-solid fa-heart wishlist"></i>
                        <span class="visually-hidden" style="color:#D9D9D9">Wishlist</span>
                    </a>
                </li>

                <?php if(url()->current() != url('/carrito')): ?>
                <li class="nav-item me-4">
                    <!-- Contenedor del icono y el badge -->

                    <span class="position-relative">
                        <!-- Icono de carrito -->
                        <i class="fa-solid fa-cart-shopping" id="shopping-card" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        </i>

                        <!-- Offcanvas con productos en el carrito -->
                        <?php if($contenido > 0): ?>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php echo e($contenido); ?>

                            <span class="visually-hidden">Productos en el carrito</span>
                        </span>
                        <?php endif; ?>
                    </span>

                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <div class="dropdown w-20">

                        <?php if(Route::has('login')): ?>

                        <?php if(auth()->guard()->check()): ?>
                        <img src="<?php echo e(Auth::user()->profile_photo_url ?: Storage::url('user.png')); ?>"
                            class="rounded-circle object-cover dropdown-toggle" href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" width="35" height="35"
                            alt="Imagen de perfil del usuario">

                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end position-absolute"
                            aria-labelledby="dropdownMenuLink" style="width: 10vw;">
                            <li><a href="<?php echo e(route('profile.show')); ?>"
                                    class="dropdown-item d-flex justify-content-between align-items-center">Mis Datos<i
                                        class="fa-regular fa-address-card"></i></i></a></li>
                            <li><a href="<?php echo e(route('pedidos')); ?>"
                                    class="dropdown-item d-flex justify-content-between align-items-center">Mis
                                    Pedidos<i class="fa-solid fa-box-open"></i></a></li>
                            <li>
                            <li><a href="<?php echo e(route('opiniones')); ?>"
                                    class="dropdown-item d-flex justify-content-between align-items-center">Mis Reseñas
                                    <i class="fa-regular fa-star"></i></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar
                                    Sesión <i class="fa-solid fa-right-from-bracket"></i></a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>

                        </ul>

                        <?php else: ?>
                        <img src="<?php echo e(Storage::url('user.png')); ?>" class="rounded-circle object-cover dropdown-toggle"
                            href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"
                            width="35" height="35" alt="Imagen de perfil">

                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end "
                            aria-labelledby="dropdownMenuLink" style="width: 10vw;">
                            <li><a href="<?php echo e(route('login')); ?>"
                                    class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="#">Inicie Sesión<i class="fa-solid fa-right-to-bracket"></i></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="<?php echo e(route('register')); ?>">Registrarse<i class="fa-solid fa-pencil"></i></a></li>
                        </ul>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="collapse" id="categorias-collapse" data-bs-parent="#navPrincipal">
    <div class="mx-auto row p-5 pt-0 align-items-center">
        <hr>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-2 p-2 fs-5">
            <a href="<?php echo e(route('category.show', $categoria->slug)); ?>" class="text-decoration-none categorias"><?php echo e($categoria->name); ?></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<nav class="navbar navbar-expand d-flex align-items-center d-lg-none fixed-bottom rounded-pill mb-1 mx-1"
    id="nav-mobile">
    <div class="nav-item-mobile d-flex align-items-center flex-column <?php echo e(Request::is('wishlist') ? 'active' : ''); ?>">
        <a href="<?php echo e(route('wishlist')); ?>" class="d-flex align-items-center text-decoration-none">
            <i class="material-icons favorite-icon">
                favorite
            </i>
        </a>
    </div>
    <div class="nav-item-mobile d-flex align-items-center flex-column">
        <i class="material-icons search-icon m-auto" onclick="showSearch()">
            search
        </i>
        <div class="search-box">
            <form action="<?php echo e(route('search')); ?>" method="GET" id="searchForm">
                <?php echo csrf_field(); ?>
                <label for="search-mob" class="visually-hidden" style="color:#D9D9D9">Buscar un libro</label>
                <input type="text" placeholder="Buscar..." class="search-input" name="titulo" id="search-mob">
                <div class="search-background"></div>
            </form>
        </div>
    </div>
    <div class="nav-item-mobile d-flex align-items-center flex-column">
        <a href="<?php echo e(route('inicio')); ?>" class="d-flex align-items-center text-decoration-none">
            <img src="<?php echo e(Storage::url('Logo.svg')); ?>" alt="Logo El Rincon de las Letras - Ir a la página principal"
                id='logo' width="36" height="36">
        </a>
    </div>
    <div
        class="nav-item-mobile d-flex align-items-center flex-column <?php echo e(Request::is('cart/cart-show') ? 'active' : ''); ?>">
        <a href="<?php echo e(route('cart')); ?>" class="d-flex align-items-center text-decoration-none">
            <i class="material-icons shopping_cart">
                shopping_cart
            </i>
        </a>
    </div>
    <div class="nav-item-mobile d-flex align-items-center flex-column">
        <span class="material-icons outlined" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobile"
            aria-controls="offcanvasRight">
            menu_open
        </span>
    </div>
</nav>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.offcanvas-mobile','data' => ['categorias' => $categorias]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('offcanvas-mobile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categorias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categorias)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> <!-- Offcanvas para moviles -->
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.cart-show-inicio')->html();
} elseif ($_instance->childHasBeenRendered('l3114914878-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3114914878-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3114914878-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3114914878-0');
} else {
    $response = \Livewire\Livewire::mount('cart.cart-show-inicio');
    $html = $response->html();
    $_instance->logRenderedChild('l3114914878-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<script>
    function showSearch() {
        var searchBox = document.querySelector('.search-box'); // Se obtiene la referencia al elemento con la clase 'search-box'
        searchBox.classList.toggle('show'); // Alterna la clase 'show' en el elemento, lo que controla su visibilidad.
        searchBox.querySelector('input').focus(); // Obtiene la referencia al elemento <input> dentro de la caja de búsqueda y le da el enfoque.
    }
</script>

<style>
    /* NavBar pantalla mobiles y tablets */

    #nav-mobile {
        background: rgba(33, 33, 33, 0.9);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(33, 33, 33, 0.3);
        padding: 5px 20px;
        font-family: 'Poppins', sans-serif;
    }

    .nav-item-mobile {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-grow: 1;
        padding: 10px 15px;
        cursor: pointer;
        transition: all 0.2s ease-out;
    }

    .material-icons {
        color: #D9D9D9;
    }

    .nav-text-mobile {
        font-size: 20px;
        margin: auto;
        text-align: center;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    #search-container {
        position: relative;
    }

    .search-box {
        position: absolute;
        bottom: 67px;
        left: 50%;
        transform: translateX(-50%);
        width: 63%;
        max-width: 400px;
        padding: 20px;
        padding-bottom: 0px;
        border-radius: 30px 30px 0 0;
        background: rgba(33, 33, 33, 0.9);
        display: none;
    }

    .search-box.show {
        display: block;
    }

    .search-input {
        width: 100%;
        border: none;
        border-bottom: 1px solid #e9e9e9;
        font-size: 16px;
        background-color: transparent;
        color: #D9D9D9
    }

    .search-background {
        position: fixed;
        width: 100%;
        height: 100%;
        display: none;
    }


    /* NavBar pantallas grandes */
    #navPrincipal {
        background-color: #212121;
    }

    #categorias-collapse {
        background-color: #212121;
        color: #D9D9D9;
    }

    #categorias-collapse a:hover {
        color: #6D9886;
    }

    .nav-link-span {
        margin-left: -3px;
    }

    #inputSearch {
        width: 40vw;
        background: transparent;
        border: 1px solid rgb(181, 189, 196);
        font-size: 16px;
        height: 40px;
        line-height: 24px;
        padding: 7px 8px;
        color: #D9D9D9;
        box-shadow: none;
    }

    #inputSearch:focus {
        background-color: transparent;
        border-color: #6D9886;
        box-shadow: 0px 2px 0 #6D9886;
    }

    #inputSearch-button {
        background-color: transparent;
        border-radius: 0 20px 20px 0;
        color: #D9D9D9;
    }

    #inputSearch-button:hover {
        background-color: #6D9886;
        box-shadow: 2px 2px 0 #D9D9D9;
        border-color: #6D9999;
    }

    #table {
        color: white
    }

    .offcanvas {
        background-color: #212121;
        color: #D9D9D9;
    }

    .offcanvas-header .btn-close {
        background-color: #D9D9D9;
    }

    #shopping-card {
        color: #D9D9D9;
    }

    #shopping-card:hover {
        color: #6D9886;
    }

    #heart {
        color: #DC143C;
        text-decoration: none;
    }

    #heart:hover {
        color: #8B0000;
        cursor: pointer;
        text-decoration: none;
    }

    .nav-item i.fa-solid.fa-heart {
        text-decoration: none;
    }

    nav .navbar-nav .nav-link {
        color: #D9D9D9;
    }

    nav .nav-link:hover {
        color: #6D9886;
    }

    #buttonCart {
        background-color: #6D9886;
    }

    #logo:hover {
        border-color: #6D9886;
        box-shadow: 1px 1px 0 #6D9886;
    }

    #buttonCart:hover {
        background-color: #212121;
        border-color: #6D9886;
        box-shadow: 3px 3px 0 #6D9886;
        color: #D9D9D9;
    }

    .fa-solid.fa-bars {
        transition: transform 0.5s ease-in-out;
    }

    .fa-regular.fa-bars-sort {
        transition: transform 0.5s ease-in-out;
        transform: rotate(90deg);
    }

    .categorias {
        color: #D9D9D9;
    }
</style>
<?php /**PATH /home/fran/Escritorio/AWS/Aws/resources/views/livewire/navbar.blade.php ENDPATH**/ ?>