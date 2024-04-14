@extends('client.layout.index')
@section('title', __('Trang chủ'))
@section('content')

    <!-- Banner Section Start -->
    @if ($sliders)
        {{-- <section class="banner__slider__section">
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
                                <a href="{{ route('shop') }}" class="btn btn-primary">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="hero__swiper__slider">
                            <div class="swiper hero__mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach (explode(',', $sliders->images) as $key => $image)
                                        <div class="swiper-slide">
                                            <div class="slider__image">
                                                <img src="{{ $image }}" alt="banner-bg" />
                                            </div>
                                        </div>
                                    @endforeach

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
        </section> --}}
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach (explode(',', $sliders->images) as $key => $image)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ $image }}" class="d-block w-100 "  alt="banner-bg">
                    </div>
                @endforeach


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endif

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
                                                name="{{ $item->name }}" nameSe="{{ $item->name_se }}"
                                                description="{{ $item->description }}" slug="{{ $item->slug }}"
                                                slugSe="{{ $item->slug_se }}" price="{{ $item->price }}"
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

    <!-- Category Section Start -->
    <section class="category__section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('Danh mục sản phẩm') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category__wrapper swiper__pagination">
                        <div class="swiper categorySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="category-card">
                                        <div class="category-card__image">
                                            <img src="{{ asset('client-frontend') }}/assets/images/category/all.png"
                                                alt="icon" />
                                        </div>
                                        <div class="category-card__title">
                                            <h5>All</h5>
                                        </div>
                                    </a>
                                </div>
                                @foreach (categoriesChildren() as $category)
                                    <div class="swiper-slide">
                                        <a href="{{ route('shop', ['category' => App::currentLocale() == 'vi' ? $category->name : $category->name_se]) }}"
                                            class="category-card">
                                            <div class="category-card__image">
                                                <img src="{{ $category->cover ?? asset('client-frontend/assets/images/category/c-icon-01.png') }}"
                                                    alt="icon" />
                                            </div>
                                            <div class="category-card__title">
                                                <h5>{{ App::currentLocale() == 'vi' ? $category->name : $category->name_se }}
                                                </h5>
                                            </div>
                                        </a>
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
    <!-- Category Section End -->

    <!-- Trending Section Start -->
    @foreach ($productsByCategory as $item)
        <section class="trending__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>{{ App::currentLocale() == 'vi' ? $item['category_name'] : $item['category_name_se'] }}
                            </h2>
                            <a href="{{ route('shop', ['category' => App::currentLocale() == 'vi' ? $item['category_name'] : $item['category_name_se']]) }}"
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
                                                name="{{ $item['name'] }}" nameSe="{{ $item['name_se'] }}"
                                                description="{{ $item['description'] }}" slug="{{ $item['slug'] }}"
                                                slugSe="{{ $item['slug_se'] }}" price="{{ $item['price'] }}"
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
    <div class="d-flex justify-content-center mb-5">
        <a href="{{ route('shop') }}" class="btn btn-outline">{{ __('Xem thêm sản phẩm') }}</a>
    </div>
    <!-- Trending Section End -->

    <!-- CAll To Action Start -->
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
                        <form action="javascript:void(0)" method="post" class="cta__form">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" />
                            <button type="submit" class="btn btn-primary">Notify me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CAll To Action End -->

   

@endsection
