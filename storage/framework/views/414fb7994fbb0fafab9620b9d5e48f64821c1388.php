<a  class="text-danger" data-toggle="modal" style="margin: 0 47px;" data-target="#deleteFile<?php echo e(@$file->id); ?>"> <?php echo app('translator')->getFromJson('home.delete'); ?> </a>
<div id="deleteFile<?php echo e(@$file->id); ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-left"><?php echo app('translator')->getFromJson('home.message_header_confirm_delete'); ?></h4>
      </div>
      <div class="modal-body">
        <p class="text-left"><?php echo app('translator')->getFromJson('home.message_body_confirm_delete'); ?>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
        <a href="<?php echo e(URL::to('/')); ?>/admin/file/<?php echo e(@$file->id); ?>/delete" class="btn btn-danger" >حذف</a>
      </div>
    </div>

  </div>
</div>