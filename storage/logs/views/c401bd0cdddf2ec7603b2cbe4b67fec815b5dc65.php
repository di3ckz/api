<?php $__env->startSection('title','mi cuenta'); ?>
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
                    <form action="<?php echo e(url('/update-profile',$user_login->id)); ?>" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <?php echo e(method_field('PUT')); ?>

                        <legend>informacion personal</legend>
                        <div class="form-group <?php echo e($errors->has('name')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo e($user_login->name); ?>" placeholder="Nombre">
                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('address')?'has-error':''); ?>">
                            <input type="text" class="form-control" value="<?php echo e($user_login->address); ?>" name="address" id="address" placeholder="direccion">
                            <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('city')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="city" value="<?php echo e($user_login->city); ?>" id="city" placeholder="ciudad">
                            <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('state')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="state" value="<?php echo e($user_login->state); ?>" id="state" placeholder="estado ">
                            <span class="text-danger"><?php echo e($errors->first('state')); ?></span>
                        </div>
                        <div class="form-group">
                            <select name="country" id="country" class="form-control">
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($country->country_name); ?>" <?php echo e($user_login->country==$country->country_name?' selected':''); ?>><?php echo e($country->country_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group <?php echo e($errors->has('pincode')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="pincode" value="<?php echo e($user_login->pincode); ?>" id="pincode" placeholder="codigo posta">
                            <span class="text-danger"><?php echo e($errors->first('pincode')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('mobile')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="mobile" value="<?php echo e($user_login->mobile); ?>" id="mobile" placeholder="telefono">
                            <span class="text-danger"><?php echo e($errors->first('mobile')); ?></span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Actualiza tu informacion</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">o</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <form action="<?php echo e(url('/update-password',$user_login->id)); ?>" method="post" class="form-horizontal">
                        <legend>nueva contraseña</legend>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <?php echo e(method_field('PUT')); ?>

                        <div class="form-group <?php echo e($errors->has('password')?'has-error':''); ?>">
                            <input type="password" class="form-control" name="password" id="password" placeholder="contraseña Vieja">
                            <?php if(Session::has('oldpassword')): ?>
                                <span class="text-danger"><?php echo e(Session::get('oldpassword')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('newPassword')?'has-error':''); ?>">
                            <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Nueva contraseña">
                            <span class="text-danger"><?php echo e($errors->first('newPassword')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('newPassword_confirmation')?'has-error':''); ?>">
                            <input type="password" class="form-control" name="newPassword_confirmation" id="newPassword_confirmation" placeholder="Confirmar contraseña">
                            <span class="text-danger"><?php echo e($errors->first('newPassword_confirmation')); ?></span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">actualiza tu contraseña</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>