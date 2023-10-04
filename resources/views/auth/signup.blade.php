@extends('template')
@section('content')

<style>
    .logo {

        width: 100px;
        height: 100px;
    }
     /* .card {
        background-color: #f0f0f0;
    }  */
    
</style>

<body style="font-family: Inter;">
    <div class="container">
        <div class=" d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="card" style="width: 400px">
                <div class="logo mx-auto">
                    <img src="/images/logo.png" class="img-fluid">
                </div>
    
                <div class="card-body">
                    <div class="mb-4 ">
                        <label class="fs-4 "> Sign Up </label>
                    </div>
                    <form method="POST" action="{{ route('info') }}">
                        @csrf <!-- Add the CSRF token -->
    
                        <!-- Name input -->
                        <div class="mb-4">
                            <input type="text" id="form1Example1" class="form-control" name="fullname" placeholder="Full Name" value="{{old('fullname')}}" />
                            @error('fullname')
                            <span class="text-danger fs-10">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Email input -->
                        <div class="mb-4">
                            <input type="text" id="form1Example1" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" />
                            @error('email')
                            <span class="text-danger fs-10">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Password input -->
                        <div class="mb-4">
                            <input type="password" id="form1Example2" class="form-control" placeholder="Password" name="password"  />
                            @error('password')
                            <span class="text-danger fs-10">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <!-- Password confirmation input -->
                        <div class="mb-4">
                            <input type="password" id="form1Example2" class="form-control" placeholder="Confirm Password" name="cpassword"  />
                            @error('cpassword')
                            <span class="text-danger fs-10">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-2 w-75 mx-auto" name="signup">Sign up</button>
                        <div class="text-center mx-auto">
                            <label class="">Already have an account?</label>
                            <a href="/login">Login</a>
                        </div>
                        
                    </form>
            </div>
        </div>
        </div>
        
    </div>

@endsection
