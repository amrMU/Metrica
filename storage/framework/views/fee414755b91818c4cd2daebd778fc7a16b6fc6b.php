<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/plugins/forms/validation/validate.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/pages/login_validation.js"></script>

    <script type="text/javascript" src="<?php echo e(asset('/')); ?>/assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container login-cover">

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content pb-20">

                    <!-- Form with validation -->
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                            
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group"><?php echo e(__('Login')); ?> <small class="display-block"><?php echo e(__('Your credentials')); ?></small></h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"  name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                 <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback " role="alert">
                                        <strong class="text-danger"><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input  id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback " role="alert">
                                        <strong class="text-danger"><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> class="styled" >
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>

                                    <div class="col-sm-6 text-right">
                                    <?php if(Route::has('password.request')): ?>
                                        <a  href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot Your Password?')); ?>

                                        </a>
                                    <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-pink-400 btn-block"><?php echo e(__('login')); ?> <i class="icon-arrow-left13 position-right"></i></button>
                            </div>

                            <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                        </div>
                    </form>
                    <!-- /form with validation -->

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
