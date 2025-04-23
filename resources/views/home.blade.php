@extends('layouts.app')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@section('content')
    <!-- Баннер -->
    <section class="banner-section text-light py-5"
             style="
             background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/banner/bg.jpg') }}');
             background-size: cover;
             background-position: center;
             min-height: 70vh;
         ">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="display-4 fw-bold mb-4">Профессиональные парикмахерские услуги</h1>
                <p class="lead fs-4">Создаем стиль, который подчеркнет вашу индивидуальность</p>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section id="services" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Наши услуги</h2>
            <div class="row g-4">
                <!-- Карточка 1 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/services/haircut.jpg') }}" class="card-img-top" alt="Мужская стрижка">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="bi bi-scissors"></i>
                                Мужская стрижка
                            </h5>
                            <p class="card-text">От 1500 руб.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 2 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/services/haircut.jpg') }}" class="card-img-top" alt="Стрижка бороды">
                        <div class="card-body">
                            <h5 class="card-title">Стрижка бороды</h5>
                            <p class="card-text">От 800 руб.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 3 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/services/haircut.jpg') }}" class="card-img-top" alt="Окрашивание">
                        <div class="card-body">
                            <h5 class="card-title">Окрашивание</h5>
                            <p class="card-text">От 2500 руб.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Галерея -->
    <section id="gallery" class="p-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Наши работы</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="{{ asset('images/gallery/1.jpg') }}" class="img-fluid rounded shadow" alt="Работа 1">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/gallery/2.jpg') }}" class="img-fluid rounded shadow" alt="Работа 2">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/gallery/2.jpg') }}" class="img-fluid rounded shadow" alt="Работа 3">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/gallery/1.jpg') }}" class="img-fluid rounded shadow" alt="Работа 4">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/gallery/2.jpg') }}" class="img-fluid rounded shadow" alt="Работа 5">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/gallery/1.jpg') }}" class="img-fluid rounded shadow" alt="Работа 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contacts" class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <h2>Контакты</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-geo-alt me-2"></i>Адрес: г. Москва, ул. Парикмахерская, 15
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-telephone me-2"></i>Телефон: +7 (999) 123-45-67
                        </li>
                        <li class="list-group-item">Время работы: 10:00 – 20:00</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A1a2b3c4d5e6f7g8h..."
                            width="100%"
                            height="300"
                            frameborder="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Форма записи -->
    <section class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white mb-4">Записаться онлайн</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('booking.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="Телефон" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
