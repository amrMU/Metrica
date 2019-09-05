<?php $__env->startSection('content'); ?>
        <!-- Main content -->
        <div class="content-wrapper">
                        <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"><?php echo app('translator')->getFromJson('home.create_users'); ?></span> - <?php echo app('translator')->getFromJson('home.dashboard'); ?></h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                         </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(URL::to('ar/admin/home')); ?>"><i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a></li>
                        <li class="active"><?php echo app('translator')->getFromJson('home.create_users'); ?></li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear position-left"></i>
                                <?php echo app('translator')->getFromJson('home.settings'); ?>
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                              
                              <li><a href="<?php echo e(URL::to('ar/admin/setting')); ?>"><i class="icon-gear"></i><?php echo app('translator')->getFromJson('home.create_users'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->

             <!-- Content area -->
            <div class="content">
                <!-- Form validation -->
                    <div class="panel panel-flat col-md-12">
    

                        <div class="panel-heading">
                   
                        <h5 class="panel-title" > <?php echo app('translator')->getFromJson('home.create_users'); ?> </h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal form-validate-jquery" method="POST" action="<?php echo e(URL::to('/admin/users')); ?>" enctype='multipart/form-data'>
                                <?php if($errors->any()): ?>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger alert-dismissible" >
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="right: 5px;">&times;</a><?php echo e($error); ?>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <?php if(Session::has('success')): ?>
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="right: 5px;">&times;</a><?php echo e(Session::get('success')); ?>

                                </div>
                                <?php endif; ?>
                                <?php echo csrf_field(); ?>
                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.add_new_user'); ?></legend>

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.fname'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="fname" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.fname'); ?>" value="<?php echo e(Request::old('fname')); ?>">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.lname'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="lname" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.lname'); ?>" value="<?php echo e(Request::old('lname')); ?>">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->


                                 <!-- content ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.email'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="email" name="email" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>" value="<?php echo e(Request::old('email')); ?>">
                                        </div>
                                    </div>
                                    <!-- /content ar input -->
                                    <!-- content en input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.city'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9"> 
                                        <select name="city_id" class="form-control" >
                                            <option value="null"><?php echo app('translator')->getFromJson('home.select_one'); ?></option>
                                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e(@$city->id); ?>"><?php echo e((App::isLocale('en')  ? @$city->nameEn : @$city->nameAr)); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        </div>
                                    </div>
                                    <!-- /content en input -->                                    
                                    <!-- Meta Tags input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.phone'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="phone" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.phone'); ?>" value="<?php echo e(Request::old('phone')); ?>">
                                        </div>
                                    </div>
                                    <!-- /Meta Tags input -->
                                     <!-- password input -->
                                     <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.password'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span> </label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                            <?php if(LaravelLocalization::getCurrentLocale() == 'en'): ?>
                                            <input type="text" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.password'); ?>" id="input_password">
											
                                            	<span class="input-group-btn">
													<button class="btn btn-default legitRipple" type="button" id="generate_password">
                                                    <?php echo app('translator')->getFromJson('home.generate'); ?> 
                                                    <li class="glyphicon glyphicon-eye-open"></li>
                                                    </button>
												</span>
                                            
                                            <?php else: ?>

                                            <span class="input-group-btn">
													<button class="btn btn-default legitRipple" type="button" id="generate_password">
                                                    <?php echo app('translator')->getFromJson('home.generate'); ?> 
                                                    <li class="glyphicon glyphicon-eye-open"></li>
                                                    </button>
												</span>
                                                <input type="text" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.password'); ?>" id="input_password">
                                            
                                            <?php endif; ?>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.password_confirmation'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="password" name="password_confirmation" class="form-control"  id="input_password_confirm">
                                        </div>
                                    </div>

                                    <!--/password input -->
                                    <!-- Logo uploader -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.avatar'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>"> *</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="image" class="file-styled" >
                                        </div>
                                    </div>
                                    <!-- /Logo uploader -->
                                 
                                </fieldset>
                                
                              
                           
                                <div class="text-right">
                                    <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-left13 position-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form validation -->
                
                   
            </div>
             <!-- Content area -->

        </div>
        <!-- Main content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsCode'); ?>
    <script>
    $('#generate_password').click(function(){
        var randomstring = Math.random().toString(36).slice(-8);
        $('#input_password').val(randomstring);input_password_confirm
        $('#input_password_confirm').val(randomstring);


    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>