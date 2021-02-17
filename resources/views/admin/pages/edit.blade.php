@extends('admin.layouts.master')

@section('title', 'Edit Page')

@section('content')

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ trans('general.email-template.heading') }}</h3>

            </div>

            {!! Form::open(['route' => ['pages.update', $page->id], 'files' => true, 'method'=>'PUT']) !!}
           <div class="card-body">

              <div class="form-group">
                {!! Form::label('Page Name', 'Page Name', ['class' => 'required']) !!}
                {!! Form::text('name', old('name', $page->name), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('Title', 'Page Title', ['class' => 'awesome']) !!}
                {!! Form::text('title',  old('title', $page->title), array_merge(['class' => 'form-control'], ['required' => true])) !!}
                  @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('Content', 'Page Content', ['class' => 'awesome']) !!} 
                {!! Form::textarea('content', old('content', $page->content), array_merge(['class' => 'form-control textarea'], ['required' => true])) !!}
                 @error('content')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('Meta Title', 'Meta Title', ['class' => 'awesome']) !!}
                {!! Form::text('meta_title',  old('meta_title', $page->meta_title), ['class' => 'form-control']) !!}
                  @error('meta_title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('Meta Keyword', 'Meta Keyword', ['class' => 'awesome']) !!}
                {!! Form::text('meta_keyword',  old('meta_keyword', $page->meta_keyword), ['class' => 'form-control']) !!}
                  @error('meta_keyword')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              
              <div class="form-group">
                {!! Form::label('Meta Description', 'Meta Description', ['class' => 'awesome']) !!}
                {!! Form::text('meta_description',  old('meta_description', $page->meta_description), ['class' => 'form-control']) !!}
                  @error('meta_description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                {!! Form::label('Meta Tags', 'Meta Tags', ['class' => 'awesome']) !!}
                {!! Form::text('meta_tags',  old('meta_tags', $page->meta_tags), ['class' => 'form-control']) !!}
                  @error('meta_tags')
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
          {!! Form::submit(trans('app.page.edit'), ['class' => 'btn btn-success']) !!}
          {!! link_to_route('pages.index',  'Cancel', $parameters = [],  ['class' => 'btn btn-secondary']) !!} 
        </div>
      </div>
      {!! Form::close() !!}
    </section>
    <!-- /.content -->

@endsection