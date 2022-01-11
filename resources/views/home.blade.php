@extends('Master.layout')

@section('body')

<div>


    <div style="text-align: center">
        <h1>New Product</h1>
    </div>
    <div class="d-flex justify-content-center">
        <form action="/detailProduct">
        <div class="kiri">
            <div>
                {{-- Gambar 1 --}}
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('imgs/benti.png') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Venti</h5>
                      <p class="card-text">Katanya sih Archonnya McD.</p>
                      <button type="submit" class="btn btn-primary">More Detail</button>
                    </div>
                  </div>
            </div>

            <div>
                {{-- Gambar 2 --}}
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('imgs/30925.jpg') }}" class="card-img-top" height="280">
                    <div class="card-body">
                      <h5 class="card-title">Touhou</h5>
                      <p class="card-text">A Perfect Day to Die.</p>
                      <button type="submit" class="btn btn-primary">More Detail</button>
                    </div>
                  </div>
            </div>
        </form>
        </div>
        <form action="/detailProduct">
        <div class="kanan">
            <div>
                {{-- Gambar 1 --}}
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('imgs/bbtcat.jpg') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Bbtcat</h5>
                      <p class="card-text">Mweh</p>
                      <button type="submit" class="btn btn-primary">More Detail</button>
                    </div>
                  </div>
            </div>
            <div>
                {{-- Gambar 2 --}}
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('imgs/Angekatrina45.jpg') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Ninjisanji</h5>
                      <p class="card-text"> Ange Katarina 2434</p>
                      <button type="submit" class="btn btn-primary">More Detail</button>
                    </div>
                  </div>             
            </div>
        </form>     
        </div>
    </div>
    <div>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary"><<</button>
              <button type="button" class="btn btn-secondary">1</button>
              <button type="button" class="btn btn-secondary">2</button>
              <button type="button" class="btn btn-secondary">3</button>
              <button type="button" class="btn btn-secondary">4</button>
              <button type="button" class="btn btn-secondary">>></button>
            </div>
        </div>
    </div>

</div>

    @auth
        <h1>Sup ! {{Auth::user()->name}}</h1>
        @if (Auth::user()->role == 'admin')
            <h1>Admin Moment</h1>
        @endif
    @endauth
@endsection