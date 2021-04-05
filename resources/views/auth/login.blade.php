@extends('layouts.login')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="{{ route('login') }}" method="POST" class="box">
                    @csrf
                    <h1>{{ config('app.name', 'Laravel') }} Login</h1>
                    <p class="text-muted">Please enter your login and password!</p>

                    <input type="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" required autocomplete="email" autofocus> 
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" required autocomplete="current-password"> 
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <a class="forgot text-muted" href="#">Forgot password?</a> 

                    <input type="submit" name="submit" value="Login">
                   
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
