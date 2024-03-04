@extends('client.layout.index')
@section('title', $product->name)

@section('content')

    <!-- product detail section start  -->
    <section class="product-main">
        <div class="container">
            <div class="row product-detail">
                <div class="col-md-6">
                    <div class="product-gallery">
                        <div class="product-gallery__thumb swiper productGallerySwiperThumb">
                            <div class="swiper-wrapper">
                                @foreach (explode(',', $product->images) as $key => $image)
                                    <div class="swiper-slide">
                                        <div class="gallery-item">
                                            <img src="{{ $image }}" alt="product iamge" />
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="product-gallery__main swiper productGallerySwiper">
                            <div class="swiper-wrapper">
                                @foreach (explode(',', $product->images) as $key => $image)
                                    <div class="swiper-slide">
                                        <div class="gallery-item">
                                            <img src="{{ getThumb($image) }}" alt="product iamge" />
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-detail__wrapper">
                        <h2 class="product-detail__title">
                            {{ $product->name }}
                        </h2>
                        <div class="product-detail__meta">
                            {{-- <div class="rating">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                </ul>
                                <div class="total__rating">
                                    <a href="#">(3,822 ratings)</a>
                                </div>
                            </div> --}}
                            <ul class="right-meta">
                                {{-- <li>
                                    <a href="#" class="share__btn">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.6665 8V13.3333C2.6665 13.687 2.80698 14.0261 3.05703 14.2761C3.30708 14.5262 3.64622 14.6667 3.99984 14.6667H11.9998C12.3535 14.6667 12.6926 14.5262 12.9426 14.2761C13.1927 14.0261 13.3332 13.687 13.3332 13.3333V8"
                                                stroke="#002642" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.6668 3.99998L8.00016 1.33331L5.3335 3.99998" stroke="#002642"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 1.33331V9.99998" stroke="#002642" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Share
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="wishlist__btn">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.8936 3.07333C13.5531 2.73267 13.1488 2.46243 12.7038 2.27805C12.2588 2.09368 11.7819 1.99878 11.3002 1.99878C10.8186 1.99878 10.3416 2.09368 9.89667 2.27805C9.4517 2.46243 9.04741 2.73267 8.70691 3.07333L8.00024 3.78L7.29357 3.07333C6.60578 2.38553 5.67293 1.99914 4.70024 1.99914C3.72755 1.99914 2.7947 2.38553 2.10691 3.07333C1.41911 3.76112 1.03271 4.69397 1.03271 5.66666C1.03271 6.63935 1.41911 7.5722 2.10691 8.26L2.81358 8.96666L8.00024 14.1533L13.1869 8.96666L13.8936 8.26C14.2342 7.91949 14.5045 7.51521 14.6889 7.07023C14.8732 6.62526 14.9681 6.14832 14.9681 5.66666C14.9681 5.185 14.8732 4.70807 14.6889 4.26309C14.5045 3.81812 14.2342 3.41383 13.8936 3.07333V3.07333Z"
                                                stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Add to Wishlist
                                    </a>
                                </li> --}}
                                @if ($product->quantity > 0)
                                    <li>
                                        <div class="stock__item">Còn hàng</div>
                                    </li>
                                @else
                                    <li>
                                        <div class="stock__item  bg-danger text-white">Hết hàng</div>
                                    </li>
                                @endif

                            </ul>
                        </div>
                        @if ($product->discount > 0)
                            {{-- Nếu có giảm giá --}}
                            @php
                                $giaSauKhiGiamGia = $product->price * (1 - $product->discount / 100);
                            @endphp


                            <h3 class="product-detail__price"> {{ number_format($giaSauKhiGiamGia) }} Kr
                                <del>{{ number_format($product->price) }} Kr</del>
                            </h3>
                        @else
                            <h3 class="product-detail__price"> {{ number_format($product->price) }} Kr</h3>
                        @endif
                        @if ($product->description)
                            <p class="product-detail__short_desc">
                                {{ $product->description }}
                            </p>
                        @endif
                        @if ($product->colors)
                            <div class="product-detail__attr">
                                <div class="product__attr">
                                    <span class="product-detail--stroke">Màu sắc</span>
                                    <ul class="product__attr--color">
                                        @foreach (explode(',', $product->colors) as $key => $color)
                                            <li>
                                                <input type="radio" name="color" id="{{ explode('-', $color)[1] }}"
                                                    value="green"
                                                    @if ($key == 0) @checked(true) @endif />
                                                <label for="{{ explode('-', $color)[1] }}"
                                                    data-bg="{{ explode('-', $color)[1] }}"></label>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        @endif
                        @if ($product->sizes)
                            <div class="product-detail__attr">
                                <div class="product__attr">
                                    <span class="product-detail--stroke">Loại</span>
                                    <ul class="product__attr--size">
                                        @foreach (json_decode($product->sizes) as $key => $size)
                                            <li>
                                                <input type="radio" name="size" id="{{ $size->value }}"
                                                    value="{{ $size->value }}"
                                                    @if ($key == 0) @checked(true) @endif />
                                                <label for="{{ $size->value }}">{{ $size->value }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="product-detail__qty">
                            <span class="product-detail--stroke">quantity</span>
                            <div class="quantity quantity--outline">
                                <button type="button" class="decressQnt">
                                    <span class="bar"></span>
                                </button>
                                <input class="qnttinput" type="number" disabled value="0" min="01"
                                    max="100" />
                                <button type="button" class="incressQnt">
                                    <span class="bar"></span>
                                </button>
                            </div>
                        </div>

                        <div class="product-detail__action">
                            <div class="item">
                                <a href="#" class="btn btn-primary btn-outline">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="item">
                                <a href="#" class="btn btn-primary btn-filled">Mua ngay</a>
                            </div>
                        </div>
                        <div class="product-detail__accordion accordion" id="productDetailAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordionOne">
                                    <button class="accordion-button product-detail--stroke collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordion_one"
                                        aria-controls="accordion_one">
                                        Vận chuyển & Trả hàng
                                    </button>
                                </h2>
                                <div id="accordion_one" class="accordion-collapse collapse" aria-labelledby="accordionOne"
                                    data-bs-parent="#productDetailAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Est, porro.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordionTwo">
                                    <button class="accordion-button product-detail--stroke collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordion_two"
                                        aria-controls="accordion_two">
                                        Hướng dẫn bảo quản
                                    </button>
                                </h2>
                                <div id="accordion_two" class="accordion-collapse collapse" aria-labelledby="accordionTwo"
                                    data-bs-parent="#productDetailAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Qui cum beataesimilique, quae vel inventore veniam
                                            ducimus cupiditate dolorem consequatur explicabo magnam
                                            expedita accusamus nihil quas dolorum! Accusamus, omnis
                                            aliquid?
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row product-info">
                <div class="col-12">
                    <div class="tabs__wrapper tabs__wrapper--v3">
                        <div class="tabs__filter">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        Thông tin sản phẩm
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="content__body">
                                {!! $product->content !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product detail section end -->

    <!-- Trending Section Start -->
    <section class="trending__section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Releted Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product__wrapper swiper__pagination">
                        <div class="swiper trending__Swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <div class="product__image__wrapper">
                                            <a href="product-single.html" class="product__image">
                                                <img src="{{ asset('client-frontend') }}/assets/images/trending/trends-01.png"
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
                                                <h5>
                                                    <a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews
                                                        - Fruity Roll Fruity Roll</a>
                                                </h5>
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
                                                <img src="{{ asset('client-frontend') }}/assets/images/trending/trends-02.png"
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
                                                <h5>
                                                    <a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews
                                                        - Fruity Roll Fruity Roll</a>
                                                </h5>
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
                                                <img src="{{ asset('client-frontend') }}/assets/images/trending/trends-03.png"
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
                                                <h5>
                                                    <a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews
                                                        - Fruity Roll Fruity Roll</a>
                                                </h5>
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
                                                <img src="{{ asset('client-frontend') }}/assets/images/trending/trends-04.png"
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
                                                <h5>
                                                    <a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews
                                                        - Fruity Roll Fruity Roll</a>
                                                </h5>
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
                                                <img src="{{ asset('client-frontend') }}/assets/images/trending/trends-05.png"
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
                                                <h5>
                                                    <a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk
                                                        Fruit Chews
                                                        - Fruity Roll Fruity Roll</a>
                                                </h5>
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
    <!-- Trending Section End -->
@endsection
