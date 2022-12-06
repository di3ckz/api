<?php $__env->startSection('title','Review Order Page'); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3 class="text-center">SU PEDIDO HA SIDO REALIZADO</h3>
        <p class="text-center"> Gracias por su pedido que utilizan opciones en efectivo en la entrega</p>
        <p class="text-center">Nos ponemos en contacto con usted por su correo electrónico (<b><?php echo e($user_order->users_email); ?></b>) o número de teléfono (<b><?php echo e($user_order->mobile); ?></b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>