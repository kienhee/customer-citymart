<header class="header header-sticky">
    <div class="container">
        <!-- Header Top Start -->
        <div class="header__top">
            <div class="header__left">
                <!-- Header Toggle Start -->
                <div class="header__toggle d-lg-none">
                    <button class="toggler__btn">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 12H18V10H0V12ZM0 7H18V5H0V7ZM0 0V2H18V0H0Z" fill="#667085" />
                        </svg>
                    </button>
                </div>
                <!-- Header Toggle End -->
                <div class="header__logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo.png"
                            alt="logo" /> </a>
                </div>
                <div class="search__form__wrapper">
                    <form action="{{ route('shop') }}" method="get" class="search__form ">
                        <input type="search" class="form-control " name="search"
                            placeholder="{{ __('Tìm kiếm tên sản phẩm') }}" value="{{ request()->search }}" />
                        <button type="submit">
                            <img src="{{ asset('client-frontend') }}/assets/images/search.png" alt="search" />
                        </button>
                    </form>
                </div>
            </div>
            <div class="header__meta">
                <ul class="meta__item d-xl-block d-none">
                    @if ($address)
                        <li><i class="fa-solid fa-location-dot"></i>{{ $address }}</li>
                    @endif
                </ul>
                <div class="language__select custom__dropdown">
                    <div class="selected">
                        <div class="selected_item">
                            @if (App::currentLocale() == 'vi')
                                <img src="{{ asset('client-frontend') }}/assets/images/flag/vietnam.png"
                                    alt="flag" />
                                <span>Việt Nam </span>
                            @endif
                            @if (App::currentLocale() == 'se')
                                <img src="{{ asset('client-frontend') }}/assets/images/flag/sweden.png"
                                    alt="flag" />
                                <span>Sweden</span>
                            @endif
                        </div>
                    </div>
                    <ul class="list">
                        <li>
                            <a href="{{ route('changeLang', 'vi') }}" class="w-100 text-muted d-flex gap-1">
                                <img src="{{ asset('client-frontend') }}/assets/images/flag/vietnam.png"
                                    alt="flag" />
                                <span>Viet Nam</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('changeLang', 'se') }}" class="w-100 text-muted d-flex gap-1">
                                <img src="{{ asset('client-frontend') }}/assets/images/flag/sweden.png"
                                    alt="flag" />
                                <span>Sweden</span>
                            </a>

                        </li>

                    </ul>
                </div>
                <ul class="meta__item">

                </ul>
                <div class="miniCart">
                    <div class="header__cart">
                        <a href="#" class="cart__btn">
                            <div class="cart__btn-img">
                                <img src="{{ asset('client-frontend') }}/assets/images/cart-icon.png"
                                    alt="cart-icon" />
                                <span class="value" id="lengthCart">0</span>
                            </div>
                            <span class="title">cart</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->
        </div>
        <!-- Search Form -->
        <form action="{{ route('shop') }}" method="get" class="search__form full__width d-lg-none d-flex">
            <input type="search" class="form-control" name="search" placeholder="{{ __('Tìm kiếm tên sản phẩm') }}"
                value="{{ request()->search }}" />
            <button type="submit">
                <img src="{{ asset('client-frontend') }}/assets/images/search.png" alt="search" />
            </button>
        </form>
        <!-- Search Form -->
    </div>
    <nav class="nav d-none d-lg-flex">
        <div class="container">
            <!-- Header Wrap Start  -->
            <div class="header__wrapper">
                <div class="header__menu">
                    <ul class="main__menu">
                        @foreach ($menu as $item)
                            @if (empty($item['children']))
                                <li class="{{ url()->current() == route($item['link']) ? 'active' : '' }}">
                                    <a href="{{ route($item['link']) }}">{{ $item['name'] }}</a>
                                </li>
                            @else
                                <li class="has__dropdown position-static">
                                    <a href="javascript:void(0)">{{ $item['name'] }}</a>
                                    <!-- Mega Menu -->
                                    <div class="mega__menu sub__menu">
                                        <ul class="mega__menu-item">
                                            @foreach ($item['children'] as $parent)
                                                <li class="sub-mega__menu">
                                                    <a class="menu__title" {{-- App::currentLocale() == "vi" --}}
                                                        href="javascript:void(0)">{{ App::currentLocale() == 'vi' ? $parent['parent'] : $parent['parent_se'] }}</a>
                                                    <ul>
                                                        @foreach ($parent['children'] as $children)
                                                            <li><a
                                                                    href="{{ route('shop', ['category' => App::currentLocale() == 'vi' ? $children['name'] : $children['name_se']]) }}">{{ App::currentLocale() == 'vi' ? $children['name'] : $children['name_se'] }}</a>
                                                            </li>
                                                        @endforeach


                                                    </ul>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <!-- Mega Menu -->
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
                <div class="header__meta">
                    <ul class="meta__item">
                        @if ($phone)
                            <li>
                                <a href="tel:{{ $phone }}"><i
                                        class="fa-solid fa-phone-flip"></i>{{ $phone }}</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
            <!-- Header Wrap End  -->
        </div>
    </nav>
</header>
