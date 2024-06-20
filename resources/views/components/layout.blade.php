<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .search-wrapper {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid position-relative">
            <a class="navbar-brand" href="#">La Libreria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>
                </ul>
                
                <form action="{{ route('books.index') }}" method="GET" class="d-flex search-wrapper">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cerca un libro...">
                    <button type="submit" class="btn btn-dark">Cerca</button>
                </form>
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <span class="nav-link">Benvenuto, {{ Auth::user()->name }}!</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('books.create') }}">Crea Libro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a>
                        </li>
                    @endauth
                </ul>
                
                <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>    
    {{$slot}}
</body>
</html>
