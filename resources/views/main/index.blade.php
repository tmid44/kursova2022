@extends('layouts.main')

@section('contentL')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Довідник криптоват</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Цей вебсайт допоможе вам в управлінні своїми фінансами, а також розширить ваші знання про криптовалюту</p>


                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="{{$data['userCount']}}" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Клієнтів</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="{{$data['cryptoCount']}}" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Криптовалют</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="{{$data['cryptoUserCount']}}" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Доданих запитів</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{asset('assetsL/img/header1.png')}}" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main" class="mt-3">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="{{asset('assetsL/img/about.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 content order-last  order-lg-first">
                        <h3>Про цей сайт</h3>
                        <p>
                            Це сервіс, що дозволяє стежити за капіталізацією кожної з існуючих на сьогоднішній день криптовалют. З його допомогою можна стежити за динамікою та обсягами торгів будь-який з криптовалют, що відстежуються, за різний період часу.
                        </p>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-people-fill"></i>
                                <div>
                                    <h5>Користувачі</h5>
                                    <p>Багато користувачів користується цим ресурсом</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-graph-up-arrow"></i>
                                <div>
                                    <h5>Зміна балансу</h5>
                                    <p>Даний ресурс допоможе відслідковувати свій прибуток та убиток</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-pc-display-horizontal"></i>
                                <div>
                                    <h5>Інтерфейс</h5>
                                    <p>Цим вебсайт інтуїтивно зрозуміло та зручно користуватись</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Сервіси</span>
                    <h2>Сервіси</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assetsL/img/handbook.jpeg')}}" alt="" class="img-fluid">
                            </div>
                            <h3>Довідник</h3>
                            <p>Можливість запису своїх операцій з кріптовалютою</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assetsL/img/users.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <h3>Акаунт</h3>
                            <p>Кожен користувач може створити свій обліковий запис</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assetsL/img/stonks.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <h3>Прибуток</h3>
                            <p>Користувачі можуть відслідковувати свої прибутки та втрати</p>
                        </div>
                    </div><!-- End Card Item -->


                </div>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
@endsection

