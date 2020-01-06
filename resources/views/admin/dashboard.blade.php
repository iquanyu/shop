@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h1>{{ config('admin.name') }}</h1>
    <ul class="links list-inline mt-4 mb-4">
      <li class="list-inline-item">Lorem ipsum</li>
      <li class="list-inline-item">Phasellus iaculis</li>
      <li class="list-inline-item">Nulla volutpat</li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Environment</h3>
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
      <div class="card-body">
        <table class="table table-striped">
          <tbody>
            <tr><td width="120px">PHP version</td>
                <td>PHP/7.3.10-1+ubuntu16.04.1+deb.sury.org+1</td>
            </tr><tr><td width="120px">Laravel version</td>
                <td>5.8.35</td>
            </tr><tr><td width="120px">CGI</td>
                <td>fpm-fcgi</td>
            </tr><tr><td width="120px">Uname</td>
                <td>Linux Cola 4.4.0-151-generic #178-Ubuntu SMP Tue Jun 11 08:30:22 UTC 2019 x86_64</td>
            </tr><tr><td width="120px">Server</td>
                <td>nginx/1.16.1</td>
            </tr><tr><td width="120px">Cache driver</td>
                <td>file</td>
            </tr><tr><td width="120px">Session driver</td>
                <td>file</td>
            </tr><tr><td width="120px">Queue driver</td>
                <td>redis</td>
            </tr><tr><td width="120px">Timezone</td>
                <td>PRC</td>
            </tr><tr><td width="120px">Locale</td>
                <td>zh-CN</td>
            </tr><tr><td width="120px">Env</td>
                <td>local</td>
            </tr><tr><td width="120px">URL</td>
                <td>http://store.quanyu.site</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Available extensions</h3>
        <div class="card-tools">
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
          <span class="badge badge-primary">Label</span>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <ul class="products-list product-list-in-box">
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-database fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/log-viewer" target="_blank" class="product-title">
                        laravel-admin-ext/log-viewer
                    </a>
                                    </div>
            </li>
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-copy fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/backup" target="_blank" class="product-title">
                        laravel-admin-ext/backup
                    </a>
                                    </div>
            </li>
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-toggle-on fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/config" target="_blank" class="product-title">
                        laravel-admin-ext/config
                    </a>
                                    </div>
            </li>
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-sliders fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/api-tester" target="_blank" class="product-title">
                        laravel-admin-ext/api-tester
                    </a>
                                    </div>
            </li>
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-file fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/media-manager" target="_blank" class="product-title">
                        laravel-admin-ext/media-manager
                    </a>
                                    </div>
            </li>
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-clock-o fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/scheduling" target="_blank" class="product-title">
                        laravel-admin-ext/scheduling
                    </a>
                                    </div>
            </li>
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-bug fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/reporter" target="_blank" class="product-title">
                        laravel-admin-ext/reporter
                    </a>
                                    </div>
            </li>
                        <li class="item">
                <div class="product-img">
                    <i class="fa fa-flask fa-2x ext-icon"></i>
                </div>
                <div class="product-info">
                    <a href="https://github.com/laravel-admin-extensions/redis-manager" target="_blank" class="product-title">
                        laravel-admin-ext/redis-manager
                    </a>
                                    </div>
            </li>
            
            <!-- /.item -->
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Dependencies</h3>
        <div class="card-tools">
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
          <span class="badge badge-primary">Label</span>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
            <tbody><tr><td width="240px">php</td>
                    <td><span class="label label-primary">^7.1.3</span></td>
                </tr><tr><td width="240px">almasaeed2010/adminlte</td>
                    <td><span class="label label-primary">~2.4</span></td>
                </tr><tr><td width="240px">baum/baum</td>
                    <td><span class="label label-primary">~1.1</span></td>
                </tr><tr><td width="240px">encore/laravel-admin</td>
                    <td><span class="label label-primary">^1.7</span></td>
                </tr><tr><td width="240px">fideloper/proxy</td>
                    <td><span class="label label-primary">^4.0</span></td>
                </tr><tr><td width="240px">laravel/framework</td>
                    <td><span class="label label-primary">5.8.*</span></td>
                </tr><tr><td width="240px">laravel/tinker</td>
                    <td><span class="label label-primary">^1.0</span></td>
                </tr><tr><td width="240px">spatie/laravel-backup</td>
                    <td><span class="label label-primary">^6.7</span></td>
                </tr></tbody></table></div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>

@endsection