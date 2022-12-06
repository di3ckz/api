<?php $__env->startSection('title','carrito de compras'); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section id="cart_items">
        <div class="container">
            <?php if(Session::has('message')): ?>
                <div class="alert alert-success text-center" role="alert">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Artículo</td>
                        <td class="description"></td>
                        <td class="price">Precio</td>
                        <td class="quantity">Cantidad</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cart_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $image_products=DB::table('products')->select('image')->where('id',$cart_data->products_id)->get();
                            ?>
                            <tr>
                                <td class="cart_product">
                                    <?php $__currentLoopData = $image_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href=""><img src="<?php echo e(url('products/small',$image_product->image)); ?>" alt="" style="width: 100px;"></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?php echo e($cart_data->product_name); ?></a></h4>
                                    <p><?php echo e($cart_data->product_code); ?> | <?php echo e($cart_data->size); ?></p>
                                </td>
                                <td class="cart_price">
                                    <p>$<?php echo e($cart_data->price); ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="<?php echo e(url('/cart/update-quantity/'.$cart_data->id.'/1')); ?>"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo e($cart_data->quantity); ?>" autocomplete="off" size="2">
                                        <?php if($cart_data->quantity>1): ?>
                                            <a class="cart_quantity_down" href="<?php echo e(url('/cart/update-quantity/'.$cart_data->id.'/-1')); ?>"> - </a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">$ <?php echo e($cart_data->price*$cart_data->quantity); ?></p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="<?php echo e(url('/cart/deleteItem',$cart_data->id)); ?>"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>¿Qué te gustaría hacer a continuación?</h3>
                <p>Elige si tienes un código de descuento o puntos de recompensa que quieras usar o si quieres estimar tu costo de entrega.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?php if(Session::has('message_coupon')): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?php echo e(Session::get('message_coupon')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="chose_area" style="padding: 20px;">
                        <form action="<?php echo e(url('/apply-coupon')); ?>" method="post" role="form">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input type="hidden" name="Total_amountPrice" value="<?php echo e($total_price); ?>">
                            <div class="form-group">
                                <label for="coupon_code">Codigo de Cupon</label>
                                <div class="controls <?php echo e($errors->has('coupon_code')?'has-error':''); ?>">
                                    <input type="text" class="form-control" name="coupon_code" id="coupon_code" placeholder="Promoción por cupón">
                                    <span class="text-danger"><?php echo e($errors->first('coupon_code')); ?></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Aplicar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <?php if(Session::has('message_apply_sucess')): ?>
                        <div class="alert alert-success text-center" role="alert">
                            <?php echo e(Session::get('message_apply_sucess')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="total_area">
                        <ul>
                            <?php if(Session::has('discount_amount_price')): ?>
                                <li>Sub Total <span>$ <?php echo e($total_price); ?></span></li>
                                <li>Descuento de cupón (Code : <?php echo e(Session::get('coupon_code')); ?>) <span>$ <?php echo e(Session::get('discount_amount_price')); ?></span></li>
                                <li>Total <span>$ <?php echo e($total_price-Session::get('discount_amount_price')); ?></span></li>
                            <?php else: ?>
                                <li>Total <span>$ <?php echo e($total_price); ?></span></li>
                            <?php endif; ?>
                        </ul>
                        <div style="margin-left: 20px;"><a class="btn btn-default check_out" href="<?php echo e(url('/check-out')); ?>">pagar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>