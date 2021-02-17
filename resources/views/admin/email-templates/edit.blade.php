@extends('admin.layouts.master')

@section('title', 'Create Email Template')

@section('content')

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ trans('general.email-template.heading') }}</h3>

            </div>

            {!! Form::open(['route' => ['email-templates.update', $emailTemplate->id], 'files' => true, 'method'=>'PUT']) !!}
            <div class="card-body">

              <div class="form-group">
                {!! Form::label('title', 'Title', ['class' => 'required']) !!}
                {!! Form::text('title', old('title', $emailTemplate->title), ['class' => 'form-control']) !!}
                  @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('subject', 'Subject', ['class' => 'awesome']) !!}
                {!! Form::text('subject', old('subject', $emailTemplate->subject), ['class' => 'form-control']) !!}
                  @error('subject')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('template', 'Template', ['class' => 'awesome']) !!} 
                {!! Form::textarea('template', old('template', $emailTemplate->template), ['class' => 'form-control textarea']) !!}
                 @error('template')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                
              </div>
            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>

      <div class="row">
        <div class="col-12">
          {!! Form::submit(trans('app.email_template.edit'), ['class' => 'btn btn-success']) !!}
          {!! link_to_route('email-templates.index',  'Cancel', $parameters = [],  ['class' => 'btn btn-secondary']) !!} 
        </div>
      </div>
      {!! Form::close() !!}
    </section>
    <!-- /.content -->

@endsection