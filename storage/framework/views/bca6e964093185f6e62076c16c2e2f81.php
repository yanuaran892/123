<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (! empty(trim($__env->yieldContent('title')))): ?>
        <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
    <?php else: ?>
        <title><?php echo e(config('app.name')); ?></title>
    <?php endif; ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(url(asset('favicon.ico'))); ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<body>
    <?php echo $__env->yieldContent('body'); ?>
</body>

</html>
<?php /**PATH E:\UAS PAW\sea-cinema-tix-main\resources\views/layouts/base.blade.php ENDPATH**/ ?>