<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $__env->yieldContent('title','Master Page'); ?></title>
    <link href="<?php echo e(asset('frontEnd/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontEnd/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontEnd/css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontEnd/css/price-range.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontEnd/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontEnd/css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontEnd/css/responsive.css')); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo e(asset('frontEnd/js/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(asset('frontEnd/js/respond.min.js')); ?>"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo e(asset('easyzoom/css/easyzoom.css')); ?>" />
</head><!--/head-->

<body>
<?php echo $__env->make('frontEnd.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('slider'); ?>
    <?php echo $__env->make('frontEnd.layouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('frontEnd.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src="<?php echo e(asset('frontEnd/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('frontEnd/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontEnd/js/jquery.scrollUp.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontEnd/js/price-range.js')); ?>"></script>
<script src="<?php echo e(asset('frontEnd/js/jquery.prettyPhoto.js')); ?>"></script>
<script src="<?php echo e(asset('frontEnd/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('easyzoom/dist/easyzoom.js')); ?>"></script>
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>
</body>
</html>