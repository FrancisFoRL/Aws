<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('page-title'); ?> <?php echo e(config('app.name')); ?></title>

    <!-- Fonts -->
    <link rel="shortcut icon" href="<?php echo e(Storage::url('Logo.svg')); ?>">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 (CSS y JS) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    


    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <div class="sticky-top" id="app">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navbar')->html();
} elseif ($_instance->childHasBeenRendered('3a9zBI6')) {
    $componentId = $_instance->getRenderedChildComponentId('3a9zBI6');
    $componentTag = $_instance->getRenderedChildComponentTagName('3a9zBI6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3a9zBI6');
} else {
    $response = \Livewire\Livewire::mount('navbar');
    $html = $response->html();
    $_instance->logRenderedChild('3a9zBI6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html>






    <!-- Bootstrap 5 (CSS y JS) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

    <!--Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <!-- Styles -->
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="antialiased" style="background-color: #F6F6F6;">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('banner'); ?>
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

    <div class="min-h-screen bg-gray-100">
        

        <!-- Page Heading -->
        <?php if(isset($header)): ?>
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <?php echo e($header); ?>

            </div>
        </header>
        <?php endif; ?>

        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>

    <?php echo $__env->yieldPushContent('modals'); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>


    <script>
        document.getElementById("imagen").addEventListener("change", cambiarImagen);
        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("img").setAttribute("src", event.target.result)
            }
            reader.readAsDataURL(file);
        }
    </script>

    <?php echo $__env->yieldPushContent('modals'); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>


    <script>
        Livewire.on('alert', function(txt) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: txt,
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>

    
    <script>
        Livewire.on('info', function(txt) {
            Swal.fire({
                icon: 'success',
                title: txt,
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>

    
    <?php if(session('info')): ?>
    <script>
        Swal.fire({
                icon: 'success',
                title: '<?php echo e(session('info')); ?>',
                showConfirmButton: false,
                timer: 1500
            })
    </script>
    <?php endif; ?>
</body>

<style>
    /* :focus {
        outline: none;
    }

    :focus-visible {
        outline: none;
        position: relative;
    }

    :focus-visible::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        border: 2px solid red !important;
    } */
</style>

</html>
<?php /**PATH /home/fran/Escritorio/AWS/Aws/resources/views/layouts/app.blade.php ENDPATH**/ ?>