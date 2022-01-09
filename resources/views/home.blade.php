@extends('Master.layout')

@section('body')

<div>


    <div>
        <h1>New Product</h1>
    </div>
    <div class="d-flex justify-content-center">
        Konten
    </div>
    <div>
        Page 1 2 3 4
    </div>

</div>

    @auth
        <h1>Sup ! {{Auth::user()->name}}</h1>
        @if (Auth::user()->role == 'admin')
            <h1>Admin Moment</h1>
        @endif
    @endauth
@endsection