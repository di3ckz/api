<div class="left-sidebar">
    <?php
        $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
    ?>
    <h2>Categorias</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php echo e($category->id); ?>">
                            <?php if(count($sub_categories)>0): ?>
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            <?php endif; ?>
                        </a>
                            <a href="<?php echo e(route('cats',$category->id)); ?>"><?php echo e($category->name); ?></a>

                    </h4>
                </div>
                <?php if(count($sub_categories)>0): ?>
                    <div id="sportswear<?php echo e($category->id); ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('cats',$sub_category->id)); ?>"><?php echo e($sub_category->name); ?> </a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!--/category-products-->

</div>