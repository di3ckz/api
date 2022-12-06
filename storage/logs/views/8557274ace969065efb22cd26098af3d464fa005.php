<?php $__env->startSection('title','Login Register Page'); ?>
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
                    <h2>Login to your account</h2>
                    <form action="<?php echo e(url('/user_login')); ?>" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Password" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="<?php echo e(url('/register_user')); ?>" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                        <input type="text" placeholder="Name" name="name" value="<?php echo e(old('name')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>

                        <input type="email" placeholder="Email Address" name="email" value="<?php echo e(old('email')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>

                        <input type="password" placeholder="Password" name="password" value="<?php echo e(old('password')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>

                        <input type="password" placeholder="Confirm Password" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>"/>
                        <span class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></span>

                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>