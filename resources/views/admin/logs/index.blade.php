@extends('admin.layouts.admin')

@section('page_header_title', '操作日志')

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Starter Page</li>
</ol>
@endsection

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">操作日志</h3>

        <!-- <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div> -->
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>User</th>
              <th>Method</th>
              <th>Path</th>
              <th>Ip</th>
              <th>Input</th>
              <th>Created_at</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            @foreach($logs as $log)
            <tr>
              <td>{{ $log->id }}</td>
              <td>{{ $log->user_id }}</td>
              <td><span class="badge bg-green">{{ $log->method }}</span></td>
              <td><span class="badge bg-info">{{ $log->path }}</span></td>
              <td><span class="badge bg-primary">{{ $log->ip }}</span></td>
              <td><code>{{ $log->input }}</code></td>
              <td>{{ $log->created_at }}</td>
              <td><a href="javascript:" class="ajaxclass" data-id="{{ $log->id }}" data-url="{{ route('admin.logs.destroy', $log->id) }}" data-method="delete"><i class="fas fa-trash"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->

      <div class="card-footer clearfix">
        {{ $logs->links() }}
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection