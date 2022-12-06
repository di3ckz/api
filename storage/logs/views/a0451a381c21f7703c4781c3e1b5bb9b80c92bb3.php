<?php $__env->startSection('title','Add Category'); ?>
<?php $__env->startSection('content'); ?>
    <div id="breadcrumb"> <a href="<?php echo e(url('/admin')); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo e(route('category.index')); ?>">Categories</a> <a href="<?php echo e(route('category.create')); ?>" class="current">Add New Category</a> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Add New Category</h5>
                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" method="post" action="<?php echo e(route('category.store')); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="control-group<?php echo e($errors->has('name')?' has-error':''); ?>">
                            <label class="control-label">Category Name :</label>
                            <div class="controls">
                                <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required>
                                <span class="text-danger" id="chCategory_name" style="color: red;"><?php echo e($errors->first('name')); ?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Category Lavel :</label>
                            <div class="controls" style="width: 245px;">
                                <select name="parent_id" id="parent_id">
                                        <?php $__currentLoopData = $cate_levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                            <?php
                                                if($key!=0){
                                                    $subCategory=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                                    if(count($subCategory)>0){
                                                        foreach ($subCategory as $subCate){
                                                            echo '<option value="'.$subCate->id.'">&nbsp;&nbsp;--'.$subCate->name.'</option>';
                                                        }
                                                    }
                                                }
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Description :</label>
                            <div class="controls">
                                <textarea name="description" id="description" rows="3"><?php echo e(old('description')); ?></textarea>
                            </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('url')?' has-error':''); ?>">
                            <label class="control-label">URL (Start with http://) :</label>
                            <div class="controls">
                                <input type="text" name="url" id="url">
                                <span class="text-danger"><?php echo e($errors->first('url')); ?></span>
                            </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('status')?' has-error':''); ?>">
                            <label class="control-label">Enable :</label>
                            <div class="controls">
                                <input type="checkbox" name="status" id="status" value="1">
                                <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="control-label"></label>
                            <div class="controls">
                                <input type="submit" value="Add New" class="btn btn-success">
                            </div>
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