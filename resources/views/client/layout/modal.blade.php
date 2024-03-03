 <!-- Login Modal Start -->
    <div class="modal fade popup__modal" id="login" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="popup__form">
                        <div class="popup__logo">
                            <a href="home.html"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo-white.png" alt="logo" /></a>
                        </div>
                        <div class="popup__bg">
                            <img src="{{ asset('client-frontend') }}/assets/images/popup/p-bg-02.jpg" alt="popup-bg" />
                        </div>
                        <form action="#" class="form__wrapper">
                            <div class="popup__title">
                                <h2>Login</h2>
                            </div>
                            <div class="login__access">
                                <a href="#" class="btn btn-outline"><img src="{{ asset('client-frontend') }}/assets/images/google.png"
                                        alt="google" />Sign up with Google</a>
                                <a href="#" class="btn btn-outline"><img src="{{ asset('client-frontend') }}/assets/images/facebook.png"
                                        alt="facebook" />Sign up with Facebook</a>
                            </div>
                            <div class="devider text-center">- OR -</div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required
                                    data-error="Please enter email" placeholder="Enter your email" />
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" name="password" id="pass" class="form-control" required
                                    data-error="Please enter password" placeholder="Password" />
                            </div>
                            <div class="submit__btn">
                                <button type="submit" class="btn btn-primary mt-0 w-100">Login</button>
                            </div>
                            <div class="account__desc">
                                <div class="account__meta">
                                    Don’t have an account?
                                    <a href="#" data-bs-target="#signup" data-bs-toggle="modal"
                                        data-bs-dismiss="modal">Sign up</a>
                                </div>
                                <a href="#" data-bs-target="#forget" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->
    <!-- SingUp Modal Start -->
    <div class="modal fade popup__modal" id="signup" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="popup__form">
                        <div class="popup__logo">
                            <a href="home.html"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo-white.png" alt="logo" /></a>
                        </div>
                        <div class="popup__bg">
                            <img src="{{ asset('client-frontend') }}/assets/images/popup/p-bg-01.jpg" alt="popup-bg" />
                        </div>
                        <form action="#" class="form__wrapper">
                            <div class="popup__title">
                                <h2>Create Account</h2>
                            </div>
                            <div class="login__access">
                                <a href="#" class="btn btn-outline"><img src="{{ asset('client-frontend') }}/assets/images/google.png"
                                        alt="google" />Sign up with Google</a>
                                <a href="#" class="btn btn-outline"><img src="{{ asset('client-frontend') }}/assets/images/facebook.png"
                                        alt="facebook" />Sign up with Facebook</a>
                            </div>
                            <div class="devider text-center">- OR -</div>
                            <div class="form-group">
                                <label for="name2">Full Name</label>
                                <input type="text" name="name" id="name2" class="form-control" required
                                    data-error="Please enter name" placeholder="Enter your full name" />
                            </div>
                            <div class="form-group">
                                <label for="email2">Email</label>
                                <input type="email" name="email" id="email2" class="form-control" required
                                    data-error="Please enter email" placeholder="Enter your email" />
                            </div>
                            <div class="form-group">
                                <label for="pass2">Password</label>
                                <input type="password" name="password" id="pass2" class="form-control" required
                                    data-error="Please enter password" placeholder="Password" />
                            </div>
                            <div class="submit__btn">
                                <button type="submit" class="btn btn-primary mt-0 w-100">Create Account</button>
                            </div>
                            <div class="account__desc justify-content-center">
                                <div class="account__meta">
                                    Already have an account?
                                    <a href="#" data-bs-target="#login" data-bs-toggle="modal"
                                        data-bs-dismiss="modal">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SingUp Modal End -->
    <!-- Forget Modal Start -->
    <div class="modal fade popup__modal" id="forget" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="popup__form">
                        <div class="popup__logo">
                            <a href="home.html"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo-white.png" alt="logo" /></a>
                        </div>
                        <div class="popup__bg">
                            <img src="{{ asset('client-frontend') }}/assets/images/popup/p-bg-02.jpg" alt="popup-bg" />
                        </div>
                        <form action="#" class="form__wrapper">
                            <div class="popup__title">
                                <h2>Forgot password</h2>
                                <p>No worries, We’ll send you reset your passward.</p>
                            </div>
                            <div class="form-group">
                                <label for="email3">Email</label>
                                <input type="email" name="email" id="email3" class="form-control" required
                                    data-error="Please enter email" placeholder="Enter your email" />
                            </div>
                            <div class="submit__btn">
                                <button type="submit" class="btn btn-primary mt-0 w-100">Reset Passward</button>
                            </div>
                            <div class="account__desc">
                                <div class="account__meta">
                                    Remember password? Back to
                                    <a href="#" data-bs-target="#login" data-bs-toggle="modal"
                                        data-bs-dismiss="modal">login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Forget Modal End -->

    <!-- Product Preview Modal Start -->
    <div class="modal fade product__modal" id="prod__preview" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row product-detail align-items-center">
                            <div class="col-md-6 col-sm-8 m-auto">
                                <div class="product-gallery product-gallery__v2">
                                    <div class="product-gallery__main swiper productPreviewSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-01.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-02.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-03.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-04.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__thumb swiper productPreviewSwiperThumb">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-01.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-02.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-03.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-item">
                                                    <img src="{{ asset('client-frontend') }}/assets/images/products/prod-04.png"
                                                        alt="product iamge" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="product-detail__wrapper product-detail__wrapper-v2">
                                    <h2 class="product-detail__title">EB 18 Large Cage Free White A Egg</h2>
                                    <div class="product-detail__meta">
                                        <div class="rating">
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
                                        </div>
                                        <ul class="right-meta">
                                            <li>
                                                <div class="stock__item">In-stock</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="product-detail__price">$15.00</h3>
                                    <p class="product-detail__short_desc">
                                        There are many variations of passages of Lorem Ipsum and available,majority have
                                        suffered alteration in somey form, by injected humour,
                                        or randomised words which don't look even slightly believable.
                                    </p>
                                    <div class="product-detail__attr">
                                        <div class="product__attr">
                                            <span class="product-detail--stroke">Filter By Color</span>
                                            <ul class="product__attr--color">
                                                <li>
                                                    <input type="radio" name="filterByColor" id="colorGreen"
                                                        value="green" />
                                                    <label for="colorGreen" data-bg="#12B76A"></label>
                                                </li>

                                                <li>
                                                    <input type="radio" name="filterByColor" id="colorYellow"
                                                        value="yellow" />
                                                    <label for="colorYellow" data-bg="#F1C584"></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product-detail__attr">
                                        <div class="product__attr">
                                            <span class="product-detail--stroke">Size</span>
                                            <ul class="product__attr--size">
                                                <li>
                                                    <input type="radio" name="filterBySize" id="sizeXXL"
                                                        value="xxl" />
                                                    <label for="sizeXXL">XXL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="filterBySize" id="sizeXL"
                                                        value="xl" />
                                                    <label for="sizeXL">XL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="filterBySize" id="sizeL"
                                                        value="l" />
                                                    <label for="sizeL">L</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="filterBySize" id="sizeM"
                                                        value="m" />
                                                    <label for="sizeM">M</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="filterBySize" id="sizeS"
                                                        value="s" />
                                                    <label for="sizeS">S</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="filterBySize" id="sizeXS"
                                                        value="xs" />
                                                    <label for="sizeXS">XS</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product-detail__qty">
                                        <span class="product-detail--stroke">quantity</span>
                                        <div class="quantity quantity--outline">
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

                                    <div class="product-detail__action">
                                        <a href="product-single.html" class="btn btn-primary btn-outline w-100">Add to
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Preview Modal End -->
