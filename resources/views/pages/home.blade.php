@extends('layouts.main-layout')
@section('content')

    <section class="forms container">
        @auth
            <div>
                <h1>
                    Hello {{ Auth::user() -> name }}
                </h1>
        
                <h2>
                    Feel free to add one!!
                </h2>
        
                <a class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>
                <a class="btn btn-primary" href="{{ route('postcard.create') }}">ADD POSTCARD</a>
            </div>
    
        @else
            {{-- login form  --}}
            <div id="login-form">
                <h2>Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @method("POST")
                    @csrf
        
                    <label for="email">Email</label><br>
                    <input type="email" name="email"><br>
    
                    <label for="password">Password</label><br>
                    <input type="password" name="password"><br>
                    <br>
        
                    <button class="btn btn-primary" type="submit" > Login</button>
                </form>
            </div>
    
            <div id="registration-form">
                {{-- registration form  --}}
                <h2>Registration</h2>
                <form action="{{ route('register') }}" method="POST">
                    @method("POST")
                    @csrf
        
                    <label for="name">Name</label><br>
                    <input type="text" name="name"><br>
        
                    <label for="email">Email</label><br>
                    <input type="email" name="email"><br>
        
                    <label for="password">Password</label><br>
                    <input type="password" name="password"><br>
        
                    <label for="password_confirmation">Password Confirmation</label><br>
                    <input type="password" name="password_confirmation"><br>
                    <br>
        
                    <button class="btn btn-primary" type="submit" > Register</button>
                </form>
            </div>
        @endauth
    </section>


    <postcards-component></postcards-component>
@endsection