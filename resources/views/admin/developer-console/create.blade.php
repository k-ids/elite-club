@extends('admin.layouts.master')

@section('title', 'Add Artisan Command')

@section('content')

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ trans('general.artisan.heading') }}</h3>

            </div>

            {!! Form::open(['route' => 'developer-console.store']) !!}
            <div class="card-body">

              <div class="form-group">
                {!! Form::label('command', 'Command', ['class' => 'required']) !!}
                {!! Form::text('command', old('command'), ['class' => 'form-control', 'placeholder' => 'config:clear']) !!}
                  @error('command')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>


              <div class="form-group">
                {!! Form::label('description', 'Description', ['class' => 'awesome']) !!} 
                {!! Form::textarea('description', old('description'), ['class' => 'form-control']) !!}
                 @error('description')
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
          {!! Form::submit(trans('app.dev-console.create'), ['class' => 'btn btn-success']) !!}
          {!! link_to_route('developer-console.index',  'Cancel', $parameters = [],  ['class' => 'btn btn-secondary']) !!} 
        </div>
      </div>
      {!! Form::close() !!}
    </section>
    <!-- /.content -->

@endsection