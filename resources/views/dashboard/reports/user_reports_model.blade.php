
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info " data-toggle="modal" data-target="#ReportProcess{{@$user->id}}">
<li class="icon-bug2"></li>
</button>
<!-- Modal -->
<div id="ReportProcess{{@$user->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('home.log_case')</h4>
      </div>
      <div class="modal-body">
          <pre>{{json_encode(@$user->process, JSON_PRETTY_PRINT)}}</pre>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('home.close')</button>
      

      </div>
    </div>

  </div>
</div>