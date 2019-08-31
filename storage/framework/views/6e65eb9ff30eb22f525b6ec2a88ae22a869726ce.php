
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info " data-toggle="modal" data-target="#ReportProcess<?php echo e(@$user->id); ?>">
<li class="icon-bug2"></li>
</button>
<!-- Modal -->
<div id="ReportProcess<?php echo e(@$user->id); ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo app('translator')->getFromJson('home.log_case'); ?></h4>
      </div>
      <div class="modal-body">
          <pre><?php echo e(json_encode(@$user->process, JSON_PRETTY_PRINT)); ?></pre>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo app('translator')->getFromJson('home.close'); ?></button>
      

      </div>
    </div>

  </div>
</div>