@extends('client.layout.index')
@section('title', __('Đặt hàng thành công'))
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <!-- Order Confirm Section Start -->
    <section class="order__confirm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="returm__message text-center">
                        <h5 class="sub__title"><i class="fa-regular fa-circle-check"></i>
                            {{ __('Đơn hàng của bạn đã được đặt thành công') }}
                        </h5>
                        <h2 class="title"> {{ __('Cảm ơn bạn đã mua') }}</h2>
                        <p class="content"> {{ __('Xin chào') }} {{ request()->name }},
                            {{ __('chúng tôi đã nhận được đơn đặt hàng của bạn và đang chuẩn bị vận chuyển. Chúng tôi sẽ thông báo cho bạn khi nó đang trên đường đi!') }}
                        </p>
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <a href="{{ route('shop') }}" class="btn btn-primary"> {{ __('Tiếp tục mua sắm') }}</a>
                    </div>
                    <div class="order__details text-center ">
                        <div class="order__info"> {{ __('Mã đơn hàng') }}<span>{{ request()->orderID }}</span></div>
                        <div class="order__info">
                            {{ __('Ngày đặt hàng') }}<span>{{ Carbon::now()->format('F d, Y') }}</span></div>
                        <div class="order__info"> {{ __('Địa chỉ giao hàng') }}<span>{{ request()->address }}</span></div>
                        <div class="order__info"> {{ __('Phương thức thanh toán') }}
                            <span>{{ request()->delivery_type == 'cash' ? __('Thanh toán khi nhận hàng') : __('Thanh toán bằng Swish') }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Order Confirm Section End -->


@endsection
