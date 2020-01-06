@extends('admin.layouts.admin')

@section('page_header_title', '角色')

@section('breadcrumb')

@endsection

@section('content')

<div class="row justify-content-center">

	<div class="col-12">
		<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ $role->description }}</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool">编辑</button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
		      {{ $role->permissions }}
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->
	</div>
</div>

@endsection