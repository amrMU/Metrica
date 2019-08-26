<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(@$setting->title_ar); ?></title>
    <?php echo $__env->make('dashboard.layouts.meta_tags_social', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/')); ?>/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/')); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/')); ?>/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/')); ?>/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/')); ?>/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/core/app.js"></script>

    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-indigo">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(asset('/')); ?>/assets/images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li>
                    <a href="#">
                        <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-cog3"></i>
                        <span class="visible-xs-inline-block position-right"> Options</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Password recovery -->
                   
                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
                                <h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
                            </div>
                            <?php if(session('status')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <div class="form-group has-feedback">
                                <input  id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" >
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback " role="alert">
                                        <strong class="text-danger"><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <div class="form-control-feedback">
                                    <i class="icon-mail5 text-muted"></i>
                                </div>
                            </div>

                            <button type="submit" class="btn bg-pink-400 btn-block">  <?php echo e(__('Send Password Reset Link')); ?> <i class="icon-arrow-left13 position-right"></i></button>
                        </div>
                    </form>
                    <!-- /password recovery -->


                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        Copyright &copy; 2014. <a href="#">Limitless admin template</a> by <a href="http://interface.club">Eugene Kopyov</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
