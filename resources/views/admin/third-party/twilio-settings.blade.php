@extends('admin.layouts.master')

@section('title', 'Third Party Settings')

@section('content')
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
        <div class="card card-primary card-outline">
          
          <div class="card-body">
            <h4>{{ trans('general.heading.twilio') }}</h4>
            <div class="row">
          
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

                  {!! Form::open(['route' => ['admim.twilio.update', $twilioSetting->id ], 'files' => true] ) !!}

                    <div class="form-group">
                      {!! Form::label(trans('general.form_label.twilio.auth_token'), trans('general.form_label.twilio.auth_token'), ['class' => 'required']) !!}
                      {!! Form::text('auth_token', old('auth_token', $twilioSetting->auth_token), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                        @error('auth_token')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      {!! Form::label(trans('general.form_label.twilio.account_sid'), trans('general.form_label.twilio.account_sid'), ['class' => 'awesome']) !!}
                      {!! Form::text('account_sid',  old('account_sid', $twilioSetting->account_sid), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                        @error('account_sid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      {!! Form::label(trans('general.form_label.twilio.number'), trans('general.form_label.twilio.number'), ['class' => 'awesome']) !!}
                      {!! Form::text('twilio_number',  old('twilio_number', $twilioSetting->twilio_number), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                        @error('twilio_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      {!! Form::label(trans('general.form_label.twilio.app_sid'), trans('general.form_label.twilio.app_sid'), ['class' => 'awesome']) !!}
                      {!! Form::text('app_sid',  old('app_sid', $twilioSetting->app_sid), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                        @error('app_sid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">

                        {!! Form::checkbox('is_enable', '1' , !empty($twilioSetting->is_enable) ? true : false  , ['id' => trans('general.form_label.twilio.is_enable')]) !!}

                        {!! Form::label(trans('general.form_label.twilio.is_enable'), trans('general.form_label.twilio.is_enable'), ['class' => 'awesome']) !!}
                        
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