<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>

<body>

    <!-- Encabezado con Navbar de Bootstrap -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">RevistApp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav" aria-controls="navbarNav" 
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <!-- Otros elementos del menú aquí -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            @yield('footer')
        </div>
    </footer>

    @vite(['resources/js/app.js'])
</body>

</html>
