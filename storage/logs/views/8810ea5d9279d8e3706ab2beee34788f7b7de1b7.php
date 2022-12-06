<?php $__env->startSection('title','Pagina detalle'); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php echo $__env->make('frontEnd.layouts.category_menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-9 padding-right">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
        <div class="product-details"><!--product-details-->

            <div class="col-sm-5">
                <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                    <a href="<?php echo e(url('products/large',$detail_product->image)); ?>">
                        <img src="<?php echo e(url('products/small',$detail_product->image)); ?>" alt="" id="dynamicImage"/>
                    </a>
                </div>

                <ul class="thumbnails" style="margin-left: -10px;">
                    <li>
                        <?php $__currentLoopData = $imagesGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagesGallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(url('products/large',$imagesGallery->image)); ?>" data-standard="<?php echo e(url('products/small',$imagesGallery->image)); ?>">
                                <img src="<?php echo e(url('products/small',$imagesGallery->image)); ?>" alt="" width="75" style="padding: 8px;">
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-7">
                <form action="<?php echo e(route('addToCart')); ?>" method="post" role="form">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="products_id" value="<?php echo e($detail_product->id); ?>">
                    <input type="hidden" name="product_name" value="<?php echo e($detail_product->p_name); ?>">
                    <input type="hidden" name="product_code" value="<?php echo e($detail_product->p_code); ?>">
                    <input type="hidden" name="product_color" value="<?php echo e($detail_product->p_color); ?>">
                    <input type="hidden" name="price" value="<?php echo e($detail_product->price); ?>" id="dynamicPriceInput">
                    <div class="product-information"><!--/product-information-->
                        <img src="<?php echo e(asset('frontEnd/images/product-details/new.jpg')); ?>" class="newarrival" alt="" />
                        <h2><?php echo e($detail_product->p_name); ?></h2>
                        <p>ID Codigo: <?php echo e($detail_product->p_code); ?></p>
                        <span>
                            <select name="size" id="idSize" class="form-control">
                        	<option value="">Seleccione Tamaño</option>
                            <?php $__currentLoopData = $detail_product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attrs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($detail_product->id); ?>-<?php echo e($attrs->size); ?>"><?php echo e($attrs->size); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </span><br>
                        <span>
                            <span id="dynamic_price"> MXN$<?php echo e($detail_product->price); ?></span>
                            <label>CANTIDAD:</label>
                            <input type="text" name="quantity" value="<?php echo e($totalStock); ?>" id="inputStock"/>
                            <?php if($totalStock>0): ?>
                            <button type="submit" class="btn btn-fefault cart" id="buttonAddToCart">
                                <i class="fa fa-shopping-cart"></i>
                                Añadir a compra
                            </button>
                            <?php endif; ?>
                        </span>
                        <p><b>Disponibilidad:</b>
                            <?php if($totalStock>0): ?>
                                <span id="availableStock">en almacen</span>
                            <?php else: ?>
                                <span id="availableStock">Fuera de almacen </span>
                            <?php endif; ?>
                        </p>
                        <p><b>Condicion:</b> Nuevo</p>
                    </div><!--/product-information-->
                </form>

            </div>
        </div><!--/product-details-->

        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Detalles</a></li>
                    <li><a href="#companyprofile" data-toggle="tab">Perfil de la empresa</a></li>
                    <li><a href="#reviews" data-toggle="tab">Comentarios (5)</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details" >
                    <?php echo e($detail_product->description); ?>

                </div>

                <div class="tab-pane fade" id="companyprofile" >
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo e(asset('frontEnd/images/home/gallery1.jpg')); ?>" alt="" />
                                    <h2>$56000</h2>
                                    <p> Polo Edición Negra</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo e(asset('frontEnd/images/home/gallery3.jpg')); ?>" alt="" />
                                    <h2>$56000</h2>
                                    <p> Polo Edición Negra</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo e(asset('frontEnd/images/home/gallery2.jpg')); ?>" alt="" />
                                    <h2>$56000</h2>
                                    <p>Polo Edición Negra</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo e(asset('frontEnd/images/home/gallery4.jpg')); ?>" alt="" />
                                    <h2>$56000</h2>
                                    <p>Polo Edición Negra</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="reviews" >
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i></a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>11:39 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>13 Diciembre 2020</a></li>
                        </ul>
                        <p>para nuestra empresa  nos es de valiosa su opinion por eso dejamos a su disposicion este apartado para que nos digas sus inquietudes.  </p>
                        <p><b>Escriba su opinión</b></p>

                        <form action="#">
										<span>
											<input type="text" placeholder="nombre de usuario"/>
											<input type="email" placeholder="correo electrinico"/>
										</span>
                            <textarea name="" ></textarea>
                            <b>Clasificación: </b> <img src="<?php echo e(asset('frontEnd/images/product-details/rating.png')); ?>" alt="" />
                            <button type="button" class="btn btn-default pull-right">
                            Enviar
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">artículos recomendados</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $countChunk=0;?>
                    <?php $__currentLoopData = $relateProducts->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $countChunk++; ?>
                        <div class="item<?php if($countChunk==1){ echo' active';} ?>">
                            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?php echo e(url('/products/small',$item->image)); ?>" alt="" style="width: 150px;"/>
                                                <h2><?php echo e($item->price); ?></h2>
                                                <p><?php echo e($item->p_name); ?></p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->

    </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>