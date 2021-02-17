<section class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-10">
      
      @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-ban"></i>{{ trans('messages.title.error') }}</h5>
           {{ Session::get('error') }}
        </div>
      @endif
      
      @if(Session::has('info'))
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-info"></i> {{ trans('messages.title.info') }}</h5>
           {{ Session::get('info') }}
        </div>
      @endif

      @if(Session::has('warning'))
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> 
          {{ trans('messages.title.warning') }}</h5>
          {{ Session::get('warning') }}
        </div>
      @endif
      
      @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i> {{ trans('messages.title.success') }}</h5>
          {{ Session::get('success') }}
        </div>
      @endif


      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
</div>
</section>
