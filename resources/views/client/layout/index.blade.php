@php
    $info = information();
    $phone = $info->phone;
    $address = $info->address;
    $facebook = $info->facebook;
    $instagram = $info->instagram;
    $twitter = $info->twitter;

    $menu = [
        [
            'name' => 'Trang chủ',
            'children' => [],
            'link' => 'index',
        ],
        [
            'name' => 'Danh Mục Sản Phẩm',
            'children' => categoryMegaMenu(),
            'link' => 'index',
        ],
        [
            'name' => 'Cửa Hàng',
            'children' => [],
            'link' => 'shop',
        ],
        [
            'name' => 'Sản Phẩm Khuyến Mãi',
            'children' => [],
            'link' => 'index',
        ],
        // [
        //     'name' => 'Tin Tức',
        //     'children' => [],
        //     'link' => 'news',
        // ],
        // [
        //     'name' => 'Liên hệ',
        //     'children' => [],
        //     'link' => 'contact',
        // ],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    {{--  Required meta tags  --}}
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title') </title>
    <link rel="shortcut icon" href="{{ asset('client-frontend') }}/assets/images/favicon.png" type="image/f-icon" />

    {{--  font awesome  --}}
    <link rel="stylesheet" href="{{ asset('client-frontend') }}/assets/css/all.min.css" />
    {{--  bootstraph  --}}
    <link rel="stylesheet" href="{{ asset('client-frontend') }}/assets/css/bootstrap.min.css" />
    {{--  Fancy Box  --}}
    <link rel="stylesheet" href="{{ asset('client-frontend') }}/assets/css/jquery.fancybox.min.css" />
    {{--  swiper js  --}}
    <link rel="stylesheet" href="{{ asset('client-frontend') }}/assets/css/swiper-bundle.min.css" />
    {{--  Nice Select  --}}
    <link rel="stylesheet" href="{{ asset('client-frontend') }}/assets/css/nice-select.css" />
    {{--  Countdown js  --}}
    <link rel="stylesheet" href="{{ asset('client-frontend') }}/assets/css/jquery.countdown.css" />
    {{--  User's CSS Here  --}}
    <link rel="stylesheet" href="{{ asset('client-frontend') }}/assets/css/style.css" />
</head>

<body>
    {{--  Header Start   --}}
    @include('client.layout.header', ['phone' => $phone, 'address' => $address, 'menu' => $menu])
    {{--  Header End  --}}
    {{-- content --}}
    @yield('content')
    {{-- content end --}}
    {{--  Footer Section Start  --}}
    @include('client.layout.footer', [
        'facebook' => $facebook,
        'instagram' => $instagram,
        'twitter' => $twitter,
    ])
    {{--  Footer Section End  --}}

    {{--  Header Flyout Menu Start  --}}
    @include('client.layout.flyoutMenu')
    {{--  Header Flyout Menu End  --}}

    {{--  Header FlyoutCart Start  --}}
    @include('client.layout.flyoutCart')
    {{--  Header FlyoutCart End  --}}

    @include('client.layout.modal')
    {{--  Preloader Start  --}}
    <div id="preloader">
        <div id="status"><img src="{{ asset('client-frontend') }}/assets/images/favicon.png" alt="logo" /></div>
    </div>
    {{--  Preloader End  --}}

    {{--  Scroll-top  --}}
    <button class="scroll-top scroll-to-target" data-target="html">scroll</button>
    {{--  Scroll-top-end --}}

    {{--  JS  --}}
    <script src="{{ asset('client-frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/jquery.plugin.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/counterup.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/jquery.waypoints.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/jquery.nice-select.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('client-frontend') }}/assets/js/scripts.js"></script>
</body>

</html>
