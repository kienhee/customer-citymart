@extends('client.layout.index')
@section('title', 'Thanh toán')
@section('content')
    <section class="checkout__section">
        <div class="container">
            <form action="{{ route('handleCheckout') }}" method="post" class="row justify-content-between">
                @csrf
                <div class="col-lg-6">
                    <div class="checkout__form" id="shipping_details">
                        <h5 class="sub-title">Thông tin đặt hàng</h5>
                        <div class="form__wrapper">
                            <div class="form-group">
                                <label for="name">Họ và tên: <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="form-control" placeholder="Nhập họ tên đầy đủ" />
                                @error('name')
                                    <p class="text-danger my-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email: <span class="text-danger">*</span></label>
                                <input type="text" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control" placeholder="Nhập họ tên đầy đủ" />
                                @error('email')
                                    <p class="text-danger my-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại: <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone"
                                    value="{{ old('phone') }}"class="form-control" placeholder="Nhập số điện thoại" />
                                @error('phone')
                                    <p class="text-danger my-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ giao hàng: <span class="text-danger">*</span></label>
                                <input type="text" name="address" id="address" value="{{ old('address') }}"
                                    class="form-control" placeholder="Nhập số nhà, tên đường" />
                                @error('address')
                                    <p class="text-danger my-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="notes">Ghi chú:</label>
                                <textarea name="notes" id="notes" rows="5" class="form-control" placeholder="Nội dung ghi chú">{{ old('notes') }}</textarea>
                                @error('notes')
                                    <p class="text-danger my-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <h5 class="sub-title">Phương thức thanh toán</h5>
                            <div class="form-group">
                                <input type="radio" name="delivery_type" id="cash" class="delivery-input"
                                    value="cash" checked />
                                <label for="cash">
                                    <span class="icon">
                                        <img src="{{ asset('client-frontend') }}/assets/images/cash.png" alt="cash" />
                                    </span>
                                    <span class="content">
                                        <span class="title">Tiền mặt (COD)</span>
                                        <span class="desc">Giao hàng hôm nay</span>
                                    </span>
                                    <span class="price"> Free </span>
                                    <span class="status"></span>
                                </label>
                                @error('note')
                                    <p class="text-danger my-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="cart-order cart-order__v2 ">
                        <h4 class="cart-order__title">Chi tiết đơn hàng của bạn</h4>
                        <div class="cart__items">
                            @foreach ($cart as $item)
                                <div class="shopping-card shopping-card__v2">
                                    <a href="{{ route('productDetail', $item['slug']) }}" class="shopping-card__image">
                                        <img src="{{ getThumb(explode(',', $item['images'])[0]) ?? '' }}"
                                            alt="cart-product" />
                                    </a>
                                    <div class="shopping-card__content">
                                        <div class="shopping-card__content-top">
                                            <h5 class="product__title">
                                                <a
                                                    href="{{ route('productDetail', $item['slug']) }}">{{ $item['name'] }}</a>
                                            </h5>
                                            @if ($item['discount'] > 0)
                                                {{-- Nếu có giảm giá --}}
                                                @php
                                                    $giaSauKhiGiamGia = $item['price'] * (1 - $item['discount'] / 100);
                                                @endphp
                                                <h5 class="product__price"> {{ number_format($giaSauKhiGiamGia) }} Kr
                                                </h5>
                                            @else
                                                <h5 class="product__price">{{ number_format($item['price']) }} Kr</h5>
                                            @endif

                                        </div>
                                        <div class="shopping-card__content-bottom">
                                            <button type="button" class="action__btn qty">
                                                Qty: {{ $item['quantity'] }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="bar"></div>
                        </div>
                        <ul class="cart__subtotal cart__subtotal__v2">
                            <li>
                                <span class="label">Subtotal</span>
                                <span class="value">{{ calculateTotal($cart) }} Kr</span>
                            </li>
                            <li>
                                <span class="label">Shipping:</span>
                                <span class="value">$15.22</span>
                            </li>

                        </ul>
                        <div class="cart__total cart__total__v2 mb-5">
                            <h3>Total <span>(Incl. VAT)</span></h3>
                            <div class="total">{{ calculateTotal($cart) }} Kr</div>
                        </div>
                        <button class="btn btn-lg btn-primary w-100 py-3">Xác nhận đặt hàng</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
