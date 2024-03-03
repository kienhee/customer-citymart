 <div class="flyoutMenu">
        <div class="flyout__flip">
            <div class="flyout__inner">
                <div class="menu__header-top">
                    <div class="brand__logo">
                        <a href="home.html"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo.png" alt="logo" /></a>
                    </div>
                    <!-- Close -->
                    <div class="closest__btn action__btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="#344054" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 6L18 18" stroke="#344054" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <!-- Close -->
                    </div>
                </div>
                <!-- Search Form -->
                <form action="search.html" method="post" class="search__form full__width">
                    <input type="search" class="form-control" name="search"
                        placeholder="What are you looking for..." />
                    <button type="submit">
                        <img src="{{ asset('client-frontend') }}/assets/images/search.png" alt="search" />
                    </button>
                </form>
                <!-- Search Form -->
                <div class="flyout__menu">
                    <ul class="flyout-main__menu">
                        <li class="has__dropdown">
                            <a href="#" class="nav__link active">Home</a>
                            <!-- Dropdown -->
                            <ul class="sub__menu">
                                <li><a href="home.html">Home-01</a></li>
                                <li><a href="home-02.html">Home-02</a></li>
                                <li><a href="home-03.html">Home-03</a></li>
                                <li><a href="home-04.html">Home-04</a></li>
                                <li><a href="home-05.html">Home-05</a></li>
                            </ul>
                            <!-- Dropdown -->
                        </li>
                        <li class="has__dropdown">
                            <a href="#" class="nav__link">Collection</a>
                            <!-- Dropdown -->
                            <ul class="sub__menu">
                                <li class="has__dropdown">
                                    <a href="#" class="title nav__link">Groceries</a>
                                    <ul class="sub__sub-menu">
                                        <li><a href="all-categories.html">Meat &amp; Seafood</a></li>
                                        <li><a href="all-categories.html">Forzen Food</a></li>
                                        <li><a href="all-categories.html">Beverage</a></li>
                                        <li><a href="all-categories.html">Dairy</a></li>
                                        <li><a href="all-categories.html">Beverage</a></li>
                                        <li><a href="all-categories.html">Bekery &amp; Bread</a></li>
                                        <li><a href="all-categories.html">Candy</a></li>
                                        <li><a href="all-categories.html">Beverage</a></li>
                                    </ul>
                                </li>
                                <li class="has__dropdown">
                                    <a href="#" class="title nav__link">Electronics</a>
                                    <ul class="sub__sub-menu">
                                        <li><a href="all-categories.html">Computer &amp; laptop </a></li>
                                        <li><a href="all-categories.html">Camera</a></li>
                                        <li><a href="all-categories.html">Headphone</a></li>
                                        <li><a href="all-categories.html">Smarwatches</a></li>
                                    </ul>
                                </li>
                                <li class="has__dropdown">
                                    <a href="#" class="title nav__link">Men</a>
                                    <ul class="sub__sub-menu">
                                        <li><a href="all-categories.html">Men Suits</a></li>
                                        <li><a href="all-categories.html">Sleepwear</a></li>
                                        <li><a href="all-categories.html">Athletic shoes</a></li>
                                        <li><a href="all-categories.html">T-shirt</a></li>
                                        <li><a href="all-categories.html">Jackets</a></li>
                                        <li><a href="all-categories.html">Socks</a></li>
                                        <li><a href="all-categories.html">Hats</a></li>
                                        <li><a href="all-categories.html">Glasses</a></li>
                                    </ul>
                                </li>
                                <li class="has__dropdown">
                                    <a href="#" class="title nav__link">Kids</a>
                                    <ul class="sub__sub-menu">
                                        <li><a href="all-categories.html">Men Suits</a></li>
                                        <li><a href="all-categories.html">Sleepwear</a></li>
                                        <li><a href="all-categories.html">Athletic shoes</a></li>
                                        <li><a href="all-categories.html">T-shirt</a></li>
                                        <li><a href="all-categories.html">Jackets</a></li>
                                        <li><a href="all-categories.html">Socks</a></li>
                                        <li><a href="all-categories.html">Hats</a></li>
                                        <li><a href="all-categories.html">Glasses</a></li>
                                    </ul>
                                </li>
                                <li class="has__dropdown">
                                    <a href="#" class="title nav__link">Sports</a>
                                    <ul class="sub__sub-menu">
                                        <li><a href="all-categories.html">Gaming Edition</a></li>
                                        <li><a href="all-categories.html">Gaming Headset</a></li>
                                        <li><a href="all-categories.html">Gaming Mouse Pad</a></li>
                                        <li><a href="all-categories.html">Gaming Mouse </a></li>
                                        <li><a href="all-categories.html">Gaming Glasses</a></li>
                                        <li><a href="all-categories.html">Gaming Keyboard</a></li>
                                        <li><a href="all-categories.html">Gaming Microphone</a></li>
                                        <li><a href="all-categories.html">Controller Charger</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Dropdown -->
                        </li>
                        <li class="has__dropdown">
                            <a href="#" class="nav__link">pages</a>
                            <!-- Dropdown -->
                            <ul class="sub__menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">SignUp</a></li>
                                <li><a href="forget-password.html">Forget Password</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Terms &amp; Conditions</a></li>
                                <li><a href="comming-soon.html">Comming Soon</a></li>
                                <li><a href="error.html">404</a></li>
                            </ul>
                            <!-- Dropdown -->
                        </li>
                        <li><a href="all-categories.html">Hot Offers</a></li>
                        <li class="has__dropdown">
                            <a href="#" class="nav__link">Shop</a>
                            <!-- Dropdown -->
                            <ul class="sub__menu">
                                <li><a href="product.html">Shop</a></li>
                                <li><a href="product-single.html">Shop Details</a></li>
                                <li><a href="search.html">Shop Search</a></li>
                                <li><a href="cart.html">Shop Cart</a></li>
                                <li><a href="checkout.html">Shop Checkout</a></li>
                                <li><a href="tracking.html">Order Tracker</a></li>
                            </ul>
                            <!-- Dropdown -->
                        </li>
                        <li class="has__dropdown">
                            <a href="#" class="nav__link">Blog</a>
                            <!-- Dropdown -->
                            <ul class="sub__menu">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                            <!-- Dropdown -->
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>