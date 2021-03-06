@extends('admin.layouts.admin')

@section('page_header_title', '权限')

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

        <div class="card-tools">
          <div class="card-tool-buttons">
            <a href="{{ route('admin.permissions.create') }}" type="button" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>&nbsp;新增</a>

            <button type="button" class="btn btn-sm btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
            导出&nbsp;
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Dropdown link</a>
              <a class="dropdown-item" href="#">Dropdown link</a>
            </div>
          </div>
          <!-- <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  
            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div> -->
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>标识</th>
              <th>名称</th>
              <th>创建时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            @foreach($permissions as $permission)
            <tr>
              <td>{{ $permission->id }}</td>
              <td>{{ $permission->description }}</td>
              <td>{{ $permission->name }}</td>
              <td>{{ $permission->created_at->diffForHumans() }}</td>
              <!-- <td>
                <a href="#"><i class="far fa-eye"></i></a>
                <a href="#"><i class="far fa-edit"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </td> -->
              <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                  </a>
                  <a class="btn btn-info btn-sm" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                  </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->

      <div class="card-footer clearfix">
        
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection