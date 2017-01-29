@if(Session::has('flash_message'))
<script>
swal({
  title: "{{ Session::get('flash_message') }}",
  text: "This message will close in 3 seconds.",
  timer: 3000,
  showConfirmButton: false
});
</script>
@else
<!-- start preloader -->
<div class="preloader">
  <div class="sk-spinner sk-spinner-wave">
      <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
  </div>
  <!-- end preloader -->
@endif
