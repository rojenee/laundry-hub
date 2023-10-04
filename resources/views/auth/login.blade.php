@extends('template')
@section('content')
<style>
    .logo {

        width: 100px;
        height: 100px;
    }
    /* body {
    background-image: url('/images/bg.png');
    background-size: cover;
    background-position: center;
    
} */
</style>

<body style="font-family: Inter">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card" style="width: 400px">
            <!-- Colored section at the top -->
            <div style="height: 10px; background-color: #1E88E5; border-top-left-radius: 15px; border-top-right-radius: 15px;"></div>
    
            <div class="logo mx-auto">
                <img src="/images/logo.png" class="img-fluid">
            </div>
    
            <div class="card-body">
                <div class="mb-4 ">
                    <label class="fs-4"> Login to your account </label>
                </div>
                <form class="">
                    <!-- Email input -->
                    <div class="mb-4">
                        <input type="text" id="form1Example1" class="form-control" name="name" placeholder="Email or Phone number" />
                    </div>
    
                    <!-- Password input -->
                    <div class="mb-4">
                        <input type="password" id="form1Example2" class="form-control" placeholder="Password" name="password" />
                    </div>
                </form>
            </div>
    
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4 w-75 mx-auto" name="login">Login</button>
            <div class="mb-4 mx-auto">
                <label>Don't have an account? <a href="/signup">Sign up</a></label>
            </div>
        </div>
    </div>
    


@endsection
