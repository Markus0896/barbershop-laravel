<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Навигация -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="/" class="navbar-brand">
            <i class="bi bi-scissors me-2"></i>BarberShop
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#services" class="nav-link">Услуги</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Галерея</a></li>
                <li class="nav-item"><a href="#contacts" class="nav-link">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Контент страницы -->
<main>
    @yield('content')
</main>

<!-- Подвал -->
<footer class="bg-dark text-white text-center p-3 mt-5">
    © {{ date('Y') }} BarberShop. Все права защищены.
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
