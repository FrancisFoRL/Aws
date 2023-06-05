<!-- Offcanvas Shopping Card -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMobile" aria-labelledby="offcanvasMobileLabel">
    <div class="offcanvas-header">
        <p id="offcanvasMobileLabel" class="visually-hidden">Menú móvil</p>
        <?php if(Route::has('login')): ?>

        <?php if(auth()->guard()->check()): ?>
        <img src="<?php echo e(Auth::user()->profile_photo_url ?: Storage::url('user.png')); ?>" class="rounded-circle object-cover"
            width="35" height="35" alt="Imagen de perfil del usuario">
        <p class="my-auto fw-bold"> Hola, <?php echo e(Auth::user()->name); ?> </p>

        <?php else: ?>
        <img src="<?php echo e(Storage::url('user.png')); ?>" class="rounded-circle object-cover dropdown-toggle" href="#"
            role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" width="35" height="35"
            alt="Imagen de perfil">

        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end " aria-labelledby="dropdownMenuLink"
            style="width: 10vw;">
            <li><a href="<?php echo e(route('login')); ?>" class="dropdown-item d-flex justify-content-between align-items-center"
                    href="#">Inicie Sesión<i class="fa-solid fa-right-to-bracket"></i></a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item d-flex justify-content-between align-items-center"
                    href="<?php echo e(route('register')); ?>">Registrarse<i class="fa-solid fa-pencil"></i></a></li>
        </ul>
        <?php endif; ?>
        <?php endif; ?>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex align-items-center justify-content-end pe-4">
        <ul class="fs-1 list-unstyled">
            <?php if(Auth::user()): ?>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('profile.show')); ?>">Mis Datos</a>
            </li>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('pedidos')); ?>">Mis Pedidos</a>
            </li>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('opiniones')); ?>">Mis Reseñas</a>
            </li>
            <?php else: ?>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('login')); ?>">Iniciar Sesión</a>
            </li>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('register')); ?>">Registrarse</a>
            </li>
            <?php endif; ?>
            <li class="mb-4 text-end"><span type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategory"
                    aria-controls="offcanvasRight">
                    Categorias
                </span></li>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('contacto.show')); ?>">Contacto</a>
            </li>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('info-legal')); ?>">Información
                    Legal</a>
            </li>
            <li class="mb-4 text-end"><a class="text-decoration-none" href="<?php echo e(route('privacidad')); ?>">Política de
                    Privacidad</a>
            </li>
            <?php if(Auth::user()): ?>
            <li class="mb-4 text-end">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar
                    Sesión</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<!-- Offcanvas Categorias -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
    <div class="offcanvas-header p-4">
        <p class="offcanvas-title fs-1" id="offcanvasCategoryLabel" class="visually-hidden">Categorias</p>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex align-items-center justify-content-end pe-4">
        <ul class="fs-3 list-unstyled py-3">
            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-2 text-end"><a href="<?php echo e(route('category.show', $categoria->slug)); ?>"
                    class="text-decoration-none"><?php echo e($categoria->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

</div>

<style>
    .offcanvas ul li a {
        color: #D9D9D9;
    }
</style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/components/offcanvas-mobile.blade.php ENDPATH**/ ?>