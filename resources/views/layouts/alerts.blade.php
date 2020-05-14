@if (Session::has('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>{{ Session::get('info') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif