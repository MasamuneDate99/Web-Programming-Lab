<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/layoutStyle.css">
    @yield('Style')
</head>
<body>
    
<header>
        {{-- <img src="{{asset('imgs/logo1.png') }}" width="" height="">
        <form action="/search">
            <input type="search" name="search" placeholder="Search Product Here">        
            <input type="submit" value="search">
        </form> --}}

        <div class="container-fluid bg-warning d-flex">
            <div class="col">
                <img src="{{ asset('imgs/logo1.png') }}" alt="">
            </div>
            <div class="col-lg-10">
                @csrf
                <form action="/search">
                    <input type="text" name="search" placeholder="Search product..." class="p-2 my-2 w-100">
            </div>
            <div class="col">
                    <input type="submit" value="Search" class="p-2 my-2">
                </form>
            </div>
        </div>
</header>
            <body> 
                    <div class="container-fluid d-flex bg-primary">
                        <div class="col-10">
                            <form action="/home">
                                <button type="submit" class="btn btn-outline-light">Home</button>
                            </form>
                        </div>
                        @auth
                            @if (Auth::user()->role == 'member')
                            <button type="button" class="btn btn-outline-light">Logout</button>
                        @endauth
                            @else     
                            <div class="col">
                                <form action="/loginPage">
                                    <button type="submit" class="btn btn-outline-light">Login</button>
                                </form>
                            </div>
                            <div class="col">
                                <form action="/register">
                                    <button type="submit" class="btn btn-outline-light" value="register">Register</a></button>
                                </form>
                            </div>
                            @endif
                    </div>
                @yield('body')
            </body>
    <footer>
        <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>© 2021 Copyright DY20-1</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>


</html>