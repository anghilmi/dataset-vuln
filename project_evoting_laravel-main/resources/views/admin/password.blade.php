@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div>
                <h5>Ganti Password</h5>
                <small class="text-muted">Ganti password Admin</small>
            </div>
            <hr>

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            
            <div class="card">
                <div class="card-header"><b>Ganti Password</b></div>

                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="post" action="{{ route('password.aksi') }}">
                        @csrf
                        <div class="form-group">
                            <label>Password Lama</label>
                            <input id="current-password" type="password" placeholder="Password lama" class="form-control" name="current-password">

                            @if ($errors->has('current-password'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('current-password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="control-label">Password Baru</label>
                            <input id="new-password" type="password" placeholder="Password baru" class="form-control" name="new-password">

                            @if ($errors->has('new-password'))
                            <span class="help-block text-danger"></span>
                                <strong>{{ $errors->first('new-password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Konfirmasi Password Baru</label>
                            <input id="new-password-confirm" type="password" placeholder="Konfirmasi password baru" class="form-control" name="new-password_confirmation">

                            @if ($errors->has('new-password_confirmation'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('new-password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>

                        <input type="submit" name="submit" value="Ganti Password" class="btn btn-primary btn-sm">

                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
