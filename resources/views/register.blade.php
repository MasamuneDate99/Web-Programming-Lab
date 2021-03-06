@extends('Master.layout')



@section('body')
    <div class="d-flex justify-content-center">
        <form action="/registerVerif" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Join With Us</h1>
            <br>
            <input type="text" name="name" placeholder="Full Name">
            <div>
                Gender
                <br>
                <input type="radio" name="gender" id="male" value="male"> Male
                <input type="radio" name="gender" id="female" value="female"> Female
            </div>
            <textarea name="address" cols="50" rows="2" placeholder="Address"></textarea>
            <br>
            <input type="text" name="email" placeholder="Email">
            <br>
            <input type="password" name="password" placeholder="Password" id="">
            <br>
            <input type="password" name="confirmPassword" placeholder="Confirm Password">
            <br>
            <input type="checkbox" name="agreement" id=""> I agree with terms & conditions
            <br>
            <input type="submit" value="Register Now">
            @if ($errors->any())
            <h3 style="color: red">{{$errors->first()}}</h3>
        @endif
        </form>
        
    </div>

@endsection