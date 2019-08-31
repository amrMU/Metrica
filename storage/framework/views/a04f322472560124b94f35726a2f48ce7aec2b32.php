<?php $__env->startSection('content'); ?>
	
        <!-- Main content -->
        <div class="content-wrapper">
        	            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                    <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"><?php echo app('translator')->getFromJson('home.home'); ?></span> - <?php echo app('translator')->getFromJson('home.full_report'); ?></h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(URL::to('ar/admin/home')); ?>"><i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a></li>
                        <li class="active"><?php echo app('translator')->getFromJson('home.full_report'); ?></li>
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
                    <!-- table reports -->
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo e(Session::get('success')); ?>

                        </div>
                        <?php endif; ?>
                   <div class="table-responsive">
                        <table class="table text-nowrap datatable-responsive" >
                                    <thead>
                                        <tr>
                                        <th><?php echo app('translator')->getFromJson('home.user'); ?></th>                                        
                                        <th class="col-md-2"><?php echo app('translator')->getFromJson('home.action'); ?></th>
                                        <th class="col-md-2"><?php echo app('translator')->getFromJson('home.process'); ?></th>
                                        <th class="col-md-2"><?php echo app('translator')->getFromJson('home.since'); ?></th>
                                        <th class="col-md-2"><?php echo app('translator')->getFromJson('home.ip'); ?></th>
                                        <th class="col-md-2"><?php echo app('translator')->getFromJson('home.location'); ?></th>
                                        <th class="col-md-2"><?php echo app('translator')->getFromJson('home.browser'); ?></th>
                                        <th class="col-md-2"><?php echo app('translator')->getFromJson('home.delete'); ?></th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold"><?php echo e(@$user->user->fname.' '.$user->user->lname); ?></a></div>
                                            <?php if($user->key == 'dashboard_user_login'): ?>
                                                <div class="text-muted text-size-small" title="online">
                                                    <span class="status-mark border-blue position-left"></span>
                                                </div>
                                            <?php elseif($user->key == 'dashboard_user_logout'): ?>
                                                <div class="text-muted text-size-small" title="ofline">
                                                    <span class="status-mark border-grey-400 position-left"></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="<?php echo e(asset('/')); ?><?php echo e(@$user->image); ?>" class="img-circle img-xs" alt=""></a>
                                        </div>
                                       </td>
                                       <td><?php echo $__env->make('dashboard.reports.user_reports_model', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
                                       <td><span class="label bg-blue"><?php echo e(@$user->text); ?></span></td>
                                       <td><span class="text-muted"><?php echo e(@Carbon\Carbon::parse($user->created_at)->diffForHumans()); ?></span></td>
                                       <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i><?php echo e(@$user->ip); ?></span></td>
                                       <td><h6 class="text-semibold"><?php echo e(@$user->location); ?></h6></td>
                                       <td><h6 class="text-semibold"><?php echo e(@$user->browser); ?></h6></td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" href="<?php echo e(URL::to('ar/')); ?>/admin/reports_browsing/<?php echo e(@$user->id); ?>/delete"><li class="icon-trash"></li></a>
                                        </td>                            
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <div style="padding:0 22%; margin-bottom: 24px;" class="center-block">
                            <?php echo e(@$reports->links()); ?>

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