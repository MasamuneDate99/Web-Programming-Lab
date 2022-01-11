@extends('Master.layout')

@section('body')
    <div class="d-flex justify-content-center ">
        <form action="/loginVerif" method="POST">  
            @csrf    
            <h1> Welcome Back</h1>
        <input type="email" name="email" placeholder="Email"
        value="{{Cookie::get('email') != null? Cookie::get('email') : ""}}">
        <br>
        <input type="password" name="password" placeholder="Password"
        value="{{Cookie::get('password') != null? Cookie::get('password') : ""}}">
        <br>
        <input type="checkbox" name="remember" id=""> Remember Me
        <br>
        @if ($errors ->any())
            <span style="color:red">
                {{$errors->first( )}}
            </span>
         @endif
        <br>
        <input type="submit" value="login">
        </form>      
    </div>
@endsection
