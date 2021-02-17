@extends('admin.layouts.master') 
@section('title', 'Pages')
 @section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-body pad table-responsive">
                        <a href="{{ route('pages.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            {{ trans('general.email-template.heading') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">@yield('title')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Page</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                  @php $counter = 0; @endphp
                                   <tr>
                                       <td>{{ ++$counter }}</td>
                                       <td>{{ $page->name }}</td>
                                       <td>{{ $page->title }}</td>
                                       <td>
                                          <a class="btn btn-info btn-sm" href="{{ route('pages.edit', $page->id) }}">
                                          <i class="fas fa-pencil-alt">
                                          </i>
                                             Edit
                                          </a>
                                       </td>
                                       
                                   </tr>
                                @endforeach
                                <tfoot>
                                    <tr>
                                    <th>S.No</th>
                                    <th>Page</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection