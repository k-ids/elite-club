@extends('admin.layouts.master')

@section('title', 'Artisan Console')

@section('content')

<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card card-primary card-outline">
               <div class="card-body pad table-responsive">
                  <a href="{{ route('developer-console.create') }}" class="btn btn-primary">
                  	 <i class="fas fa-plus"></i>
                      {{ trans('general.artisan.heading') }}
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card card-primary card-outline">
            <div class="card-header">
               <h3 class="card-title">
               	   <i class="fas fa-edit"></i>
                   @yield('title') Table
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>S.No</th>
                        <th>Command</th>
                        <th>Descrption</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($commands as $key => $value)
                     @php  $counter = 0 @endphp
                     <tr>
                        <td>{{ ++$counter }}</td>
                        <td>{{ $value->command }}</td>
                        <td>{{ $value->description }}</td>
                        
                        <td class="project-actions text-right">
                           <a class="btn btn-info btn-sm" href="{{ route('developer-console.edit', $value->id) }}">
                           <i class="fas fa-pencil-alt">
                           </i>
                              Edit
                           </a>

                           <a class="btn btn-success btn-sm" href="{{ route('developer-console.show', $value->id) }}">
                           <i class="fas fa-pencil-alt">
                           </i>
                              Run
                           </a>
                           
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
                  <tfoot>
                     <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>Action</th>
                     </tr>
                  </tfoot>
               </table>
            </div>
            <!-- /.card-body -->
         </div>
      </div>
      <!-- /.card -->
   </div>
</section>
@endsection