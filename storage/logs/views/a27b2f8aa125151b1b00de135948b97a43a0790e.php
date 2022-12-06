<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title','Master Page'); ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-responsive.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/colorpicker.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/uniform.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/select2.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/fullcalendar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/matrix-style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/matrix-media.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-wysihtml5.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link href="<?php echo e(asset('font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery.gritter.css')); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php echo $__env->make('backEnd.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('backEnd.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--main-container-part-->
<div id="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('backEnd.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('jsblock'); ?>
</body>
</html>
