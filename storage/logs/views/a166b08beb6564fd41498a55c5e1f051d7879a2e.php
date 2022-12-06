<?php $__env->startSection('title','Agregar nurevo cupon'); ?>
<?php $__env->startSection('content'); ?>
    <div id="breadcrumb"> <a href="<?php echo e(url('/admin')); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Inicio</a> <a href="<?php echo e(route('coupon.index')); ?>">Cupones</a> <a href="<?php echo e(route('coupon.create')); ?>" class="current">Agregar nuevo cupon</a> </div>
    <div class="container-fluid">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <strong>Bien hecho! &nbsp;</strong><?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Agregar nuevo cupon</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="<?php echo e(route('coupon.store')); ?>" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="control-group">
                        <label for="coupon_code" class="control-label">Código promocional</label>
                        <div class="controls<?php echo e($errors->has('coupon_code')?' has-error':''); ?>">
                            <input type="text" name="coupon_code" id="coupon_code" class="form-control" value="<?php echo e(old('coupon_code')); ?>"
                                   title="" required="required" minlength="5" maxlength="15" style="width: 400px;">
                            <span class="text-danger"><?php echo e($errors->first('coupon_code')); ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="amount" class="control-label">Monto</label>
                        <div class="controls<?php echo e($errors->has('amount')?' has-error':''); ?>">
                            <input type="number" min="0" name="amount" id="amount" class="form-control" value="<?php echo e(old('amount')); ?>" title="" required="required" style="width: 400px;">
                            <span class="text-danger"><?php echo e($errors->first('amount')); ?></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="amount_type" class="control-label">Tipo de cantidad</label>
                        <div class="controls<?php echo e($errors->has('amount_type')?' has-error':''); ?>">
                            <select name="amount_type" id="amount_type" class="form-control" style="width: 415px;">
                                <option value="Percentage">Porcentage</option>
                            </select>
                            <span class="text-danger"><?php echo e($errors->first('amount_type')); ?></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="expiry_date" class="control-label">Fecha de caducidad</label>
                        <div class="controls<?php echo e($errors->has('expiry_date')?' has-error':''); ?>">
                            <div class="input-prepend">
                                <div  data-date="12-02-2012" class="input-append date datepicker">
                                    <input type="text" name="expiry_date" id="expiry_date" value="<?php echo e(old('expiry_date')); ?>"  data-date-format="yyyy-mm-dd" class="span11" style="width: 375px;" placeholder="yyyy-mm-dd">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>
                            <span class="text-danger"><?php echo e($errors->first('expiry_date')); ?></span>
                        </div>
                    </div>

                    <div class="control-group<?php echo e($errors->has('status')?' has-error':''); ?>">
                        <label class="control-label">Activar :</label>
                        <div class="controls">
                            <input type="checkbox" name="status" id="status" value="1">
                            <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Añadir nuevo cupon</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsblock'); ?>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.ui.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-colorpicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.toggle.buttons.js')); ?>"></script>
    <script src="<?php echo e(asset('js/masked.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.uniform.js')); ?>"></script>
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.form_common.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wysihtml5-0.3.0.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-wysihtml5.js')); ?>"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>