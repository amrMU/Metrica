<?php $__env->startSection('content'); ?>
    
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"><?php echo app('translator')->getFromJson('home.home'); ?></span> - <?php echo app('translator')->getFromJson('home.dashboard'); ?></h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                            <!-- <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                            <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a> -->
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(URL::to('ar/admin/home')); ?>"><i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a></li>
                        <li class="active"> <?php echo app('translator')->getFromJson('home.dashboard'); ?></li>
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
                 
                    
                </div>
                <!-- /main charts -->

                    <!-- Quick stats boxes -->
                    <div class="row">
                            <div class="col-lg-4">

                                <!-- Members online -->
                                <div class="panel bg-teal-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                            <span class="heading-text badge bg-teal-800">+53,6%</span>
                                        </div>

                                        <h3 class="no-margin">3,450</h3>
                                        Members online
                                        <div class="text-muted text-size-small">489 avg</div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="chart" id="members-online"></div>
                                    </div>
                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Current server load -->
                                <div class="panel bg-pink-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                        <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                                        <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                        <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="no-margin">49.4%</h3>
                                        Current server load
                                        <div class="text-muted text-size-small">34.6% avg</div>
                                    </div>

                                    <div class="chart" id="server-load"></div>
                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Today's revenue -->
                                <div class="panel bg-blue-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>

                                        <h3 class="no-margin">$18,390</h3>
                                        Today's revenue
                                        <div class="text-muted text-size-small">$37,578 avg</div>
                                    </div>

                                    <div class="chart" id="today-revenue"></div>
                                </div>
                                <!-- /today's revenue -->

                            </div>
                        </div>
                        <!-- /quick stats boxes -->


                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Marketing campaigns -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title"><?php echo app('translator')->getFromJson('home.browsing_info'); ?></h6>
                                <div class="heading-elements">
                                    <span class="label bg-success heading-text"><?php echo e($active_users->count()); ?> <?php echo app('translator')->getFromJson('home.active'); ?></span>
                                 
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <!-- <li><a href="#"><i class="icon-sync"></i> Update data</a></li> -->
                                                <!-- <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li> -->
                                                <li><a href="<?php echo e(URL::to('ar/admin/reports_browsing')); ?>"><i class="icon-copy"></i> <?php echo app('translator')->getFromJson('home.full_report'); ?></a></li>
                                                <!-- <li class="divider"></li> -->
                                                <!-- <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- table reports -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                    <tr>
                                    <th><?php echo app('translator')->getFromJson('home.user'); ?></th>                                        
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.action'); ?></th>
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.since'); ?></th>
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.ip'); ?></th>
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.location'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold"><?php echo e(@$user->fname.' '.$user->lname); ?></a></div>
                                            <?php if($user->last_report()->key == 'dashboard_user_login'): ?>
                                                <div class="text-muted text-size-small" title="online">
                                                    <span class="status-mark border-blue position-left"></span>
                                                </div>
                                            <?php elseif($user->last_report()->key == 'dashboard_user_logout'): ?>
                                                <div class="text-muted text-size-small" title="ofline">
                                                    <span class="status-mark border-grey-400 position-left"></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="<?php echo e(asset('/')); ?><?php echo e(@$user->image); ?>" class="img-circle img-xs" alt=""></a>
                                        </div>
                                       </td>
                                       <td><span class="label bg-blue"><?php echo e(@$user->last_report()->text); ?></span></td>
                                       <td><span class="text-muted"><?php echo e(@Carbon\Carbon::parse($user->last_report()->created_at)->diffForHumans()); ?></span></td>
                                       <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i><?php echo e(@$user->last_report()->ip); ?></span></td>
                                       <td><h6 class="text-semibold"><?php echo e(@$user->last_report()->location); ?></h6></td>
                                                                                 
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table reports -->

                        </div>
                        <!-- /marketing campaigns -->
                    </div>

                </div>
                <!-- /dashboard content -->


                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2019. <a href="#">Dashboard Web App Developed By </a>  <a href="https://www.linkedin.com/in/amrmuhamed" target="_blank">Amr Muhamed</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>