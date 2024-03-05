@extends('client.layout.index')
@section('title', $product->name)

@section('content')

    <!-- product detail section start  -->
    <section class="product-main">
        <div class="container">
            <div class="row product-detail">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
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
                                                    value="{{ $color }}"
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
                                <input class="qnttinput" type="number" disabled value="1" min="01"
                                    max="100" />
                                <button type="button" class="incressQnt">
                                    <span class="bar"></span>
                                </button>
                            </div>
                        </div>

                        <div class="product-detail__action ">
                            <div class="item">
                                <button class="btn btn-primary btn-outline" id="addTocart">Thêm vào giỏ hàng</button>
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
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product__wrapper swiper__pagination">
                        <div class="swiper trending__Swiper">
                            <div class="swiper-wrapper">
                                @foreach ($ReletedProducts as $item)
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
    <!-- Trending Section End -->
@endsection
