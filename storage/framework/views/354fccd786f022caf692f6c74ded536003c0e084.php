<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('page-title'); ?> <?php echo e(config('app.name')); ?></title>
    <link rel="shortcut icon" href="<?php echo e(Storage::url('Logo.svg')); ?>">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 (CSS y JS) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

    <!--Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>


    <!-- Styles -->
    <?php echo \Livewire\Livewire::styles(); ?>

    <!-- Scripts -->

</head>

<body>
    <div class="antialiased">
        <?php echo e($slot); ?>

    </div>
</body>

</html>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/layouts/guest.blade.php ENDPATH**/ ?>