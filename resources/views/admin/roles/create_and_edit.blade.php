@extends('admin.layouts.admin')

@section('page_header_title', '角色')

@section('breadcrumb')

@endsection

@section('content')

<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">@isset($role->id)编辑@else创建@endisset</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="post" action="@isset($role->id) {{ route('admin.roles.update', $role->id) }} @else {{ route('admin.roles.store') }} @endisset">
        @csrf
        @isset($role->id)
        @method('PUT')
        @endisset
        <div class="card-body">
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label text-right">name</label>
            <div class="col-sm-8">
              <input type="name" name="name" class="form-control {{ active_class($errors->has('name'),'is-invalid') }}" id="name" placeholder="name" value="@isset($role->id){{ $role->name }}@else{{ old('name') }}@endisset">
              @error('name')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
              @enderror
            </div>
            
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label text-right">description</label>
            <div class="col-sm-8">
              <input type="text" name="description" class="form-control {{ active_class($errors->has('description'),'is-invalid') }}" id="description" placeholder="description" aria-describedby="descriptionHelpBlock" value="@isset($role->id){{ $role->description }}@else{{ old('description') }}@endisset">
              @error('description')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
              @enderror

            </div>
          </div>


		  <div class="form-group row">
            <label for="permission" class="col-sm-2 col-form-label text-right">权限</label>
            <div class="col-sm-8">
              <select class="duallistbox" multiple="multiple" name="permission[]" id="permission">
              @foreach($permissions as $permission)
              <option value="{{ $permission->id }}" @if(in_array($permission->id, $role_permissions)) selected @endif>{{ $permission->description }}</option>
              @endforeach
              </select>
			  
              <small id="descriptionHelpBlock" class="form-text text-muted">
                <i class="fas fa-question-circle help-icon mr-1"></i>左边是所有权限，右边是当前角色所拥有权限
              </small>

            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="row">
            <div class="col-md-2">
            </div>
            
            <div class="col-md-8">
              <button type="submit" class="btn btn-info">@isset($role->id)更新@else创建@endisset</button>
              <button type="reset" class="btn btn-default float-right">取消</button>
            </div>
          </div>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
  </div>
</div>

@endsection