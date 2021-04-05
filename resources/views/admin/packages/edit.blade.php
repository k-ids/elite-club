@extends('admin.layouts.master')

@section('title', 'Edit Membership Plan')

@section('content')

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ trans('general.plan.heading') }}</h3>

            </div>

            {!! Form::open(['route' => ['membeship-plan.update', $membeship_plan->id], 'files' => true, 'method'=>'PUT']) !!}
            <div class="card-body">

              <div class="form-group">
                {!! Form::label('title', 'Plan Name', ['class' => 'required']) !!}
                {!! Form::text('title', old('title', $membeship_plan->title), ['class' => 'form-control']) !!}
                  @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('price', 'Plan Price', ['class' => 'required']) !!}
                {!! Form::number('price', old('price', $membeship_plan->price), ['class' => 'form-control' , 'min' => '1']) !!}
                  @error('price')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('promo_price', 'Promo Price', ['class' => 'required']) !!}
                {!! Form::number('promo_price', old('promo_price' , $membeship_plan->promo_price), ['class' => 'form-control', 'min' => '1']) !!}
                  @error('promo_price')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('description', 'Plan Description', ['class' => 'awesome']) !!} 
                {!! Form::textarea('description', old('description', $membeship_plan->description), ['class' => 'form-control textarea']) !!}
                 @error('description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                
              </div>

              <div class="form-group">
                {!! Form::label('type', 'Plan Type', ['class' => 'required']) !!}
                {!! Form::select('type', [
                     '1' => 'Yearly', 
                     '2' => 'Monthly'
                    ], 
                    $membeship_plan->type, 
                    ['class' => 'form-control','placeholder' => 'Pick a option...']) 
                !!}

                @error('type')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('duration', 'Plan Duration', ['class' => 'required']) !!}
                {!! Form::number('duration', old('duration', $membeship_plan->duration), ['class' => 'form-control', 'min' => '1']) !!}
                  @error('duration')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('usage', 'Plan Usage', ['class' => 'required']) !!}
                {!! Form::select('usage', [
                     '1' => 'Limited', 
                     '2' => 'Unlimited'
                    ], 
                    $membeship_plan->usage, 
                    ['class' => 'form-control','placeholder' => 'Pick a option...']) 
                !!}
                @error('usage')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('status', 'Plan Status', ['class' => 'required']) !!}
                {!! Form::select('status', [
                     '1' => 'Publish', 
                     '2' => 'Draft'
                    ], 
                    $membeship_plan->status, 
                    ['class' => 'form-control','placeholder' => 'Pick a option...']) 
                !!}
                @error('usage')
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
          {!! Form::submit(trans('app.plan.edit'), ['class' => 'btn btn-success']) !!}
          {!! link_to_route('membeship-plan.index',  'Cancel', $parameters = [],  ['class' => 'btn btn-secondary']) !!} 
        </div>
      </div>
      {!! Form::close() !!}
    </section>
    <!-- /.content -->

@endsection