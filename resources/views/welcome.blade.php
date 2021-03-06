@extends('layouts.app')
@section('content')
    <div class="container-fluid main-blog position-relative">
        <img src="{{ asset('images/svg/1.svg') }}" class="position-absolute scroll-svg-down"
             style="bottom: -6%; left: 24%; z-index: 1;" alt="">
        <div class="row"
             style="background-image: url({{ asset('images/mainbg.png') }}); background-size: cover; height: 677px;">
            <div class="col-lg-5 col-12" style="padding-left: 7%; padding-top:15%;">
                <h1 class="text-fut-bold font-weight-bold text-white"
                    style="font-size: 35px; line-height: 100%; letter-spacing: 0.05em;">
                    Магазины книжной сети «Эрудит» - это волшебный и загадочный мир, который живет в каждой из наших
                    книг.
                </h1>

                <p class="text-fut-light" style="padding-top:5%; font-size: 15px; line-height: 140%; color: #444;">
                    Огромный ассортимент художественной и детской литературы, бизнеса и психологии, мягкие диваны и
                    удобные места для гостей специально созданы, чтобы каждый человек чувствовал себя у нас в магазинах
                    максимально комфортно.
                </p>
                <a href="/catalog">
                    <button class="text-fut-book but-hov"
                            style="margin-top: 5%; font-size: 16px; line-height: 21px; color:#444; padding: 15px 21px; border: 1px rgba(34,34,34,0.36) solid; background: transparent; cursor: pointer;">
                        Смотреть все книги
                    </button>
                </a>
            </div>
        </div>
        <img class="d-lg-none d-none" style="position: absolute; bottom: -13%; left:25%;"
             src="{{ asset('images/main-pic.png') }}" alt="">
    </div>
    <div class="container-fluid pt-5 position-relative" id="bestseller">
        <img src="{{ asset('images/svg/3.svg') }}" class="position-absolute scroll-svg-up" style="left: -1%; top: 5%;"
             alt="">
        <div class="row pb-5">
            <div class="col-12">
                <h2 class="font-weight-bold text-fut-bold h2-text-media d-lg-block d-none"
                    style="line-height: 179px; text-align: center; text-transform: uppercase; color: #CC4B8B;">
                    Бестселлеры
                </h2>
                <h2 class="font-weight-bold text-fut-bold h2-text-media d-lg-none d-block"
                    style="line-height: 139px; text-align: center; text-transform: uppercase; color: #CC4B8B;">
                    Бестселлеры
                </h2>
                <div class="container-fluid d-lg-block d-none position-relative" style="margin-top:-140px;">
                    <img src="{{ asset('images/svg/4.svg') }}" class="position-absolute scroll-svg-down"
                         style="left: 35%; bottom: 0;" alt="">
                    <img src="{{ asset('images/svg/1.svg') }}" class="position-absolute scroll-svg-up"
                         style="right: 0; bottom: 0;" alt="">

                    <div class="row justify-content-center">
                        <div class="col-12">
                            @include('books.bestsellers')
                        </div>
                    </div>
                </div>
                <div class="container-fluid d-lg-none d-block position-relative">
                    <img src="{{ asset('images/svg/4.svg') }}" class="position-absolute scroll-svg-up"
                         style="left: 35%; bottom: 0;" alt="">
                    <img src="{{ asset('images/svg/1.svg') }}" class="position-absolute scroll-svg-down"
                         style="right: 0; bottom: 0;" alt="">

                    <div class="row justify-content-center">
                        <div class="col-12">
                            @include('books.bestseller-media')
                        </div>
                    </div>
                </div>

                <div class="container-fluid" style="padding: 1% 8%">
                    <div class="row">
                        <h2 class="font-weight-bold text-fut-bold"
                            style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; padding-right:32px; color:#444;">
                            Жанры
                        </h2>
                        <span style="padding-top: 10px; font-size: 16px; line-height: 21px; text-align: center;">
                        <a href="" class="text-scale" style=" color: #CC4B8B;">
                        Смотреть все книги
                            </a>
                    </span>
                    </div>
                    <div class="row justify-content-center">
                        @foreach($genres as $genre)
                            <a href="{{ route('catalog', ['genre' => $genre->id]) }}"
                               class="cat-btn d-flex align-items-center mx-lg-2 mt-3 col-lg-2 col-6 py-lg-4 text-center font-weight-bold text-fut-light"
                               style="background-image: url({{ asset('images/border-tab.png') }}); background-size: 100% 100%; border:0px; background-color: transparent; font-size:18px; line-height: 120%; color:#444;"
                               aria-controls="" aria-selected="true"><span class="mx-auto">{{ $genre->name }}</span></a>
                        @endforeach
                    </div>
                </div>

                <div class="container-fluid position-relative" style="padding-top:7%;">
                    <img src="{{ asset('images/svg/5.svg') }}" class="position-absolute scroll-svg-up"
                         style="top: 15%; left: 6%;" alt="">
                    <img src="{{ asset('images/svg/6.svg') }}" class="position-absolute scroll-svg-down"
                         style="bottom: -3%; right: -3%;" alt="">
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <h2 class="font-weight-bold text-fut-bold"
                                style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; padding-right:32px; color:#444;">
                                Что почитать
                            </h2>
                        </div>
                        <div class="col-12">

                        </div>

                        <div class="container" style="padding-top: 4%;">
                            <div class="row justify-content-center">
                                <div class="col-11 d-lg-block d-none">
                                    @include('books.recomend_carousel')
                                </div>
                                <div class="col-11 d-lg-none d-block">
                                    @include('books.recomend-media ')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid sells-sector position-relative" id="actions"
         style="background-image: url({{ asset('images/3sector.png') }}); background-size: cover;">
        <img src="{{ asset('images/svg/7.svg') }}" class="position-absolute scroll-svg-up" style="left: -2%; top: 45%;"
             alt="">
        <img src="{{ asset('images/svg/3.svg') }}" class="position-absolute scroll-svg-down"
             style="right: -2%; top: 45%;" alt="">
        <div class="row pt-lg-5 pb-lg-0 pt-5 pb-0">
            <div class="col-lg-3 col-12 pr-0">
                <h3 class="text-fut-bold"
                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #3154CF;">
                    Акции на сегодня
                </h3>
                <div class="pr-3" style="border-right: 1px solid rgba(255, 255, 255, 0.4);">
                    @foreach($books as $discount)
                        @if($discount->discount)
                            <a href="/all_stock" style="text-decoration: none;">
                                <div class="row p-3 mt-5 mb-4 ml-1 mr-4 but-hov" style="background-color: white;">
                                    <div class="col-8 p-0">
                                        <div>
                                            <p class="text-fut-bold"
                                               style="font-size: 18px; line-height: 110%; letter-spacing: 0.05em; color: #444444;">
                                                {{ $discount->name }}
                                            </p>
                                            <p class="text-fut-book mb-0"
                                               style="font-size: 14px; line-height: 120%; letter-spacing: 0.05em; color: #888888;">
                                                {{--Осталось 2 дня--}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 p-0">
                                        <p class="py-4 text-center mb-0"
                                           style="border: 1px #E86969 solid; color: #E86969; font-size:20px;">
                                            -{{$discount->discount}}%
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                    {{--<a href="/all_stock" style="text-decoration: none;">--}}
                    {{--<div class="row p-3 mt-4 mb-4 ml-1 mr-4 but-hov" style="background-color: white;">--}}
                    {{--<div class="col-8 p-0">--}}
                    {{--<div>--}}
                    {{--<p class="text-fut-bold"--}}
                    {{--style="font-size: 18px; line-height: 110%; letter-spacing: 0.05em; color: #444444;">--}}
                    {{--Скидка на все канцтовары--}}
                    {{--</p>--}}
                    {{--<p class="text-fut-book mb-0"--}}
                    {{--style="font-size: 14px; line-height: 120%; letter-spacing: 0.05em; color: #888888;">--}}
                    {{--Осталось 2 дня--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-4 p-0">--}}
                    {{--<p class="py-4 text-center mb-0" style="border: 1px #3154CF solid; color: #3154CF;">--}}
                    {{---15%--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="/all_stock" style="text-decoration: none;">--}}
                    {{--<div class="row p-3 mt-4 mb-4 ml-1 mr-4 but-hov" style="background-color: white;">--}}
                    {{--<div class="col-8 p-0">--}}
                    {{--<div>--}}
                    {{--<p class="text-fut-bold"--}}
                    {{--style="font-size: 18px; line-height: 110%; letter-spacing: 0.05em; color: #444444;">--}}
                    {{--Скидка на все канцтовары--}}
                    {{--</p>--}}
                    {{--<p class="text-fut-book mb-0"--}}
                    {{--style="font-size: 14px; line-height: 120%; letter-spacing: 0.05em; color: #888888;">--}}
                    {{--Осталось 2 дня--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-4 p-0">--}}
                    {{--<p class="py-4 text-center mb-0" style="border: 1px #019D38 solid; color: #019D38;">--}}
                    {{---5%--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="/all_stock" style="text-decoration: none;">--}}
                    {{--<div class="row p-3 mt-4 mb-4 ml-1 mr-4 but-hov" style="background-color: white;">--}}
                    {{--<div class="col-8 p-0">--}}
                    {{--<div>--}}
                    {{--<p class="text-fut-bold"--}}
                    {{--style="font-size: 18px; line-height: 110%; letter-spacing: 0.05em; color: #444444;">--}}
                    {{--Скидка на все канцтовары--}}
                    {{--</p>--}}
                    {{--<p class="text-fut-book mb-0"--}}
                    {{--style="font-size: 14px; line-height: 120%; letter-spacing: 0.05em; color: #888888;">--}}
                    {{--Осталось 2 дня--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-4 p-0">--}}
                    {{--<p class="py-4 text-center mb-0" style="border: 1px #E86969 solid; color: #E86969;">--}}
                    {{---20%--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="/all_stock" style="text-decoration: none;">--}}
                    {{--<div class="row p-3 mt-4 mb-4 ml-1 mr-4 but-hov" style="background-color: white;">--}}
                    {{--<div class="col-8 p-0">--}}
                    {{--<div>--}}
                    {{--<p class="text-fut-bold"--}}
                    {{--style="font-size: 18px; line-height: 110%; letter-spacing: 0.05em; color: #444444;">--}}
                    {{--Скидка на все канцтовары--}}
                    {{--</p>--}}
                    {{--<p class="text-fut-book mb-0"--}}
                    {{--style="font-size: 14px; line-height: 120%; letter-spacing: 0.05em; color: #888888;">--}}
                    {{--Осталось 2 дня--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-4 p-0">--}}
                    {{--<p class="py-4 text-center mb-0" style="border: 1px #019D38 solid; color: #019D38;">--}}
                    {{---5%--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}

                    <a class="pl-3 text-fut-bold text-scale" href="all_stock" style="color: #444; font-size: 18px;">...еще {{ \App\Book::where('discount','!=',null)->count()  }}
                        акции
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-12 pl-lg-5 pl-4">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-12 pt-lg-0 pt-5">
                        <h3 class="text-fut-bold"
                            style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #444444;">
                            Новинки 2019
                        </h3>
                    </div>
                    <div class="col-lg-4 col-12 pt-lg-0 pt-4">
                        <a href="/catalog">
                            <button class="text-fut-bold py-3 px-5 but-hov" href=""
                                    style="background: #3154CF; color: white; border:0px; cursor: pointer;">
                                Смотреть все
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row mt-4 pt-2 justify-content-center">
                    @foreach($books as $book)
                        @if($book->new == 1)
                            @if($loop->index == 6)
                                @break
                            @endif
                            <div class="col-lg-3 col-12 item m-2 p-4 shadow"
                                 style="background-color: white; max-width: 259px;">
                                <a href="{{ asset('book/'.$book->id) }}" style="text-decoration: none;">
                                    <div class="" style="height: 65%;">
                                        @if (filter_var($book->image, FILTER_VALIDATE_URL))
                                            <img class="w-100 h-100" src="{{ $book->image }}" alt="">
                                        @else
                                            <img class="w-100 h-100" src="{{ asset('storage/'.$book->image) }}" alt="">
                                        @endif
                                    </div>
                                    <h3 class="text-fut-book mt-3 text-left"
                                        style="font-size: 16px; line-height: 110%; letter-spacing: 0.05em; color: #444;">
                                        {{ \Illuminate\Support\Str::limit($book->name,50,'...')  }}
                                    </h3>
                                </a>
                                <div class="p-0 text-left">
                                    @guest
                                        <span class="text-fut-book"
                                              style="font-size:18px; letter-spacing: 0.05em;">
                                                            {{ $book->price_retail }} сом
                                                    </span>
                                    @else
                                        <span class="text-fut-book"
                                              style="font-size:18px; letter-spacing: 0.05em;">
                                                            {{ $book->price_wholesale }} сом
                                                    </span>
                                    @endguest
                                </div>
                                <div class="container-fluid mr-0 pr-0"
                                     style="position: absolute; bottom:3%; color:#444;">
                                    <div class="row justify-content-center" style="width:87%;">
                                        <button
                                            class="btn-primary text-fut-book but-hov mx-auto text-white buy_book py-2 w-100"
                                            data-id="{{ $book->id }}" data-aos="fade-up"
                                            style="font-size: 14px; border:0; cursor: pointer;">
                                            Добавить в корзину
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative py-5 my-5">
        <img src="{{ asset('images/svg/8.svg') }}" class="position-absolute scroll-svg-down" style="left: 20%; top: 2%;"
             alt="">
        <img src="{{ asset('images/svg/9.svg') }}" class="position-absolute scroll-svg-up" style="left: -1%; top: 42%;"
             alt="">
        <img src="{{ asset('images/svg/10.svg') }}" class="position-absolute scroll-svg-down"
             style="left: 30%; bottom: -7%;" alt="">
        <img src="{{ asset('images/svg/11.svg') }}" class="position-absolute scroll-svg-up"
             style="right: -2%; bottom: 7%;" alt="">
        <div class="p-lg-5 p-0 pt-lg-5 pt-5">
            <div class="row p-lg-5">
                <div class="col-lg-6 col-12 cat-scale"
                     style="background-image: url({{ asset('images/cat1.png') }}); background-size: cover; height: 324px; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);">
                    <a href="/catalog">
                        <div class="w-100 h-100">
                            <div style="position: absolute; bottom: 28%; left:10%;">
                                <h3 class="text-fut-bold"
                                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #3154CF;">
                                    Товары для
                                    <br>
                                    творчества
                                </h3>
                                <p class="text-fut-bold text-scale"
                                   style="font-size: 16px; line-height: 120%; letter-spacing: 0.05em; color: #444;">
                                    Смотреть <span><img src="{{ asset('images/1arrow.png') }}" alt=""></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-6 col-12 cat-scale d-lg-block d-none"
                     style="background-image: url({{ asset('images/cat2.png') }}); background-size: cover; background-position: center; height: 324px;box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);">
                    <a href="/catalog">
                        <div class="w-100 h-100">
                            <div style="position: absolute; bottom: 28%; left: 55%;">
                                <h3 class="text-fut-bold"
                                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #CC4B8B;">
                                    Канцелярские
                                    <br>
                                    товары
                                </h3>
                                <p class="text-fut-bold text-scale"
                                   style="font-size: 16px; line-height: 120%; letter-spacing: 0.05em; color: #444;">
                                    Смотреть <span><img src="{{ asset('images/1arrow.png') }}" alt=""></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-12 cat-scale d-lg-none d-block"
                     style="background-image: url({{ asset('images/cat2-mobile.png') }}); background-size: cover; background-position: center; height: 324px;box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);">
                    <a href="/catalog">
                        <div class="w-100 h-100">
                            <div style="position: absolute; bottom: 28%; left: 10%;">
                                <h3 class="text-fut-bold"
                                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #CC4B8B;">
                                    Канцелярские
                                    <br>
                                    товары
                                </h3>
                                <p class="text-fut-bold text-scale"
                                   style="font-size: 16px; line-height: 120%; letter-spacing: 0.05em; color: #444;">
                                    Смотреть <span><img src="{{ asset('images/1arrow.png') }}" alt=""></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-12 cat-scale"
                     style="background-image: url({{ asset('images/cat3.png') }}); background-size: cover; height: 324px; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);">
                    <a href="/catalog">
                        <div class="w-100 h-100">
                            <div style="position: absolute; bottom: 28%; left:10%;">
                                <h3 class="text-fut-bold"
                                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #444;">
                                    Настольные
                                    <br>
                                    игры
                                </h3>
                                <p class="text-fut-bold text-scale"
                                   style="font-size: 16px; line-height: 120%; letter-spacing: 0.05em; color: #444;">
                                    Смотреть <span><img src="{{ asset('images/1arrow.png') }}" alt=""></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-12 cat-scale d-lg-block d-none"
                     style="background-image: url({{ asset('images/cat4.png') }}); background-position: center; background-size: cover; height: 324px; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);">
                    <a href="/catalog">
                        <div class="w-100 h-100">
                            <div style="position: absolute; bottom: 28%; left:55%;">
                                <h3 class="text-fut-bold"
                                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #fefefe;">
                                    Учебные
                                    <br>
                                    материалы
                                </h3>
                                <p class="text-fut-bold text-scale-white"
                                   style="color: #fefefe; font-size: 16px; line-height: 120%; letter-spacing: 0.05em;">
                                    Смотреть <span><img style="filter: invert(100%)"
                                                        src="{{ asset('images/1arrow.png') }}" alt=""></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-12 cat-scale d-lg-none d-block"
                     style="background-image: url({{ asset('images/cat4-mobile.png') }}); background-position: center; background-size: cover; height: 324px; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);">
                    <a href="/catalog">
                        <div class="w-100 h-100">
                            <div style="position: absolute; bottom: 28%; left:10%;">
                                <h3 class="text-fut-bold"
                                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #fefefe;">
                                    Учебные
                                    <br>
                                    материалы
                                </h3>
                                <p class="text-fut-bold text-scale-white"
                                   style="color: #fefefe; font-size: 16px; line-height: 120%; letter-spacing: 0.05em;">
                                    Смотреть <span><img style="filter: invert(100%)"
                                                        src="{{ asset('images/1arrow.png') }}" alt=""></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container pt-lg-0 pt-4" id="schet" style="margin-top: 5%;">
        <img src="{{ asset('images/svg/12.svg') }}" class="position-absolute scroll-svg-down" style="left: 0;" alt="">
        <img src="{{ asset('images/svg/13.svg') }}" class="position-absolute scroll-svg-up" style="left: 40%;" alt="">
        <img src="{{ asset('images/svg/9.svg') }}" class="position-absolute scroll-svg-down"
             style="right: -4%; width: 194px; height: 194px; -webkit-transform: rotate(83deg);-moz-transform: rotate(83deg);-ms-transform: rotate(83deg);-o-transform: rotate(83deg);transform: rotate(83deg);"
             alt="">
        <div class="row pb-5">
            <div class="col-lg-5 col-12">
                <h2 class="text-fut-bold"
                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #444;">
                    Невероятно уютный <br>
                    книжный магазин <br>
                    «Эрудит»
                </h2>
                <p class="text-fut-light pt-3"
                   style="font-size: 18px; line-height: 140%; letter-spacing: 0.05em; color: #444;">
                    Мы одними из первых получаем новинки всех главных книжных издательств и всегда идем в ногу со
                    временем. Огромный ассортимент художественной и детской литературы, бизнеса и психологии, мягкие
                    диваны и удобные места для гостей специально созданы, чтобы каждый человек чувствовал себя у нас в
                    магазинах максимально комфортно. А оставить довольным каждого – это наша первоочередная задача!
                </p>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-3 col-12 numbers">
                <h2 class="font-weight-bold "
                    style="font-family: 'Roboto', sans-serif; font-size: 72px; line-height: 140%; letter-spacing: 0.05em; color: #444; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <span class="value">15</span>+
                </h2>
                <p class="text-fut-light pt-3"
                   style="font-size: 16px; line-height: 140%; letter-spacing: 0.05em; color: #444;">
                    Больше 15 видов жанров книг в наличии в наших магазинах
                </p>
                <a href="/about_us">
                    <button type="button" class="text-fut-book mt-5 but-hov" data-aos="fade-up"
                            style="color: #444;font-size: 15px; padding: 14px 22px; background-color: transparent; border: 1px rgba(34,34,34,0.36) solid; cursor: pointer;">
                        Подробнее о нас
                    </button>
                </a>
            </div>
            <div class="col-lg-3 col-12 pt-lg-0 pt-4">
                <h2 class="font-weight-bold numbers"
                    style="font-family: 'Roboto', sans-serif; font-size: 72px; line-height: 140%; letter-spacing: 0.05em; color: #444; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <span class="value">9000</span>+
                </h2>
                <p class="text-fut-light pt-3"
                   style="font-size: 16px; line-height: 140%; letter-spacing: 0.05em; color: #444;">
                    Самых разных книг Вы сможете найти у нас и с удовольствием почитать
                </p>
                <a class="" href="/catalog">
                    <button class="text-fut-book mt-5 but-hov" data-aos="fade-up"
                            style="font-size: 15px; padding: 15px 23px; background-color: #F7E600; border:0; cursor: pointer;">
                        Смотреть все книги
                    </button>
                </a>
            </div>
        </div>
        <div>
            <div class="row pt-5 pb-5">
                <div class="owl-one owl-carousel text-center">
                    <div class="px-lg-3 px-0">
                        <img class="w-100" style="border: 5px solid #F7E600;" src="{{ asset('images/shop1.png') }}"
                             alt="">
                    </div>
                    <div class="px-lg-3 px-0">
                        <img class="w-100" style="border: 5px solid #F7E600;" src="{{ asset('images/shop2.png') }}"
                             alt="">
                    </div>
                    <div class="px-lg-3 px-0">
                        <img class="w-100" style="border: 5px solid #F7E600;" src="{{ asset('images/shop3.png') }}"
                             alt="">
                    </div>
                    <div class="px-lg-3 px-0">
                        <img class="w-100" style="border: 5px solid #F7E600;" src="{{ asset('images/shop4.png') }}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-5" style="padding-top:10%;">
            <div class="col-lg-4 col-12 text-center">
                <div class="row">
                    <div class="col-lg-2 col-3 pt-lg-0 pt-4">
                        <img src="{{ asset('images/book-ico1.png') }}" alt="">
                    </div>
                    <div class="col-9 text-left pl-lg-4 pl-4">
                        <h4 class="text-fut-bold pt-3" style="font-size: 17px; line-height: 22px;">Большой
                            ассортимент</h4>
                        <p class="text-fut-book" style="">
                            У нас Вы можете упаковать подарок и заказать доставку по всей стране, купить книги и комиксы
                            на многих языках мира и подобрать лучший вариант, который подойдет только Вам!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 text-center">
                <div class="row">
                    <div class="col-lg-2 col-3 pt-lg-0 pt-4">
                        <img src="{{ asset('images/book-ico2.png') }}" alt="">
                    </div>
                    <div class="col-9 text-left pl-lg-4 pl-4">
                        <h4 class="text-fut-bold pt-3" style="font-size: 17px; line-height: 22px;">Лидеры продаж</h4>
                        <p class="text-fut-book" style="">
                            Также наш оптовый склад – самый крупный в стране, мы продаем книги и канцелярские товары во
                            многие страны, такие как Казахстан, Таджикистан и Узбекистан и тд
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 text-center">
                <div class="row">
                    <div class="col-lg-2 col-3 pt-lg-0 pt-4">
                        <img src="{{ asset('images/book-ico3.png') }}" alt="">
                    </div>
                    <div class="col-9 text-left pl-lg-4 pl-4">
                        <h4 class="text-fut-bold pt-3" style="font-size: 17px; line-height: 22px;">Акции и
                            розыгрыши</h4>
                        <p class="text-fut-book" style="">
                            В наших социальных сетях регулярно проходят розыгрыши книг и различных подарков.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container position-relative px-5" style="padding-top:5%;">
        <img src="{{ asset('images/svg/13.svg') }}" class="position-absolute scroll-svg-down svg feedback-icon" alt="">
        <img src="{{ asset('images/svg/14.svg') }}" class="position-absolute scroll-svg-up" style="right: 10%; top: 0;"
             alt="">
        <img src="{{ asset('images/svg/9.svg') }}" class="position-absolute scroll-svg-down"
             style="left: -14%; bottom: 0; width: 194px; height: 194px; -webkit-transform: rotate(83deg);-moz-transform: rotate(83deg);-ms-transform: rotate(83deg);-o-transform: rotate(83deg);transform: rotate(83deg);"
             alt="">
        <img src="{{ asset('images/svg/plus.svg') }}" class="position-absolute scroll-svg-up"
             style="right: 0; bottom: 0;" alt="">
        <div class="row">
            <img class="d-lg-block d-none" style="position: absolute;" src="{{ asset('images/feedback.png') }}" alt="">
            <img class="d-lg-none d-block" style="position: absolute; width:85%;"
                 src="{{ asset('images/feedback.png') }}" alt="">
            <h2 class="text-fut-bold pt-4"
                style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #444444;">
                Отзывы о нашем
                <br>
                магазине
            </h2>

            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-8 d-lg-block d-none">
                        @include('_partials.feedbacks')
                    </div>
                    <div class="col-12 d-lg-none d-block pt-lg-0 pt-5">
                        @include('_partials.feedbacks-media')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-lg-0 pt-5 pb-5" id="news">
        <div class="row px-lg-5 px-1">
            <div class="col-12 pb-4 d-flex align-items-center">
                <h2 class="text-fut-bold"
                    style="font-size: 30px; line-height: 120%; letter-spacing: 0.05em; color: #444444;">
                    Интересное
                </h2>
                <a href="/news" class="ml-5">читать все статьи</a>
            </div>
            @foreach($news as $new)
                <div class="col-lg-4 col-12 pt-lg-0 pt-4">
                    <div class="shadow-hover h-100">
                        <img class="w-100" src="{{ asset('storage/'.$new->preview) }}" alt="">
                        <div class="p-3">
                            <h4 class="text-fut-bold"
                                style="font-size: 18px; line-height: 120%; letter-spacing: 0.05em; color: #444;">
                                {{ $new->name }}
                            </h4>
                            <p class="text-fut-book"
                               style="font-family: Futura PT; font-style: normal; font-weight: normal; font-size: 15px; line-height: 130%; letter-spacing: 0.05em;">
                                {{\Illuminate\Support\Str::limit($new->description,70,'...')  }}
                            </p>
                            <a href="{{ route('news.show',$new->id) }}" class="text-fut-book text-scale"
                               style="font-size: 15px; line-height: 130%; letter-spacing: 0.05em; color: #444; text-decoration: underline;">
                                Читать полностью
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $(window).scroll(testScroll);
        var viewed = false;

        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height() + 200;

            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();

            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }

        function testScroll() {
            if (isScrolledIntoView($(".numbers")) && !viewed) {
                viewed = true;
                $('.value').each(function () {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 1000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            }
        }
    </script>
@endpush
