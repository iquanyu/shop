@extends('admin.layouts.admin')

@section('page_header_title', '新建权限')

@section('breadcrumb')

@endsection

@section('content')

<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">创建</h3>
        <div class="card-tools">
          <!-- This will cause the card to maximize when clicked -->
          <button type="button" class="btn btn-tool" data-widget="maximize"><i class="fas fa-expand"></i></button>
          <!-- This will cause the card to collapse when clicked -->
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
          <!-- This will cause the card to be removed when clicked -->
          <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-times"></i></button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="post" action="{{ route('admin.permissions.store') }}">
        @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label text-right">name</label>
            <div class="col-sm-8">
              <input type="name" name="name" class="form-control {{ active_class($errors->has('name'),'is-invalid') }}" id="name" placeholder="name">
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
              <input type="text" name="description" class="form-control {{ active_class($errors->has('description'),'is-invalid') }}" id="description" placeholder="description" aria-describedby="descriptionHelpBlock">
              @error('description')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
              @enderror
              <small id="descriptionHelpBlock" class="form-text text-muted">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
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
              <button type="submit" class="btn btn-info">创建</button>
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