@extends('client.layout.index')
@section('title', 'Cửa hàng')

@section('content')
    <!-- All Category Section Start -->
    <section class="archive-category">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>All Categories</h2>
                        <!-- <a href="product.html" class="solid-btn">all <i class="fa-solid fa-angle-right"></i></a> -->
                        <div class="shortBy-select select__style">
                            <label for="sortBy">Sort by:</label>
                            <select name="sortBy" id="sortBy">
                                <option value="0">Relevance</option>
                                <option value="0">Name (A-Z)</option>
                                <option value="0">Name (Z-A)</option>
                                <option value="0">Date</option>
                                <option value="0">Sale</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row archive-category__inner">
                <div class="category-sidebar accordion" id="categorySidebar">
                    <div class="category-sidebar__inner">
                        <a href="/" class=" h3 border-bottom border-light-subtle pb-3 text-dark d-block">
                            Groceries
                        </a>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#Groceries" aria-expanded="true" aria-controls="Groceries">
                                    Groceries
                                </button>
                            </h2>
                            <div id="Groceries" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#categorySidebar">
                                <ul class="accordion-body">
                                    <li><a href="#">Meet & Seafood</a></li>
                                    <li><a href="#">Forzen Food</a></li>
                                    <li><a href="#">Dairy</a></li>
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Bekery & Bread</a></li>
                                    <li><a href="#">Candy</a></li>
                                    <li><a href="#" class="active">Fruits</a></li>
                                    <li><a href="#">Coffee</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#computers" aria-controls="computers">
                                    computers
                                </button>
                            </h2>
                            <div id="computers" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#categorySidebar">
                                <ul class="accordion-body">
                                    <li><a href="#">Meet & Seafood</a></li>
                                    <li><a href="#">Forzen Food</a></li>
                                    <li><a href="#">Dairy</a></li>
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Bekery & Bread</a></li>
                                    <li><a href="#">Candy</a></li>
                                    <li><a href="#" class="active">Fruits</a></li>
                                    <li><a href="#">Coffee</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#electronics" aria-controls="electronics">
                                    electronics
                                </button>
                            </h2>
                            <div id="electronics" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#categorySidebar">
                                <ul class="accordion-body">
                                    <li><a href="#">Meet & Seafood</a></li>
                                    <li><a href="#">Forzen Food</a></li>
                                    <li><a href="#">Dairy</a></li>
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Bekery & Bread</a></li>
                                    <li><a href="#">Candy</a></li>
                                    <li><a href="#" class="active">Fruits</a></li>
                                    <li><a href="#">Coffee</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#men" aria-controls="men">men</button>
                            </h2>
                            <div id="men" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#categorySidebar">
                                <ul class="accordion-body">
                                    <li><a href="#">Meet & Seafood</a></li>
                                    <li><a href="#">Forzen Food</a></li>
                                    <li><a href="#">Dairy</a></li>
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Bekery & Bread</a></li>
                                    <li><a href="#">Candy</a></li>
                                    <li><a href="#" class="active">Fruits</a></li>
                                    <li><a href="#">Coffee</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#baby" aria-controls="baby">baby</button>
                            </h2>
                            <div id="baby" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#categorySidebar">
                                <ul class="accordion-body">
                                    <li><a href="#">Meet & Seafood</a></li>
                                    <li><a href="#">Forzen Food</a></li>
                                    <li><a href="#">Dairy</a></li>
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Bekery & Bread</a></li>
                                    <li><a href="#">Candy</a></li>
                                    <li><a href="#" class="active">Fruits</a></li>
                                    <li><a href="#">Coffee</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#sports" aria-controls="sports">
                                    sports
                                </button>
                            </h2>
                            <div id="sports" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                data-bs-parent="#categorySidebar">
                                <ul class="accordion-body">
                                    <li><a href="#">Meet & Seafood</a></li>
                                    <li><a href="#">Forzen Food</a></li>
                                    <li><a href="#">Dairy</a></li>
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Bekery & Bread</a></li>
                                    <li><a href="#">Candy</a></li>
                                    <li><a href="#" class="active">Fruits</a></li>
                                    <li><a href="#">Coffee</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingseven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#furnitures" aria-controls="furnitures">
                                    furnitures
                                </button>
                            </h2>
                            <div id="furnitures" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                data-bs-parent="#categorySidebar">
                                <ul class="accordion-body">
                                    <li><a href="#">Meet & Seafood</a></li>
                                    <li><a href="#">Forzen Food</a></li>
                                    <li><a href="#">Dairy</a></li>
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Bekery & Bread</a></li>
                                    <li><a href="#">Candy</a></li>
                                    <li><a href="#" class="active">Fruits</a></li>
                                    <li><a href="#">Coffee</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card__wrapper">
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-01.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-02.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">15%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-03.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">-10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-04.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">30%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-05.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-06.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">25%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-07.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-08.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-09.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-10.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-11.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">-20%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews - Fruity
                                        Roll Fruity Roll</a></h5>
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
                                        <input class="qnttinput" type="number" disabled value="0" min="01"
                                            max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-12.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews -
                                        Fruity Roll Fruity Roll</a></h5>
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
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-13.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews -
                                        Fruity Roll Fruity Roll</a></h5>
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
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-14.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">18%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews -
                                        Fruity Roll Fruity Roll</a></h5>
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
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-15.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">10%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews -
                                        Fruity Roll Fruity Roll</a></h5>
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
                    <div class="product-card">
                        <div class="product__image__wrapper">
                            <a href="product-single.html" class="product__image">
                                <img src="{{ asset('client-frontend') }}/assets/images/products/prod-16.png"
                                    alt="icon" />
                            </a>
                            <div class="badge">28%</div>
                            <div class="product__actions">
                                <a href="#" class="action__btn">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#prod__preview"
                                    class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="action__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.33329L13.3333 5.99996L10 2.66663" stroke="#252522"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                            stroke="#252522" stroke-linecap="round" stroke-linejoin="round" />
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
                                <h5><a href="product-single.html">Tootsie Frooties- Taffy Candy - Bulk Fruit Chews -
                                        Fruity Roll Fruity Roll</a></h5>
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
        </div>
    </section>
    <!-- All Category Section End -->

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
                            <input type="email" name="email" class="form-control"
                                placeholder="Enter your email" />
                            <button type="submit" class="btn btn-primary">Notify me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CAll To Action End -->
@endsection
