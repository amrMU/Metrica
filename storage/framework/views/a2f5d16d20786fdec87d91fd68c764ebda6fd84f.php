<div class="panel-body">
<label><?php echo app('translator')->getFromJson('home.search'); ?></label>

<div class="form-group">
<form action="<?php echo e(URL::to('ar/admin/blogs_search')); ?>" method="get" >

<div class="col-12">
    <div class="row">
        <div class="col-xs-10">
            <input type="text" class="form-control" name="key" placeholder="<?php echo app('translator')->getFromJson('home.key_search_blogs_list'); ?>" value="<?php echo e(@$key); ?>">
        </div>



        <div class="col-xs-2">
        <button class="btn btn-primary"> <li class="icon-search4"></li></button>
        </div>
    </div>
    <!-- <span class="help-block">Available in 12 columns sizes since it's based on 12 columns grid</span> -->
</div>
</form>
</div>
</div>
