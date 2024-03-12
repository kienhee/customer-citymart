@extends('client.layout.index')
@section('title', __('Trang chủ'))
@section('content')

    <!-- Banner Section Start -->
    <section class="banner__slider__section">
        <div class="container">
            <div class="row align-items-center column-reverse">
                <div class="col-lg-6 col-md-6">
                    <div class="banner__content">
                        <h4>One-stop for head to toe look</h4>
                        <h1>Shop what you wanted</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque feugiat amet penatibus arcu
                            diam eget massa rhoncus nulla. Imperdiet mattis risus
                            amet velit in eget neque, non.
                        </p>
                        <div class="hero-btn">
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="hero__swiper__slider">
                        <div class="swiper hero__mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider__image">
                                        <img src="{{ asset('client-frontend') }}/assets/images/banner/banner-slider-01.png"
                                            alt="banner-bg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image">
                                        <img src="{{ asset('client-frontend') }}/assets/images/banner/banner-slider-02.png"
                                            alt="banner-bg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image">
                                        <img src="{{ asset('client-frontend') }}/assets/images/banner/banner-slider-01.png"
                                            alt="banner-bg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image">
                                        <img src="{{ asset('client-frontend') }}/assets/images/banner/banner-slider-02.png"
                                            alt="banner-bg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image">
                                        <img src="{{ asset('client-frontend') }}/assets/images/banner/banner-slider-01.png"
                                            alt="banner-bg" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next">
                                <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Slider Section End -->
    <!-- Sale Section Start -->
    @if ($productSale->count() > 0)
        <section class="sale__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <div class="section-title__wrap">
                                <h2>{{ __('Sản phẩm khuyến mãi') }}</h2>
                                {{-- <div class="sales__countdown countdown__wrapper">
                                <div id="salesCountdown"></div>
                            </div> --}}
                            </div>
                            <a href="{{ route('shop', ['filter' => 'Sale']) }}" class="solid-btn">{{ __('Tất cả') }} <i
                                    class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__wrapper swiper__pagination">
                            <div class="swiper sale__Swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($productSale as $item)
                                        <div class="swiper-slide">
                                            <x-product id="{{ $item->id }}" images="{{ $item->images }}"
                                                name="{{ $item->name }}" description="{{ $item->description }}"
                                                slug="{{ $item->slug }}" price="{{ $item->price }}"
                                                discount="{{ $item->discount }}" quantity="{{ $item->quantity }}"
                                                colors="{{ $item->colors }}" sizes="{{ $item->sizes }}" />
                                        </div>
                                    @endforeach

                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-button-next">
                                        <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper-button-prev">
                                    <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Sale Section End -->


    <!-- Trending Section Start -->
    @foreach ($productsByCategory as $item)
        <section class="trending__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>{{ $item['category_name'] }}</h2>
                            <a href="{{ route('shop', ['category' => $item['category_name']]) }}"
                                class="solid-btn">{{ __('Tất cả') }}
                                <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__wrapper swiper__pagination">
                            <div class="swiper trending__Swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($item['products'] as $item)
                                        <div class="swiper-slide">
                                            <x-product id="{{ $item['id'] }}" images="{{ $item['images'] }}"
                                                name="{{ $item['name'] }}" description="{{ $item['description'] }}"
                                                slug="{{ $item['slug'] }}" price="{{ $item['price'] }}"
                                                discount="{{ $item['discount'] }}" quantity="{{ $item['quantity'] }}"
                                                colors="{{ $item['colors'] }}" sizes="{{ $item['sizes'] }}" />
                                        </div>
                                    @endforeach
                                </div>

                                <div class="swiper-slide">
                                    <div class="swiper-button-next">
                                        <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper-button-prev">
                                    <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <!-- Trending Section End -->

    {{-- <!-- CAll To Action Start -->
    <section class="call__to__action">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta__box__wrapper text-center">
                        <h2 class="cta__title">Get notified when we're launching new products</h2>
                        <p class="cta__content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet leo, porta aliquet non mattis.
                            Nulla ante pellentesque blandit fermentum.
                        </p>
                        <form action="#" method="post" class="cta__form">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" />
                            <button type="submit" class="btn btn-primary">Notify me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CAll To Action End --> --}}

    <!-- Feature Section Start -->
    <section class="feature__section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="feature__single__item" data-bg="#ECFDF3">
                        <div class="feature__image">
                            <img src="{{ asset('client-frontend') }}/assets/images/feature/feature-01.png"
                                alt="feature-image" />
                        </div>
                        <div class="feature__content">
                            <h4 class="feature__title">Mega Discounts</h4>
                            <p>When sign up</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="feature__single__item" data-bg="#FFFAEB">
                        <div class="feature__image">
                            <img src="{{ asset('client-frontend') }}/assets/images/feature/feature-02.png"
                                alt="feature-image" />
                        </div>
                        <div class="feature__content">
                            <h4 class="feature__title">Free Delivery</h4>
                            <p>24/7 amazing services</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="feature__single__item" data-bg="#F9F5FF">
                        <div class="feature__image">
                            <img src="{{ asset('client-frontend') }}/assets/images/feature/feature-03.png"
                                alt="feature-image" />
                        </div>
                        <div class="feature__content">
                            <h4 class="feature__title">Secured Payment</h4>
                            <p>We accept all credit cards</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="feature__single__item" data-bg="#FEF3F2">
                        <div class="feature__image">
                            <img src="{{ asset('client-frontend') }}/assets/images/feature/feature-04.png"
                                alt="feature-image" />
                        </div>
                        <div class="feature__content">
                            <h4 class="feature__title">Easy Returns</h4>
                            <p>30-days free return policy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

@endsection
