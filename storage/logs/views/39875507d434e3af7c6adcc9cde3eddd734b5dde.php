<?php $__env->startSection('title','List Products'); ?>
<?php $__env->startSection('content'); ?>
    <div id="breadcrumb"> <a href="<?php echo e(url('/admin')); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> inicio</a> <a href="<?php echo e(route('product.index')); ?>" class="current">Productos</a></div>
    <div class="container-fluid">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <strong>¡Bien hecho!</strong> <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Lista Productos</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Producto Nombre</th>
                        <th>En Categoría</th>
                        <th>Code Of Product</th>
                        <th>Color del producto</th>
                        <th>Precio</th>
                        <th>Galería de imágenes</th>
                        <th>Añadir atributo</th>
                        <th> Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++; ?>
                        <tr class="gradeC">
                            <td><?php echo e($i); ?></td>
                            <td style="text-align: center;"><img src="<?php echo e(url('products/small',$product->image)); ?>" alt="" width="50"></td>
                            <td style="vertical-align: middle;"><?php echo e($product->p_name); ?></td>
                            <td style="vertical-align: middle;"><?php echo e($product->category->name); ?></td>
                            <td style="vertical-align: middle;"><?php echo e($product->p_code); ?></td>
                            <td style="vertical-align: middle;"><?php echo e($product->p_color); ?></td>
                            <td style="vertical-align: middle;"><?php echo e($product->price); ?></td>
                            <td style="vertical-align: middle;text-align: center;"><a href="<?php echo e(route('image-gallery.show',$product->id)); ?>" class="btn btn-default btn-mini">Add Images</a></td>
                            <td style="vertical-align: middle;text-align: center;"><a href="<?php echo e(route('product_attr.show',$product->id)); ?>" class="btn btn-success btn-mini">Add Attr</a></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal<?php echo e($product->id); ?>" data-toggle="modal" class="btn btn-info btn-mini">Ver</a>
                                <a href="<?php echo e(route('product.edit',$product->id)); ?>" class="btn btn-primary btn-mini">Editar</a>
                                <a href="javascript:" rel="<?php echo e($product->id); ?>" rel1="delete-product" class="btn btn-danger btn-mini deleteRecord">Eliminar</a>
                            </td>
                        </tr>
                        
                        <div id="myModal<?php echo e($product->id); ?>" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3><?php echo e($product->p_name); ?></h3>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img src="<?php echo e(url('products/small',$product->image)); ?>" width="100" alt="<?php echo e($product->p_code); ?>"></div>
                                <p class="text-center"><?php echo e($product->description); ?></p>
                            </div>
                        </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
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
    <script src="<?php echo e(asset('js/matrix.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.tables.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.popover.js')); ?>"></script>
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