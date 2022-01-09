@extends('Master.layout')

@section('body')
    <h1>Home test 123</h1>

    @auth
        <h1>Sup ! {{Auth::user()->name}}</h1>
        @if (Auth::user()->role == 'admin')
            <h1>Admin Moment</h1>
        @endif
    @endauth
@endsection