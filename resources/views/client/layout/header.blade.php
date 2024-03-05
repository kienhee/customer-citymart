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
                    <a href="home.html"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo.png"
                            alt="logo" /> </a>
                </div>
                <div class="search__form__wrapper">
                    <form action="search.html" method="post" class="search__form">
                        <div class="select__style">
                            <select name="filter" class="category-select">
                                <option value="1">Danh mục</option>
                                <option value="2">Groceries</option>
                                <option value="3">Computer</option>
                                <option value="4">Women</option>
                                <option value="5">Electronics</option>
                                <option value="6">Men</option>
                                <option value="7">Baby</option>
                                <option value="8">Sports</option>
                            </select>
                        </div>
                        <input type="search" class="form-control" name="search"
                            placeholder="Tìm kiếm trong danh mục...." />
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
                            <img src="{{ asset('client-frontend') }}/assets/images/flag/vietnam.png" alt="flag" />
                            <span>Việt Nam </span>
                        </div>
                    </div>
                    <ul class="list">
                        <li>
                            <img src="{{ asset('client-frontend') }}/assets/images/flag/vietnam.png" alt="flag" />
                            Việt Nam
                        </li>
                        <li>
                            <img src="{{ asset('client-frontend') }}/assets/images/flag/sweden.png" alt="flag" />
                            Thuỵ điển
                        </li>
                    </ul>
                </div>
                <ul class="meta__item">

                </ul>
                <div class="miniCart">
                    <div class="header__cart">
                        <a href="#" class="cart__btn">
                            <div class="cart__btn-img">
                                <img src="{{ asset('client-frontend') }}/assets/images/cart-icon.png" alt="cart-icon" />
                                <span class="value">10</span>
                            </div>
                            <span class="title">cart</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->
        </div>
        <!-- Search Form -->
        <form action="search.html" method="post" class="search__form full__width d-lg-none d-flex">
            <input type="search" class="form-control" name="search" placeholder="What are you looking for..." />
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
                                                    <a class="menu__title"
                                                        href="javascript:void(0)">{{ $parent['parent'] }}</a>
                                                    <ul>
                                                        @foreach ($parent['children'] as $children)
                                                            <li><a
                                                                    href="{{ route('shop', ['category' => $children['name']]) }}">{{ $children['name'] }}</a>
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
