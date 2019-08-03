<?php $__env->startSection('content'); ?>
<!-- Main content -->
<div class="content-wrapper">
	            <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Site Map Builder</span> - Dashboard</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?php echo e(URL::to('admin/home')); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Site Map Builder</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

	 <!-- Content area -->
    <div class="content">
			<!-- Form validation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Form validation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group-lg">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages.</p>
							<?php if(Session::has('file_get')): ?>
							<a class="btn btn-info" href="<?php echo e(URL::to('/').'/sitemap/'.Session::get('file_get')); ?>" target="_blank">DownLoad Now</a>
							<?php endif; ?>
							<form class="form-horizontal form-validate-jquery" action="<?php echo e(URL::to('admin/sitemap')); ?>" method="POST">
								    <?php echo csrf_field(); ?>
								<fieldset class="content-group">
									<legend class="text-bold">Basic inputs</legend>



									<!-- URL validation -->
									<div class="form-group">
										<label class="control-label col-lg-3">URL validation <span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<input type="text" name="url" class="form-control" required="required" placeholder="Enter a valid URL address">
											<span class="text-danger"><?php echo e($errors->first('url')); ?></span>
										</div>
									</div>
									<!-- /url validation -->

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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>