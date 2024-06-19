<div>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1>
        <title>Library</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li>
                        <a class="nav-link" href="" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a>
                    </li>
                </ul>
                <form id="form-logout" action="{{route('logout')}}" method="POST">
                    @csrf
                </form>
                <form action="{{ route('books.index') }}" method="GET" class="d-flex mb-3">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cerca un libro...">
                    <button type="submit" class="btn btn-primary">Cerca</button>
                </form>
                
            </div>
        </div>
    </nav>    
    
</body>
</html>
</div>