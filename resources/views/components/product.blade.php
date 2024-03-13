@php
    $sizes = json_decode(html_entity_decode($sizes), true);
    $colors = explode(',', $colors)[0];
@endphp

<div class="product-card">
    <div class="product__image__wrapper">
        <a href="{{ route('productDetail', $slug) }}" class="product__image">
            <img src="{{ getThumb(explode(',', $images)[0]) ?? '' }}" alt="icon" />
        </a>
        @if ($discount > 0)
            <div class="badge">{{ $discount }}%</div>
        @endif
        <div class="product__actions">
        </div>
    </div>
    <div class="product__content">
        <div class="product__title">
            <h5><a href="{{ route('productDetail', App::currentLocale() == 'vi' ? $slug : $slugSe) }}">{{ App::currentLocale() == 'vi' ? $name : $nameSe }}
                </a></h5>

        </div>
        <div class="product__bottom d-block">
            <div class="product__price justify-content-start mb-3">
                @if ($discount > 0)
                    {{-- Nếu có giảm giá --}}
                    @php
                        $giaSauKhiGiamGia = $price * (1 - $discount / 100);
                    @endphp
                    {{ number_format($giaSauKhiGiamGia) }} Kr
                    <del>{{ number_format($price) }} Kr</del>
                @else
                    {{ number_format($price) }} Kr
                @endif
            </div>

            <div class="cart__action__btn ">
                <div class="cart__btn">
                    <button class="btn btn-outline w-100">{{ __('Thêm vào giỏ hàng') }}</button>
                    <input type="hidden" class="product_id-hidden" value="{{ $id }}">
                    <input type="hidden" class="color-hidden" value="{{ $colors }}">
                    <input type="hidden" class="size-hidden"
                        value="@if (isset($sizes[0])) {{ $sizes[0]['value'] }} @endif">
                </div>
            </div>
        </div>
    </div>

</div>
@section('script')
    <script></script>
@endsection
