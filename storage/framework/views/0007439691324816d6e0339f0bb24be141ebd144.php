<nav class="navbar navbar-expand-sm bg-body-tertiary d-none d-md-block" id="navPrincipal">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="<?php echo e(route('inicio')); ?>">
                <img src="<?php echo e(Storage::url('Logo.svg')); ?>" alt="El Rincón de las letras" id='logo' width="50" height="50"
                    class="me-4">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nosotros</a>
                </li>
            </ul>
            <div class="d-flex mx-auto justify-md-content-center">
                <input class="form-control me-2 rounded-pill pl-2" id="inputSearch" type="search" placeholder="Buscar"
                    aria-label="Search">
                
            </div>
            <ul class="navbar-nav ms-auto me-2 align-items-center">
                <li class="nav-item me-3">
                    <i class="fa-solid fa-cart-shopping" id="shopping-card" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
                </li>
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
                            <li><a href="" class="dropdown-item d-flex justify-content-between align-items-center">Mis
                                    Pedidos<i class="fa-solid fa-box-open"></i></a></li>
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
                </li>
            </ul>
        </div>
    </div>
</nav>


<nav class="navbar d-md-none d-sm-block navbar-fixed-bottom" style="white">
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="<?php echo e(route('inicio')); ?>">
            <img src="<?php echo e(Storage::url('Logo.svg')); ?>" alt="El Rincón de las letras" id='logo' width="50" height="50"
                class="me-4">
        </a>
    </div>
    <div class="navbar-nav" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
        </ul>
    </div>
</nav>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.cart-show-inicio')->html();
} elseif ($_instance->childHasBeenRendered('l2604096797-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2604096797-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2604096797-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2604096797-0');
} else {
    $response = \Livewire\Livewire::mount('cart.cart-show-inicio');
    $html = $response->html();
    $_instance->logRenderedChild('l2604096797-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<style>
    nav {
        background-color: #212121;
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
        box-shadow: 2px 2px 0 #6D9886;
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
        background-color: transparent;
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


    .navbar-fixed-bottom {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
    }
</style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/livewire/nav-bar-show.blade.php ENDPATH**/ ?>