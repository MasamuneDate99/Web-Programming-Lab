@extends('Master.layout')



@section('body')
    <div class="d-flex justify-content-center ">
        <form action="/loginVerif">      
            <h1> Welcome Back Cunt</h1>
        <input type="email" name="email" placeholder="email">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="checkbox" name="remember" id=""> Remember Me
        <br>
        <input type="submit" value="login">
        </form>      
    </div>
@endsection
