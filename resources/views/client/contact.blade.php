@php
    $info = information();
    $phone = $info->phone;
    $email = $info->email;
    $address = $info->address;
    $facebook = $info->facebook;
    $instagram = $info->instagram;
    $twitter = $info->twitter;
    $map = $info->map;

@endphp
@extends('client.layout.index')
@section('title', __('Liên hệ'))
@section('content')
    <div class="container my-5">
        <section class="fullPage-section p-0">
            <div class="full-page__wrapper">

                <div class="full-page__image">

                    <img src="{{ asset('client-frontend') }}/assets/images/bg-contact.png" alt="comming-soon" />
                    <div class="contact__overlay">
                        <div class="contact__info">
                            <h2 class="section__title"> {{ __('Hãy nói về tất cả mọi thứ!') }}</h2>
                            <p class="content">
                                {{ __(' Chúng tôi ở đây để trợ giúp và trả lời bất kỳ câu hỏi nào bạn có thể có. Viết
                                                                thư
                                                                cho chúng tôi hoặc
                                                                gọi cho chúng tôi. Chúng tôi sẽ phản hồi nhanh nhất có thể. Nhưng vâng, có thể mất tới 24
                                                                giờ.') }}
                            </p>
                            <div class="contact__meta">
                                <ul class="contact__meta__list">
                                    @if ($email)
                                        <li>
                                            <div class="icon">
                                                <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5817 16.9803C15.331 16.9803 17.5598 14.7515 17.5598 12.0021C17.5598 9.25278 15.331 7.02399 12.5817 7.02399C9.83231 7.02399 7.60352 9.25278 7.60352 12.0021C7.60352 14.7515 9.83231 16.9803 12.5817 16.9803Z"
                                                        fill="#0067FF"></path>
                                                    <path
                                                        d="M12.5818 0C5.6601 0 0 5.5919 0 12.5477C0 18.276 8.59243 28.2323 11.593 31.5397C12.1385 32.1534 13.0591 32.1534 13.6047 31.5397C16.6052 28.2323 25.1977 18.276 25.1977 12.5477C25.1636 5.52371 19.5035 0 12.5818 0ZM12.5818 20.9014C7.63772 20.9014 3.61428 16.878 3.61428 12.0021C3.61428 7.12627 7.63772 3.10282 12.5818 3.10282C17.5258 3.10282 21.5493 7.12627 21.5493 12.0021C21.5493 16.878 17.5258 20.9014 12.5818 20.9014Z"
                                                        fill="#0067FF"></path>
                                                </svg>
                                            </div>
                                            <a href="mailto:{{ $email }}">{{ $email }}</a>
                                        </li>
                                    @endif

                                    @if ($phone)
                                        <li>
                                            <div class="icon">
                                                <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5817 16.9803C15.331 16.9803 17.5598 14.7515 17.5598 12.0021C17.5598 9.25278 15.331 7.02399 12.5817 7.02399C9.83231 7.02399 7.60352 9.25278 7.60352 12.0021C7.60352 14.7515 9.83231 16.9803 12.5817 16.9803Z"
                                                        fill="#0067FF"></path>
                                                    <path
                                                        d="M12.5818 0C5.6601 0 0 5.5919 0 12.5477C0 18.276 8.59243 28.2323 11.593 31.5397C12.1385 32.1534 13.0591 32.1534 13.6047 31.5397C16.6052 28.2323 25.1977 18.276 25.1977 12.5477C25.1636 5.52371 19.5035 0 12.5818 0ZM12.5818 20.9014C7.63772 20.9014 3.61428 16.878 3.61428 12.0021C3.61428 7.12627 7.63772 3.10282 12.5818 3.10282C17.5258 3.10282 21.5493 7.12627 21.5493 12.0021C21.5493 16.878 17.5258 20.9014 12.5818 20.9014Z"
                                                        fill="#0067FF"></path>
                                                </svg>
                                            </div>
                                            <a href="tel:{{ $phone }}"> {{ $phone }}</a>
                                        </li>
                                    @endif

                                    @if ($address)
                                        <li>
                                            <div class="icon">
                                                <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5817 16.9803C15.331 16.9803 17.5598 14.7515 17.5598 12.0021C17.5598 9.25278 15.331 7.02399 12.5817 7.02399C9.83231 7.02399 7.60352 9.25278 7.60352 12.0021C7.60352 14.7515 9.83231 16.9803 12.5817 16.9803Z"
                                                        fill="#0067FF"></path>
                                                    <path
                                                        d="M12.5818 0C5.6601 0 0 5.5919 0 12.5477C0 18.276 8.59243 28.2323 11.593 31.5397C12.1385 32.1534 13.0591 32.1534 13.6047 31.5397C16.6052 28.2323 25.1977 18.276 25.1977 12.5477C25.1636 5.52371 19.5035 0 12.5818 0ZM12.5818 20.9014C7.63772 20.9014 3.61428 16.878 3.61428 12.0021C3.61428 7.12627 7.63772 3.10282 12.5818 3.10282C17.5258 3.10282 21.5493 7.12627 21.5493 12.0021C21.5493 16.878 17.5258 20.9014 12.5818 20.9014Z"
                                                        fill="#0067FF"></path>
                                                </svg>
                                            </div>
                                            {{ $address }}
                                        </li>
                                    @endif

                                </ul>
                                <div class="social__icon">
                                    @if ($facebook)
                                        <a href="{{ $facebook }}" target="_blank"><i
                                                class="fa-brands fa-facebook"></i></a>
                                    @endif
                                    @if ($twitter)
                                        <a href="{{ $twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i>
                                        </a>
                                    @endif
                                    @if ($instagram)
                                        <a href="{{ $instagram }}" target="_blank"><i
                                                class="fa-brands fa-instagram"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="full-page__inner">
                    {!! $map !!}
                </div>
            </div>
        </section>
    </div>

@endsection
