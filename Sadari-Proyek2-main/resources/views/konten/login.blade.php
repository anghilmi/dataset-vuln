@extends('layouts.main')
@section('content')
<section class="login d-flex" style="background-color: #F7D5EB">
    <div class="login-left w-50 h-100">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="content">
                    <h1>Sign In to lorem ipsum dolor</h1>
                    <p>If you don’t have an account you can <a href="#"> Register here!</a></p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="login-right w-50 h-100">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="header">
                    <h1>Welcome Back</h1>
                </div>
                <div class="input-form ">
                    <form>
                        <div class="mt-20">
                          <label for="nik" class="form-label">Nik: </label>
                          <input type="email" class="form-control" id="nik" aria-describedby="nik" placeholder="Nik...">
                        </div>
                        <div class="mt-20">
                          <label for="password" class="form-label">Password: </label>
                          <input type="password" class="form-control" id="password" placeholder="Passsword...">
                        </div>
                        <a href="#" class="text-decoration-none text-black">Forgot Password?</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                 </div>
        </div>
        
        </div>
        
    
</section>
@endsection 
