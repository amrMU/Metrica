<?php $__env->startSection('content'); ?>
        <!-- Main content -->
        <div class="content-wrapper">
                        <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"><?php echo app('translator')->getFromJson('home.update'); ?></span> - <?php echo app('translator')->getFromJson('home.dashboard'); ?></h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                         </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(URL::to('ar/admin/home')); ?>"><i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a></li>
                        <li class="active"><?php echo app('translator')->getFromJson('home.general_settings'); ?></li>
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
                                <!-- <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                <li class="divider"></li> -->
                              <li><a href="<?php echo e(URL::to('ar/admin/setting')); ?>"><i class="icon-gear"></i><?php echo app('translator')->getFromJson('home.general_settings'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->

             <!-- Content area -->
            <div class="content">
                <!-- Form validation -->
                    <div class="panel panel-flat col-md-10">
                        <div class="panel-heading">
                            <h5 class="panel-title"><?php echo app('translator')->getFromJson('home.general_settings'); ?></h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal form-validate-jquery" method="POST" action="<?php echo e(URL::to('/admin/setting')); ?>" enctype='multipart/form-data'>
                                <?php if($errors->any()): ?>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo e($error); ?>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <?php if(Session::has('success')): ?>
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo e(Session::get('success')); ?>

                                </div>
                                <?php endif; ?>
                                <?php echo csrf_field(); ?>
                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.basic_info'); ?></legend>

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.title_ar'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title_ar" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.placeholder_text'); ?>" value="<?php echo e(@$info->title_ar); ?>">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.title_en'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title_en" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.placeholder_text'); ?>" value="<?php echo e(@$info->title_en); ?>">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->


                                 <!-- content ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.content_ar'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <textarea name="content_ar" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.placeholder_text'); ?>"><?php echo e(@$info->content_ar); ?></textarea>
                                        </div>
                                    </div>
                                    <!-- /content ar input -->
                                    <!-- content en input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.content_en'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9"> 
                                            <textarea name="content_en" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.placeholder_text'); ?>"><?php echo e(@$info->content_en); ?></textarea>
                                        </div>
                                    </div>
                                    <!-- /content en input -->                                    
                                    <!-- Meta Tags input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.meta_tags'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="meta_tags" class="form-control tokenfield" value="<?php echo app('translator')->getFromJson('home.placeholder_metatags'); ?>" value="<?php echo e(@$info->meta_tags); ?>">
                                        </div>
                                    </div>
                                    <!-- /Meta Tags input -->
                                    <!-- extirnal code input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.extirnal_code'); ?> </label>
                                        <div class="col-lg-9">
                                            <textarea name="extirnal_code" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.placeholder_code'); ?>"><?php echo @$info->extirnal_code; ?></textarea>
                                        </div>
                                    </div>
                                    <!--/extirnal code input -->
                                    <!-- Logo uploader -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.logo'); ?> <span class="text-danger" title="<?php echo app('translator')->getFromJson('home.required'); ?>"> *</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="logo" class="file-styled" >
                                        </div>
                                    </div>
                                    <!-- /Logo uploader -->
                                   <!-- files uploader -->
                                    <!-- <div class="form-group">
                                        <label class="control-label col-lg-3"><?php echo app('translator')->getFromJson('home.file_uploader'); ?></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="external_resources[]" class="file-styled"  multiple>
                                        </div>
                                    </div> -->
                                    <!-- /files uploader -->
                                </fieldset>
                                
                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.smtp_builder'); ?></legend>
                                        <!-- /MAIL_DRIVER field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Driver </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_driver" class="form-control" placeholder="Outgoing Server" value="<?php echo e(@$info->mail_provider_info->MAIL_DRIVER); ?>" >
                                            </div>
                                        </div>
                                        <!-- /MAIL_DRIVER field -->

                                        <!-- /mail_host field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Host</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_host" class="form-control" placeholder="mail.example.com " value="<?php echo e(@$info->mail_provider_info->MAIL_HOST); ?>">
                                            </div>
                                        </div>
                                        <!-- /mail_host field -->
                                        <!-- /mail_user_name field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2"> Mail Username</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_username" class="form-control" placeholder="info@example.com" value="<?php echo e(@$info->mail_provider_info->MAIL_HOST); ?>" >
                                            </div>
                                        </div>
                                        <!-- /mail_user_name field -->

                                        <!-- /mail_password field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" name="mail_password" class="form-control"  placeholder="*******" value="<?php echo e(@$info->mail_provider_info->MAIL_PASSWORD); ?>" >
                                            </div>
                                        </div>
                                        <!-- /mail_password field -->

                                     <!-- /Mail Port field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Port</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_port" class="form-control" placeholder="Port" value="<?php echo e(@$info->mail_provider_info->MAIL_port); ?>">
                                            </div>
                                        </div>
                                        <!-- /Mail Port field -->

                                </fieldset>
                                

                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.email_departments'); ?></legend>
                                    <!-- Email field -->
                                    <div class="wrap_emails">
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.email'); ?> </label>
                                            <div class="col-lg-5">
                                                <input type="email" name="email[]" class="form-control" id="email" placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="department[]" class="form-control" id="text" placeholder="<?php echo app('translator')->getFromJson('home.department'); ?>">
                                            </div>
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_email"> + </button>
                                            </div>
                                        </div>
                                        <!-- /email field -->
                                        <div id="space_emails">
                                        <?php if(isset($info)): ?>
                                        <?php $__currentLoopData = $info->emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.email'); ?> </label>
                                            <div class="col-lg-5">
                                                <input type="email" name="email[]" class="form-control" id="email" placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>" value="<?php echo e(@$email->email); ?>">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="department[]" class="form-control" id="text" placeholder="<?php echo app('translator')->getFromJson('home.department'); ?>" value="<?php echo e(@$email->department); ?>">
                                            </div>
                                            <div class="col-2  m-10">
                                               <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </fieldset>
                                
                                
                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.company_address'); ?></legend>
                                    <!-- address field -->
                                    <div class="wrap_address">
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.address'); ?> </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="address[]" class="form-control" id="text" placeholder="<?php echo app('translator')->getFromJson('home.address'); ?>">
                                            </div>
                                            
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_address"> + </button>
                                            </div>
                                        </div>
                                        <!-- /address field -->
                                        <div id="space_address">
                                        <?php if(isset($info)): ?>
                                        <?php $__currentLoopData = $info->address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.address'); ?> </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="address[]" class="form-control" id="text" placeholder="<?php echo app('translator')->getFromJson('home.address'); ?>" value="<?php echo e(@$address->address_ar); ?>">
                                            </div>
                                            
                                            <div class="col-2  m-10">
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                        <?php endif; ?>                                        
                                        </div>
                                    </div>
                                </fieldset>
                                
                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.phones'); ?></legend>
                                    <!-- phone field -->
                                    <div class="wrap_phones">
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.phone'); ?> </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="phone[]" class="form-control" id="phone"  placeholder="<?php echo app('translator')->getFromJson('home.phone'); ?>" >
                                            </div>
                                          
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_phone"> + </button>
                                            </div>
                                        </div>
                                        <!--/ phone field -->
                                        <div id="space_phones">
                                        <?php if(isset($info)): ?>
                                        <?php $__currentLoopData = $info->phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.phone'); ?> </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="phone[]" class="form-control" id="phone"  placeholder="<?php echo app('translator')->getFromJson('home.phone'); ?>" value="<?php echo e(@$phone->phone); ?>">
                                            </div>
                                            <div class="col-2  m-10">
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        <?php endif; ?>                                         
                                        </div>
                                    </div>
                                </fieldset>
                                
                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.whatsapp_numbers'); ?></legend>
                                    <!-- whatsapp field -->
                                    <div class="wrap_whatsapp">
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.whatsapp'); ?> </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="whatsapp[]" class="form-control" id="whatsapp" placeholder="<?php echo app('translator')->getFromJson('home.whatsapp'); ?>">
                                            </div>
                                          
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_whatsapp"> + </button>
                                            </div>
                                        </div>
                                        <!--/ whatsapp field -->
                                        <div id="space_whatsapp">
                                        <?php if(isset($info)): ?>
                                        <?php $__currentLoopData = $info->whatsapp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whatsapp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.whatsapp'); ?> </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="whatsapp[]" class="form-control" id="whatsapp" placeholder="<?php echo app('translator')->getFromJson('home.whatsapp'); ?>" value="<?php echo e(@$whatsapp->whatsapp); ?>">
                                            </div>
                                          
                                            <div class="col-2  m-10">                                        
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        <?php endif; ?>                                                                                     
                                        </div>
                                    </div>
                                </fieldset>
                                
                                
                                <fieldset class="content-group">
                                    <legend class="text-bold"><?php echo app('translator')->getFromJson('home.social_media_generator'); ?></legend>
                                    <!-- social Media field -->
                                    <div class="wrap_social_media">
                                        <div class="form-group" >
                                            <div class="col-lg-2">
                                               <a hreg="#" class="btn btn-primary add_new_social_media"> + </a>
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="name_media_ar[]" class="form-control" id="title_ar" placeholder="<?php echo app('translator')->getFromJson('home.name_ar'); ?>"  multiple>
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="name_media_en[]" class="form-control" id="title_en" placeholder="<?php echo app('translator')->getFromJson('home.name_en'); ?>"  multiple>
                                            </div>
                                             <div class="col-lg-2">
                                                <input type="text" name="url[]" class="form-control" id="url" placeholder="<?php echo app('translator')->getFromJson('home.url'); ?>" multiple>
                                            </div>
                                            <div class="col-2">
                                                <input type="file" name="social_logo[]" class="file-styled" multiple>
                                            </div>
                                        </div>
                                        <!-- /social Media field -->
                                        <div id="space_social_media">
                                        <?php if(isset($info)): ?>
                                        <?php $__currentLoopData = $info->social_media_link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group" >
                                            <div class="col-lg-2">
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                            <div class="col-lg-2"> 
                                                <input type="text" name="name_media_ar[]" class="form-control" id="title_ar" placeholder="<?php echo app('translator')->getFromJson('home.name_ar'); ?>"  multiple  value="<?php echo e(@$link->name_ar); ?>">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="name_media_en[]" class="form-control" id="title_en" placeholder="<?php echo app('translator')->getFromJson('home.name_en'); ?>"  multiple value="<?php echo e(@$link->name_en); ?>" >
                                            </div>
                                             <div class="col-lg-2">
                                                <input type="text" name="url[]" class="form-control" id="url" placeholder="<?php echo app('translator')->getFromJson('home.url'); ?>" multiple value="<?php echo e(@$link->url); ?>" >
                                            </div>
                                            <div class="col-2">
                                                <input type="file" name="social_logo[]" class="file-styled" multiple>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                        
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </fieldset>
                                

                                <div class="text-right">
                                    <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-left13 position-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form validation -->
                    <div class="col-md-2">
                    <?php if(isset($setting)): ?>
                    <img src="<?php echo e(url('/').@$info->logo); ?>" class="img-responsive" style="max-width:100%" >
                    <?php endif; ?>
                    </div>
                    <?php if(isset($info)): ?>                    
                    <?php $__currentLoopData = $info->external_resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-2">
                    <a href="<?php echo e(@$file->file); ?>" target="_blank">
                        <img src="<?php echo e(asset('/img/code.svg')); ?>" style="height: 70px; margin: 0 30px;" class="img-responsive">
                    </a>
                    <small class="text-center">
                        <?php echo $__env->make('dashboard.setting.external_delete_model', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </small>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
            </div>
             <!-- Content area -->

        </div>
        <!-- Main content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsCode'); ?>
    <script>
   //start email generator
   var wrap_emails = $(".wrap_emails>#space_emails");
   var add_new_email = $(".add_new_email");
   $(add_new_email).click(function (e) {
    e.preventDefault();
    $(wrap_emails).append('<div class="form-group" ><label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.email'); ?> </label><div class="col-lg-5"><input type="email" name="email[]" class="form-control" id="email" placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>"></div><div class="col-lg-4"><input type="text" name="department[]" class="form-control" id="text"  placeholder="<?php echo app('translator')->getFromJson('home.department'); ?>"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div>'); 
  });
    //start email generator
   var wrap_address = $(".wrap_address>#space_address");
   var add_new_address = $(".add_new_address");
   $(add_new_address).click(function (e) {
    e.preventDefault();
    $(wrap_address).append('<div class="form-group" ><label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.address'); ?> </label><div class="col-lg-9"><input type="text" name="address[]" class="form-control" id="text" placeholder="<?php echo app('translator')->getFromJson('home.address'); ?>"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div></div>'); 
  });
   //start phones generator
   var wrap_phones = $(".wrap_phones>#space_phones");
   var add_new_phone = $(".add_new_phone");
   $(add_new_phone).click(function (e) {
    e.preventDefault();
    $(wrap_phones).append('<div class="form-group" ><label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.phone'); ?> </label><div class="col-lg-9"><input type="text" name="phone[]" class="form-control" id="phone" placeholder="<?php echo app('translator')->getFromJson('home.phone'); ?>"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div></div>'); 
  });

   //start whatsapp generator
   var wrap_whatsapp = $(".wrap_whatsapp>#space_whatsapp");
   var add_new_whatsapp = $(".add_new_whatsapp");
   $(add_new_whatsapp).click(function (e) {
    e.preventDefault();
    $(wrap_whatsapp).append('<div class="form-group" ><label class="control-label col-lg-2"><?php echo app('translator')->getFromJson('home.whatsapp'); ?> </label><div class="col-lg-9"><input type="text" name="whatsapp[]" class="form-control" id="whatsapp" placeholder="<?php echo app('translator')->getFromJson('home.whatsapp'); ?>"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div></div>'); 
  });
   //start  social media generator
   var wrap_social_media = $(".wrap_social_media>#space_social_media");
   var add_new_social_media = $(".add_new_social_media");
   $(add_new_social_media).click(function (e) {
    e.preventDefault();
    $(wrap_social_media).append('<div class="form-group" ><div class="col-lg-2"> <button class="remove_field btn btn-danger">-</button></div><div class="col-lg-2"><input type="text" name="name_ar[]" multiple class="form-control" id="text" placeholder="<?php echo app('translator')->getFromJson('home.name_ar'); ?>"></div><div class="col-lg-2"><input type="text" name="name_en[]" multiple class="form-control" id="text" multiple placeholder="<?php echo app('translator')->getFromJson('home.name_en'); ?>"></div><div class="col-lg-2"> <input type="text" name="url[]" multiple class="form-control" id="url"  placeholder="<?php echo app('translator')->getFromJson('home.url'); ?>"></div><div class="col-2"><input type="file" name="social_logo[]" class="file-styled"  multiple></div></div>'); 
  });

   $(document).on("click",".remove_field",function(){
    $(this).parent().parent().remove();
  });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>