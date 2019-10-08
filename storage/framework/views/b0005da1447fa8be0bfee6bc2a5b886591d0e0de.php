<?php $__env->startSection('content'); ?>

<!-- Main content -->
<div class="content-wrapper">
            <!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"><?php echo app('translator')->getFromJson('home.home'); ?></span> - <?php echo app('translator')->getFromJson('home.wating_lists'); ?></h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo e(URL::to('ar/admin/home')); ?>"><i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a></li>
            <li class="active"><?php echo app('translator')->getFromJson('home.wating_lists'); ?></li>
        </ul>

        <ul class="breadcrumb-elements">
            <!-- <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    <?php echo app('translator')->getFromJson('home.settings'); ?>
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="<?php echo e(URL::to('ar/admin/setting')); ?>"><i class="icon-gear"></i><?php echo app('translator')->getFromJson('home.general_settings'); ?></a></li>
                <li><a href="<?php echo e(URL::to('ar/admin/wating_lists/export')); ?>"><i class="icon-database-export"></i><?php echo app('translator')->getFromJson('home.export_exel_sheet'); ?></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /page header -->

    <!-- Content area -->
<div class="content">
        <!-- Main charts -->
        <div class="row">
        <div class="panel panel-flat ">
        <!-- table lists -->
        <?php echo $__env->make('dashboard.wating_list.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="table-responsive">
        <?php if(Session('success')): ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo app('translator')->getFromJson('home.success'); ?>!</strong> <?php echo e(session('success')); ?>.
        </div>
        <?php endif; ?>
            <table class="table text-nowrap" id="table">
                <thead>                  
                <tr>                                     
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.name'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.email'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.city'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.phone'); ?></th>
                    <!-- <th class="col-md-2"><?php echo app('translator')->getFromJson('home.status'); ?></th> -->
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.type'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.delete'); ?></th>
                    <!-- <th class="col-md-2"><?php echo app('translator')->getFromJson('home.reply'); ?></th> -->
                    
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                
                    <td><span class="text-semibold"><?php echo e(@$list->name); ?></span></td>
                    <td><span class="text-muted"><?php echo e(@$list->email); ?></span></td>
                    <td><span class="text-semibold"><?php echo e($list->address_info->$name); ?></td>
                    <td><h6 class="text-semibold"><?php echo e(@$list->phone); ?></h6></td>
                    <!-- <td><h6 class="text-semibold"><?php echo e(@$list->status); ?></h6></td> -->
                    <td><h6 class="text-semibold"><?php echo e(@$list->type); ?></h6></td>
                    <td>
                    <?php echo $__env->make('dashboard.wating_list.delete_from_list', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!-- <a href="<?php echo e(URL::to('/admin/wating_lists/').'/'.$list->id.'/delete'); ?>" class="btn btn-danger "> <li class="icon-trash"></li></a> -->
                    </td> 
                    <td>
                    <!-- <a href="<?php echo e(URL::to('/admin/reports_browsing/').'/'.$list->id); ?>" class="btn btn-primary"> <li class="icon-reply"></li></a> -->
                    </td>                                
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div style="padding:0 22%; margin-bottom: 24px;" class="center-block">
            <?php echo e(@$lists->links()); ?>

            </div>

        </div>
        <!-- table reports -->
    </div>
</div>

</div>
    <!-- Content area -->

</div>
<!-- Main content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>