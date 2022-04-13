@extends('layout.home')

@section('main')
<div class="hold-transition login-page">
    @if (session('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session('sukses') }}
    </div>
    @endif
    <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/" class="h1"><b>Si</b>Perpus</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Masuk</p>

        <form action="/login" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" id="user" name="user" class="form-control @error('user') is-invalid @enderror" placeholder="Username / Email">
            @error('user')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" id="pass" name="pass" class="form-control @error('pass') is-invalid @enderror" placeholder="Password">
            @error('pass')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-0">
          <a href="daftar" class="text-center">Belum Punya Akun ?</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection