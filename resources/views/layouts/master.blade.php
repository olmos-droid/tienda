<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon"
        href="data:image/png;base64,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" />

</head>

<body class="p-2">
    <header class="p-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Items</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><span class="sr-only">(current)</span><a class="nav-link"
                                href="{{route('movies.index')}}">All items</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('movies.create')}}">Create Item</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Carrito</a></li>
                    </ul>
                </div>
                <div class="text-end">
                    <!-- <button type="button" onclick="{{}}" class="btn btn-sm btn-outline-light me-1">Login</button>
                    <button type="button" class="btn btn-sm btn-warning">Sign-up</button> -->
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" heigh="30" fill="" class="bi bi-person"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')


    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Inicio</a></li>
                <li class="nav-item"><a href="/movies" class="nav-link px-2 text-muted">Catalogo</a></li>
                <li class="nav-item"><a href="/FAQ" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="/knowUs" class="nav-link px-2 text-muted">Conocenos</a></li>
            </ul>
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>

</body>

</html>