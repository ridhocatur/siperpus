@extends('layout.home')

@section('main')
<div class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="#" class="h1"><b>Si</b>Perpus</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Daftar Sebagai Member Baru</p>
            <form action="/daftar" method="post">
                @csrf
              <div class="input-group mb-3">
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input type="text" name="telp" id="telp" class="form-control @error('telp') is-invalid @enderror" placeholder="Nomor Telepon" value="{{ old('telp') }}">
                @error('telp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input type="text" name="user" id="user" class="form-control @error('user') is-invalid @enderror" placeholder="Username" value="{{ old('user') }}">
                @error('user')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input type="password" name="pass" id="pass" class="form-control @error('pass') is-invalid @enderror" placeholder="Password">
                @error('pass')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input type="password" name="u_pass" id="u_pass" class="form-control @error('u_pass') is-invalid @enderror" placeholder="Ulangi Password">
                @error('u_pass')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="row">
                <div class="col-8">
                    <a href="login" class="text-center">Login Disini</a>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</div>

@endsection