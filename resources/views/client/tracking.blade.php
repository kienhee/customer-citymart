@extends('client.layout.index')
@section('title', 'Đặt hàng thành công')
@section('content')
    <!-- Order Confirm Section Start -->
    <section class="order__confirm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="returm__message text-center">
                        <h5 class="sub__title"><i class="fa-regular fa-circle-check"></i>Your Order Successfully Submitted
                        </h5>
                        <h2 class="title">Thanks for your purchase</h2>
                        <p class="content">Hi Sadia, we have received your order and are getting it ready to be shipped. We
                            will notify you when it’s on its way!</p>
                    </div>
                    <div class="order__details text-center">
                        <div class="order__info">Order No<span>#615691434226862</span></div>
                        <div class="order__info">Order Date<span>April 25, 2022</span></div>
                        <div class="order__info">Shipping Address<span>Uttara Dhaka, Bangladesh</span></div>
                        <div class="order__info">Payment Method<span>Credit Card</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Confirm Section End -->
    <!-- cart section start -->
    <section class="cart__section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Step Start -->
                    <div class="step__wrapper">
                        <div class="steps" id="steps">
                            <div class="steps__item">
                                <button data-step="1" class="active">
                                    <img src="assets/images/order.png" alt="order" />
                                </button>
                                <p>Order Confirmed</p>
                            </div>
                            <div class="line-bar"></div>
                            <div class="steps__item">
                                <button data-step="2">
                                    <img src="assets/images/packed.png" alt="packed" />
                                </button>
                                <p>Order Packed</p>
                            </div>
                            <div class="line-bar"></div>
                            <div class="steps__item">
                                <button data-step="3">
                                    <img src="assets/images/shipment.png" alt="shipment" />
                                </button>
                                <p>Order Shipment</p>
                            </div>
                            <div class="line-bar"></div>
                            <div class="steps__item">
                                <button data-step="4">
                                    <img src="assets/images/package.png" alt="package" />
                                </button>
                                <p>Package Arrived</p>
                            </div>
                        </div>
                    </div>
                    <!-- Step End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cart__form">
                        <table>
                            <thead>
                                <tr>
                                    <th class="cart-pd__thumb">Product</th>
                                    <th class="cart-pd__qty">Quantity</th>
                                    <th class="cart-pd__date">Date</th>
                                    <th class="cart-pd__status">Status</th>
                                    <th class="cart-pd__price">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pd__thumb">
                                        <div class="product-card--inline">
                                            <a href="product-single.html" class="product__image">
                                                <img src="assets/images/cart/cart-01.png" alt="product" />
                                            </a>
                                            <div class="product__content">
                                                <h5 class="product__title">
                                                    <a href="#">Italian Chicken Meatballs</a>
                                                </h5>
                                                <ul class="product__info">
                                                    <li class="info-item">Color: <span>Red</span></li>
                                                    <li class="info-item">Size: <span>M</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-pd__qty" data-title="Quantity">2</td>
                                    <td class="cart-pd__date text-start" data-title="Date">
                                        Order on <br />
                                        25 April 2022
                                    </td>
                                    <td class="cart-pd__status" data-title="Status">
                                        <div class="status">Processing</div>
                                    </td>
                                    <td class="cart-pd__Price" data-title="Price">$12.22</td>
                                </tr>
                                <tr>
                                    <td class="cart-pd__thumb">
                                        <div class="product-card--inline">
                                            <a href="product-single.html" class="product__image">
                                                <img src="assets/images/cart/cart-03.png" alt="product" />
                                            </a>
                                            <div class="product__content">
                                                <h5 class="product__title">
                                                    <a href="#">Strawberry Fresh Ice-Cream</a>
                                                </h5>
                                                <ul class="product__info">
                                                    <li class="info-item">Flavor: <span>Berry</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-pd__qty" data-title="Quantity">2</td>
                                    <td class="cart-pd__date text-start" data-title="Date">
                                        Order on <br />
                                        25 April 2022
                                    </td>
                                    <td class="cart-pd__status" data-title="Status">
                                        <div class="status">Processing</div>
                                    </td>
                                    <td class="cart-pd__Price" data-title="Price">$12.22</td>
                                </tr>
                                <tr>
                                    <td class="cart-pd__thumb">
                                        <div class="product-card--inline">
                                            <a href="product-single.html" class="product__image">
                                                <img src="assets/images/cart/cart-02.png" alt="product" />
                                            </a>
                                            <div class="product__content">
                                                <h5 class="product__title">
                                                    <a href="#">All Natural Blueberries </a>
                                                </h5>
                                                <ul class="product__info">
                                                    <li class="info-item">Weight: <span>5kg</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-pd__qty" data-title="Quantity">2</td>
                                    <td class="cart-pd__date text-start" data-title="Date">
                                        Order on <br />
                                        25 April 2022
                                    </td>
                                    <td class="cart-pd__status" data-title="Status">
                                        <div class="status">To Ship</div>
                                    </td>
                                    <td class="cart-pd__Price" data-title="Price">$12.22</td>
                                </tr>
                                <tr>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0 text-end">Subtotal</td>
                                    <td class="border-none pb-0">$256.20</td>
                                </tr>
                                <tr>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0 text-end">Delivery Charge</td>
                                    <td class="border-none pb-0">$05.00</td>
                                </tr>
                                <tr>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="border-none pb-0">&nbsp;</td>
                                    <td class="text-end">Shipping</td>
                                    <td>$12.00</td>
                                </tr>
                                <tr>
                                    <td class="border-none pt-10">&nbsp;</td>
                                    <td class="border-none pt-10">&nbsp;</td>
                                    <td class="border-none pt-10">&nbsp;</td>
                                    <td class="border-none pt-10 text-end"><strong>Total</strong></td>
                                    <td class="border-none pt-10"><strong>$231.20</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->

@endsection
