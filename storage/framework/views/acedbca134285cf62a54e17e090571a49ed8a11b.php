<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(@$setting->$title); ?></title>

    <?php echo $__env->make('dashboard.layouts.meta_tags_social', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo e(URL::to('/site')); ?>/css/bootstrap.min.css?<?= time() ?>" rel="stylesheet">
    <link href="<?php echo e(URL::to('/site')); ?>/css/all.min.css?<?= time() ?>" rel="stylesheet">
    <link href="<?php echo e(URL::to('/site')); ?>/css/custom.css?<?= time() ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>



  <section class="coming-soon text-center">

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-6 counter-block">
            <div class="coming-soon-heading"> <?php echo app('translator')->getFromJson('home.we_are_coming_soon'); ?> </div> 
            <hr>
            <p class="lead"><?php echo app('translator')->getFromJson('home.welcome_to_our_community'); ?></p>

          <div class="counter-details col-xs-12">
            <div class="col-md-3 col-xs-6">
              <span id="days">00</span>
              <span><?php echo app('translator')->getFromJson('home.days'); ?></span>
            </div>
            <div class="col-md-3 col-xs-6">
              <span id="hours">01</span>
              <span><?php echo app('translator')->getFromJson('home.hours'); ?></span>
            </div>
            <div class="col-md-3 col-xs-6">
              <span id="minutes">25</span>
              <span><?php echo app('translator')->getFromJson('home.minutes'); ?></span>
            </div>
            <div class="col-md-3 col-xs-6">
              <span id="seconds">12</span>
              <span><?php echo app('translator')->getFromJson('home.seconds'); ?></span>
            </div>
          </div>

          <div class="col-xs-12 bottom-p">
            <p class="lead2"> <?php echo app('translator')->getFromJson('home.our_Website_is_coming_soon'); ?> </p>
            <p class="lead2"> <?php echo app('translator')->getFromJson('home.Please_register_here_to_be_updated_when_ready'); ?> </p>
         </div>

        </div>


        <div class="col-xs-12 col-md-6 form-block">

        <div class="col-xs-12 logo-block">
          <img class="logo-img" src="<?php echo e(URL::to('/site')); ?>/images/basma-logo.png">
        </div>

        <div class="col-md-11 col-md-offset-1 col-xs-12">

          <div class="tabs-block">
          <?php if(Session('success')): ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <!--<strong><?php echo app('translator')->getFromJson('home.success'); ?>!</strong> -->
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>     

            <ul>
                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li>
                       <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                           <?php echo e($properties['native']); ?>

                 </a>
               </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#user" aria-controls="user" role="tab" data-toggle="tab"><?php echo app('translator')->getFromJson('home.Register_for_user'); ?></a></li>
              <li role="presentation"><a href="#company" aria-controls="company" role="tab" data-toggle="tab"><?php echo app('translator')->getFromJson('home.Register_for_company'); ?></a></li>
            </ul>
              
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="user">
              
                   <form method="post" action="<?php echo e(url('/').'/'.LaravelLocalization::getCurrentLocale().'/user/waiting'); ?>" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                   <input type="hidden" name="type" value="user" />
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.name'); ?>" name="name" value="<?php echo e(Request::old('name')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>" name="email" value="<?php echo e(Request::old('email')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                     </div>
                    <div class="form-group">
                        <input type="number" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.phone'); ?>" name="phone" value="<?php echo e(Request::old('phone')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('phone')); ?></small>

                    </div>
                    <div class="form-group">
                        <select name="address" class="form-control">
                        <option value=""><?php echo app('translator')->getFromJson('home.address'); ?></option>
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(@$city->id); ?>"><?php echo e((App::isLocale('en')  ? @$city->nameEn : @$city->nameAr)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <small class="text-danger"><?php echo e($errors->first('address')); ?></small>
                    </div>
                    <button type="submit" class="btn btn-lg contact-btn btn-default"><?php echo app('translator')->getFromJson('home.send'); ?></button>
                </form>
              <p class="lead"> <?php echo app('translator')->getFromJson('home.We_will_contact_you_once_we_launch'); ?> </p>

              </div>
              <div role="tabpanel" class="tab-pane" id="company">
              
              <form method="post" action="<?php echo e(url('/').'/'.LaravelLocalization::getCurrentLocale().'/user/waiting'); ?>" accept-charset="utf-8">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="type" value="company" />
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.name'); ?>" name="name" value="<?php echo e(Request::old('name')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>" name="email" value="<?php echo e(Request::old('email')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                     </div>
                    <div class="form-group">
                        <input type="number" class="form-control"  placeholder="<?php echo app('translator')->getFromJson('home.phone'); ?>" name="phone" value="<?php echo e(Request::old('phone')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('phone')); ?></small>

                    </div>
                    <div class="form-group">
                        <select name="address" class="form-control">
                        <option value="null"><?php echo app('translator')->getFromJson('home.address'); ?></option>
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(@$city->id); ?>"><?php echo e((App::isLocale('en')  ? @$city->nameEn : @$city->nameAr)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <small class="text-danger"><?php echo e($errors->first('address')); ?></small>
                    </div>
                    <button type="submit" class="btn btn-lg contact-btn btn-default"><?php echo app('translator')->getFromJson('home.send'); ?></button>
                </form>
              <p class="lead"> <?php echo app('translator')->getFromJson('home.We_will_contact_you_once_we_launch'); ?> </p>

              </div>
            </div>

          </div>

        </div>


        </div>



      </div>
    </div>

  </section>

<script src="<?php echo e(URL::to('/site')); ?>/js/jquery-3.4.1.min.js?<?= time() ?>"></script>
<script src="<?php echo e(URL::to('/site')); ?>/js/bootstrap.min.js?<?= time() ?>"></script>
<script src="<?php echo e(URL::to('/site')); ?>/js/custom.js?<?= time() ?>"></script>

  </body>
</html>




