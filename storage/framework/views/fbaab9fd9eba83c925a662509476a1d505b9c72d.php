<?php $__env->startSection('content'); ?>
        <!-- Main content -->
        <div class="content-wrapper">
                        <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"><?php echo app('translator')->getFromJson('home.create_categories'); ?></span> - <?php echo app('translator')->getFromJson('home.dashboard'); ?></h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                         </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(URL::to('ar/admin/home')); ?>"><i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a></li>
                        <li class="active"><?php echo app('translator')->getFromJson('home.create_categories'); ?></li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear position-left"></i>
                                <?php echo app('translator')->getFromJson('home.settings'); ?>
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                              <li><a href="<?php echo e(URL::to('ar/admin/setting')); ?>"><i class="icon-gear"></i><?php echo app('translator')->getFromJson('home.settings'); ?></a></li>
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
                   
                        <h5 class="panel-title" > <?php echo app('translator')->getFromJson('home.create_categories'); ?> </h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal form-validate-jquery" method="POST" action="<?php echo e(URL::to('/admin/categories')); ?>" enctype='multipart/form-data'>

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
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.add_new_category'); ?></legend>
                                    <!-- choose type category input -->
                                    <div class="form-group">
                                    <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.choose_type_category'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9"> 
                                        <select name="category_type" class="form-control" id="chose_type" >
                                            <option value="main"><?php echo app('translator')->getFromJson('home.main_category'); ?></option>
                                            <option value="sub"><?php echo app('translator')->getFromJson('home.sub_category'); ?></option>
                                               
                                        </select>
                                        </div>
                                    </div>
                                    <!-- /choose type category input -->  
                                     <!-- choose category input -->
                                     <div class="form-group" id="main_category">
                                    <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.main_categories'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9"> 
                                        <select name="parent_id" class="form-control" >
                                            <option value=""><?php echo app('translator')->getFromJson('home.select_one'); ?></option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e(@$category->id); ?>"><?php echo e((App::isLocale('en')  ? @$category->name_en : @$category->name_ar)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        </div>
                                    </div>
                                    <!-- /choose category input -->  

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.name_ar'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name_ar" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.name_ar'); ?>" value="<?php echo e(Request::old('name_ar')); ?>">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.name_en'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name_en" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.name_en'); ?>" value="<?php echo e(Request::old('name_en')); ?>">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->
                                    <!-- Meta Tags input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.meta_tags'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="meta_tags" class="form-control tokenfield" value="<?php echo app('translator')->getFromJson('home.placeholder_metatags'); ?>" value="<?php echo e(@$info->meta_tags); ?>">
                                        </div>
                                    </div>
                                    <!-- /Meta Tags input -->
                                    <!-- Logo uploader -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.avatar'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>"> *</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="icon" class="file-styled" >
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
    $('#main_category').hide();

    $('#chose_type').on('change',function(){
        if($('#chose_type').val() == 'sub'){
        $('#main_category').show();
        }else{
            $('#main_category').hide();
        }
    });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>