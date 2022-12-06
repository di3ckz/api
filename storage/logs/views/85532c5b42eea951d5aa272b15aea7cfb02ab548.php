
<?php $__env->startSection('title','registro'); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>ingresa a tu cuenta </h2>
                    <form action="<?php echo e(url('/user_login')); ?>" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="email" placeholder="correo" name="email"/>
                        <input type="password" placeholder="Contraseña" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Mantenme conectado
                        </span>
                        <button type="submit" class="btn btn-default"> Bienvenido </button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">O</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2> Registro de nuevo usuario</h2>
                    <form action="<?php echo e(url('/register_user')); ?>" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                        <input type="text" placeholder="Nombre" name="name" value="<?php echo e(old('name')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>

                        <input type="email" placeholder="correo electronico" name="email" value="<?php echo e(old('email')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>

                        <input type="password" placeholder="contraseña" name="password" value="<?php echo e(old('password')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>

                        <input type="password" placeholder="confirma contraseña" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></span>

                        <button type="submit" class="btn btn-default"> Bienvenido </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>