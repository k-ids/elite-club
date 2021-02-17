@extends('admin.layouts.master')

@section('title', 'Third Party Settings')

@section('content')
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
        <div class="card card-primary card-outline">
          
          <div class="card-body">
            <h4>Google Captch V2</h4>
            <div class="row">
          
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

                  {!! Form::open(['route' => ['admim.captcha.update', $captchaSetting->id], 'files' => true] ) !!}

                    <div class="form-group">
                      {!! Form::label(trans('general.form_label.googlecaptcha.site_key'), trans('general.form_label.googlecaptcha.site_key'), ['class' => 'required']) !!}
                      {!! Form::text('site_key', old('site_key', $captchaSetting->site_key), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      {!! Form::label(trans('general.form_label.googlecaptcha.secret_key'), trans('general.form_label.googlecaptcha.secret_key'), ['class' => 'awesome']) !!}
                      {!! Form::text('secret_key',  old('secret_key', $captchaSetting->secret_key), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">

                        {!! Form::checkbox('show_on_front', '1' , !empty($captchaSetting->show_on_front) ? true : false , ['id' => trans('general.form_label.googlecaptcha.enable_disable')]) !!}

                        {!! Form::label(trans('general.form_label.googlecaptcha.enable_disable'), trans('general.form_label.googlecaptcha.enable_disable'), ['class' => 'awesome']) !!}
                        
                      </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-12">

                          {!! Form::submit(trans('app.third_party.create'), ['class' => 'btn btn-success']) !!}
                        
                        </div>
                    </div>
                    {!! Form::close() !!}

                    <div class="row">
                      <div class="col-12">

                      </div>
                    </div>

                  </div>

    
                </div>
              </div>
            </div>
           
          </div>
          <!-- /.card -->
        </div>
    </div>
</section>
@endsection