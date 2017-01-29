@if(Session::has('flash_message'))
<div class="alert bg-green alert-dismissible" style="margin-top:50px" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      {{ Session::get('flash_message') }}
</div>

@endif
