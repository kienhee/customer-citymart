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
                    <x-product id="1" thumnail="a" name="nma" slug="aa" price="100" />
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
