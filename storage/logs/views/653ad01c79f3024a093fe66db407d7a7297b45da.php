<?php $__env->startSection('title','Add Products Page'); ?>
<?php $__env->startSection('content'); ?>
    <div id="breadcrumb"> <a href="<?php echo e(url('/admin')); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> inicio</a> <a href="<?php echo e(route('product.index')); ?>">Productos</a> <a href="<?php echo e(route('product.create')); ?>" class="current">añadir producto</a> </div>
    <div class="container-fluid">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <strong>¡Bien hecho! &nbsp;</strong><?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Añadir nuevos productos</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="<?php echo e(route('product.store')); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="control-group">
                        <label class="control-label">Select Category</label>
                        <div class="controls">
                            <select name="categories_id" style="width: 415px;">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                    <?php
                                        if($key!=0){
                                            $sub_categories=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                            if(count($sub_categories)>0){
                                                foreach ($sub_categories as $sub_category){
                                                    echo '<option value="'.$sub_category->id.'">&nbsp;&nbsp;--'.$sub_category->name.'</option>';
                                                }
                                            }
                                        }
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Nombre</label>
                        <div class="controls<?php echo e($errors->has('p_name')?' has-error':''); ?>">
                            <input type="text" name="p_name" id="p_name" class="form-control" value="<?php echo e(old('p_name')); ?>" title="" required="required" style="width: 400px;">
                            <span class="text-danger"><?php echo e($errors->first('p_name')); ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_code" class="control-label">Codigo</label>
                        <div class="controls<?php echo e($errors->has('p_code')?' has-error':''); ?>">
                            <input type="text" name="p_code" id="p_code" class="form-control" value="<?php echo e(old('p_code')); ?>" title="" required="required" style="width: 400px;">
                            <span class="text-danger"><?php echo e($errors->first('p_code')); ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_color" class="control-label">Color</label>
                        <div class="controls<?php echo e($errors->has('p_color')?' has-error':''); ?>">
                            <input type="text" name="p_color" id="p_color" value="<?php echo e(old('p_color')); ?>" required="required" style="width: 400px;">
                            <span class="text-danger"><?php echo e($errors->first('p_color')); ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="description" class="control-label">Descripcion</label>
                        <div class="controls<?php echo e($errors->has('description')?' has-error':''); ?>">
                            <textarea class="textarea_editor span12" name="description" id="description" rows="6" placeholder="Product Description" style="width: 580px;"><?php echo e(old('description')); ?></textarea>
                            <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="price" class="control-label">Precio</label>
                        <div class="controls<?php echo e($errors->has('price')?' has-error':''); ?>">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="price" id="price" class="" value="<?php echo e(old('price')); ?>" title="" required="required">
                                <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Cargar de imágenes</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Añadir nuevo producto</button>
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