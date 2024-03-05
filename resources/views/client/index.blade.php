@extends('client.layout.index')
@section('title', 'Trang chủ')
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
    <section class="sale__section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="section-title__wrap">
                            <h2>Sản Phẩm Khuyến Mãi</h2>
                            <div class="sales__countdown countdown__wrapper">
                                <div id="salesCountdown"></div>
                            </div>
                        </div>
                        <a href="product.html" class="solid-btn">all <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product__wrapper swiper__pagination">
                        <div class="swiper sale__Swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <div class="product__image__wrapper">
                                            <a href="product-single.html" class="product__image">
                                                <img src="{{ asset('client-frontend') }}/assets/images/sales/sales-01.png"
                                                    alt="icon" />
                                            </a>
                                            <div class="badge">10%</div>
                                            <div class="product__actions">
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                                    class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__rating">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                </ul>
                                                <div class="total__rating">(321)</div>
                                            </div>
                                            <div class="product__title">
                                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews - Fruity Roll Fruity Roll</a></h5>
                                            </div>
                                            <div class="product__bottom">
                                                <div class="product__price">
                                                    $22.00
                                                    <del>$22.00</del>
                                                </div>
                                                <div class="cart__action__btn">
                                                    <div class="cart__btn">
                                                        <a href="#" class="btn btn-outline">Add to cart</a>
                                                    </div>
                                                    <div class="quantity cart__quantity">
                                                        <button type="button" class="decressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                        <input class="qnttinput" type="number" disabled value="0"
                                                            min="01" max="100" />
                                                        <button type="button" class="incressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <div class="product__image__wrapper">
                                            <a href="product-single.html" class="product__image">
                                                <img src="{{ asset('client-frontend') }}/assets/images/sales/sales-02.png"
                                                    alt="icon" />
                                            </a>
                                            <div class="badge">-10%</div>
                                            <div class="product__actions">
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                                    class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__rating">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                </ul>
                                                <div class="total__rating">(321)</div>
                                            </div>
                                            <div class="product__title">
                                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews - Fruity Roll Fruity Roll</a></h5>
                                            </div>
                                            <div class="product__bottom">
                                                <div class="product__price">
                                                    $22.00
                                                    <del>$22.00</del>
                                                </div>
                                                <div class="cart__action__btn">
                                                    <div class="cart__btn">
                                                        <a href="#" class="btn btn-outline">Add to cart</a>
                                                    </div>
                                                    <div class="quantity cart__quantity">
                                                        <button type="button" class="decressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                        <input class="qnttinput" type="number" disabled value="0"
                                                            min="01" max="100" />
                                                        <button type="button" class="incressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <div class="product__image__wrapper">
                                            <a href="product-single.html" class="product__image">
                                                <img src="{{ asset('client-frontend') }}/assets/images/sales/sales-03.png"
                                                    alt="icon" />
                                            </a>
                                            <div class="badge">20%</div>
                                            <div class="product__actions">
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                                    class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__rating">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                </ul>
                                                <div class="total__rating">(321)</div>
                                            </div>
                                            <div class="product__title">
                                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews - Fruity Roll Fruity Roll</a></h5>
                                            </div>
                                            <div class="product__bottom">
                                                <div class="product__price">
                                                    $22.00
                                                    <del>$22.00</del>
                                                </div>
                                                <div class="cart__action__btn">
                                                    <div class="cart__btn">
                                                        <a href="#" class="btn btn-outline">Add to cart</a>
                                                    </div>
                                                    <div class="quantity cart__quantity">
                                                        <button type="button" class="decressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                        <input class="qnttinput" type="number" disabled value="0"
                                                            min="01" max="100" />
                                                        <button type="button" class="incressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <div class="product__image__wrapper">
                                            <a href="product-single.html" class="product__image">
                                                <img src="{{ asset('client-frontend') }}/assets/images/sales/sales-04.png"
                                                    alt="icon" />
                                            </a>
                                            <div class="badge">10%</div>
                                            <div class="product__actions">
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                                    class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__rating">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                </ul>
                                                <div class="total__rating">(321)</div>
                                            </div>
                                            <div class="product__title">
                                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews - Fruity Roll Fruity Roll</a></h5>
                                            </div>
                                            <div class="product__bottom">
                                                <div class="product__price">
                                                    $22.00
                                                    <del>$22.00</del>
                                                </div>
                                                <div class="cart__action__btn">
                                                    <div class="cart__btn">
                                                        <a href="#" class="btn btn-outline">Add to cart</a>
                                                    </div>
                                                    <div class="quantity cart__quantity">
                                                        <button type="button" class="decressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                        <input class="qnttinput" type="number" disabled value="0"
                                                            min="01" max="100" />
                                                        <button type="button" class="incressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <div class="product__image__wrapper">
                                            <a href="product-single.html" class="product__image">
                                                <img src="{{ asset('client-frontend') }}/assets/images/sales/sales-05.png"
                                                    alt="icon" />
                                            </a>
                                            <div class="badge">30%</div>
                                            <div class="product__actions">
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                                    class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="action__btn">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                            stroke="#252522" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__rating">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-regular fa-star"></i></li>
                                                </ul>
                                                <div class="total__rating">(321)</div>
                                            </div>
                                            <div class="product__title">
                                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews - Fruity Roll Fruity Roll</a></h5>
                                            </div>
                                            <div class="product__bottom">
                                                <div class="product__price">
                                                    $22.00
                                                    <del>$22.00</del>
                                                </div>
                                                <div class="cart__action__btn">
                                                    <div class="cart__btn">
                                                        <a href="#" class="btn btn-outline">Add to cart</a>
                                                    </div>
                                                    <div class="quantity cart__quantity">
                                                        <button type="button" class="decressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                        <input class="qnttinput" type="number" disabled value="0"
                                                            min="01" max="100" />
                                                        <button type="button" class="incressQnt">
                                                            <span class="bar"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!-- Sale Section End -->


    <!-- Trending Section Start -->
    @foreach ($productsByCategory as $item)
        <section class="trending__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>{{ $item['category_name'] }}</h2>
                            <a href="{{ route('shop', ['category' => $item['category_name']]) }}" class="solid-btn">all <i
                                    class="fa-solid fa-angle-right"></i></a>
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
                                                name="{{ $item['name'] }}" slug="{{ $item['slug'] }}"
                                                price="{{ $item['price'] }}" discount="{{ $item['discount'] }}" />
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
                        <form action="#" method="post" class="cta__form">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" />
                            <button type="submit" class="btn btn-primary">Notify me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CAll To Action End -->

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
