@extends('admin.layouts.admin')


@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">用户</h3>

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
              <th>Email</th>
              <th>验证时间</th>
              <th>Created_at</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td><code>{{ $user->email }}</code></td>
              <td><span class="">{{ $user->email_verified_at }}</span></td>
              <td>{{ $user->created_at }}</td>
              <td><a><i class="fas fa-trash"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->

      <div class="card-footer clearfix">
        {{ $users->links() }}
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection