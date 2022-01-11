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
        <div class="container-fluid bg-warning d-flex">
            <div class="col">
                <img src="{{ asset('imgs/logo1.png') }}" alt="">
            </div>
            <div class="col-lg-10">
                @csrf
                <form action="/searchProduct">
                    <input type="text" name="search" placeholder="Search product..." class="p-2 my-2 w-100">
            </div>
            <div class="col">
                    <input type="submit" value="Search" class="p-2 my-2">
                </form>
            </div>
        </div>
</header>
            <body> 
                    <div class="container-fluid bg-primary">
                    <div class="row">
                        <div class="col-10 d-flex">
                            <form action="/">
                                 <button type="submit" class="btn btn-primary">Home</button>
                            </form>
                            <div class="col d-flex">
                                @auth
                                    @if (Auth::user()->role == 'member')
                                    <form action="/myCart">
                                        <button type="submit" class="btn btn-primary">My Cart</button>
                                    </form>
                                    <form action="/historyTransaction">
                                        <button type="submit" class="btn btn-primary">History Transaction</button>   
                                    </form>
                                    @endif
                                    @if (Auth::user()->role == 'admin')
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage Product
                                        </button>
                                        <div class="dropdown-content" aria-labelledby="dropdownMenu2">
                                            <form action="/viewProduct">
                                                <button class="dropdown-item" type="submit">View Product</button>
                                            </form>
                                            <form action="/addProduct">
                                                <button class="dropdown-item" type="submit">Add Product</button>
                                            </form>
                                        </div>
                                      </div> 
                                        {{-- dropdown --}}
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage Category
                                        </button>
                                         <div class="dropdown-content">
                                            <form action="/viewCategory">
                                                <button class="dropdown-item" type="submit">View Category</button>
                                            </form>
                                            <form action="/addCategory">
                                                <button class="dropdown-item" type="submit">Add Category</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                @endauth
                            </div>
                        </div>

                        <div class="col-sm d-flex">
                                @auth
                                    @if (Auth::user()->role == 'member')
                                @endauth
                                <form action="/logout">
                                <button type="submit" class="btn btn-primary">Logout</button>
                                </form>
                                    @else     
                                <div class="col">
                                    <form action="/loginPage">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="/register">
                                        <button type="submit" class="btn btn-primary" value="register">Register</a></button>
                                    </form>
                                </div>
                                @endif
                        </div>
                    </div>
                    </div>
                @yield('body')
            </body>
    <footer>
        <div class="section_padding_50 text-center">
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