<?php $__env->startSection('title','Tablero'); ?>
<?php $__env->startSection('content'); ?>
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> inicio</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> Mi panel de control </a> </li>
                <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> tablas</a> </li>
                <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
                <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tablas </a> </li>
                <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Ancho completo</a> </li>
                <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> formilarios</a> </li>
                <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> botones</a> </li>
                <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>elementos</a> </li>
                <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendario</a> </li>
                <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsblock'); ?>
    <script src="<?php echo e(asset('js/excanvas.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.ui.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.resize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.gritter.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.interface.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.chat.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.wizard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.uniform.js')); ?>"></script>
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.popover.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.tables.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.form_validation.js')); ?>"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>