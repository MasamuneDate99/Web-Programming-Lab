@extends('Master.layout')



@section('body')
    <div class="d-flex justify-content-center">
        <form action="/registerVerif" >
            <h1>Join With Us</h1>
            <input type="text" name="fullName" placeholder="Full Name">
            <p>Gender</p>
            <input type="radio" name="gender" id="male"> Male
            <input type="radio" name="gender" id="female"> Female
            <br>
            <textarea name="address" cols="50" rows="2" placeholder="Address"></textarea>
            <br>
            <input type="text" name="email" placeholder="Email">
            <br>
            <input type="password" name="password" placeholder="Password" id="">
            <br>
            <input type="password" name="password2nd" placeholder="Confirm Password">
            {{-- @if ('password' != 'password2nd')
                <span style="color: red">
                    {{$errors->first( )}}
                </span>
            @endif --}}
            <br>
            <input type="checkbox" name="termsandconditions" id=""> I agree with terms & conditions
            <br>
            <input type="submit" value="Register Now">
        </form>
    </div>

@endsection