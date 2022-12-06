<?php $__env->startSection('title','Ajuste'); ?>
<?php $__env->startSection('content'); ?>
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="<?php echo e(url('/admin')); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">ajustes</a> </div>
    </div>
    <!--End-breadcrumbs-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <?php if(Session::has('message')): ?>
                            <h5 class="text-danger" style="color: #0e90d2;"><?php echo e(Session::get('message')); ?></h5>
                        <?php else: ?>
                            <h5>Validación de seguridad</h5>
                        <?php endif; ?>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/update-pwd')); ?>" name="password_validate" id="password_validate" novalidate="novalidate">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="control-group">
                                <label class="control-label">Contraseña actual</label>
                                <div class="controls">
                                    <input type="password" name="pwd_current" id="pwd_current" />
                                    &nbsp;<span id="chkPwd"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nueva contraseña</label>
                                <div class="controls">
                                    <input type="password" name="pwd_new" id="pwd_new" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Confirmar contraseña</label>
                                <div class="controls">
                                    <input type="password" name="pwdnew_confirm" id="pwdnew_confirm" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Update Password" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsblock'); ?>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.ui.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.uniform.js')); ?>"></script>
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.form_validation.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.tables.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.popover.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>