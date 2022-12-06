<?php $__env->startSection('title','Add Images Gallery'); ?>
<?php $__env->startSection('content'); ?>
    <div id="breadcrumb"> <a href="<?php echo e(url('/admin')); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo e(route('product.index')); ?>">Products</a> <a href="#" class="current">Add Images Gallery</a> </div>
    <div class="container-fluid">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong><?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                        <h5>Product : <?php echo e($product->p_name); ?></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <ul class="recent-posts">
                            <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo e(url('products/small',$product->image)); ?>"> </div>
                                <div class="article-post">
                                    <span class="user-info">Product Code : <b><?php echo e($product->p_code); ?></b></span>
                                    <p>Product Color : <b><?php echo e($product->p_color); ?></b></p>
                                </div>
                            </li>
                            <li>
                                <form action="<?php echo e(route('image-gallery.store')); ?>" method="post" role="form" enctype="multipart/form-data">
                                    <legend>Can Add Multi Images</legend>
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="form-group">
                                        <input type="hidden" name="products_id" value="<?php echo e($product->id); ?>">
                                        <input type="file" name="image[]" id="id_imageGallery" class="form-control" multiple="multiple" required>
                                        <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>

                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
                        <h5>List Images Galleries</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                                <?php $__currentLoopData = $imageGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageGallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="taskDesc" style="text-align: center;vertical-align: middle;"><?php echo e($i++); ?></td>
                                        <td class="taskOptions" style="text-align: center;vertical-align: middle;"><img src="<?php echo e(url('products/small',$imageGallery->image)); ?>" class="img-responsive" alt="Image" width="60"></td>
                                        <td style="text-align: center;vertical-align: middle;"><a href="javascript:" rel="<?php echo e($imageGallery->id); ?>" rel1="delete-imageGallery" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>