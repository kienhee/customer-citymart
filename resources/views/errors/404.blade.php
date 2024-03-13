@extends('client.layout.index')
@section('content')
    < <section class="error-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="error-page__wrapper text-center">
                        <div class="error-page__image">
                            <img src="{{ asset('client-frontend') }}/assets/images/error.png" alt="error" />
                        </div>
                        <div class="error-page__content">
                            <p>
                                The page you are looking for is not available or <br />
                                doesn’t belong to this website!
                            </p>
                            <div class="back-btn">
                                <a href="{{ route('shop') }}" class="btn btn-primary">{{ __('Tiếp tục mua sắm') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    @endsection
