@extends('layouts.main')
@section('content')
<section class="register d-flex" style="background-color: #F7D5EB">
    <div class="register-left w-50 h-100">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="content">
                    
                </div>
            </div>
        </div>
        
    </div>
    <div class="register-right w-50 h-100 bg-white">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="header">
                    <h1>Create Account</h1>
                </div>
                <div class="input-form ">
                    <form>
                        <div class="mt-20">
                          <label for="name" class="form-label">Full Name: </label>
                          <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Full Name...">
                        </div>
                        <div class="mt-20">
                          <label for="email" class="form-label">Email: </label>
                          <input type="email" class="form-control" id="email" placeholder="Email Address...">
                        </div>
                        <div class="mt-20">
                            <label for="Password" class="form-label">Password: </label>
                            <input type="password" class="form-control" id="password" placeholder="Password...">
                          </div>
                        <a href="#" class="text-decoration-none">I agree with Terms and Privacy</a>
                        <button type="submit" class="btn btn-primary">Sign Up</button>   

                      </form>  
                 </div>
                 <p>Already have an account? <a href="#">Log In</a></p> 
            </div>
  
        </div>
        
    
</section>
@endsection 
