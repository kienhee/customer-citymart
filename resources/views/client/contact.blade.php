@extends('client.layout.index')
@section('title', 'Liên Hệ')
@section('content')

    <section class="fullPage-section p-0">
        <div class="full-page__wrapper">
            <div class="full-page__image">
                <div class="full-page__logo">
                    <a href="home.html"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo-white.png"
                            alt="logo" /></a>
                </div>
                <img src="{{ asset('client-frontend') }}/assets/images/comming-soon.jpg" alt="comming-soon" />
                <div class="contact__overlay">
                    <div class="contact__info">
                        <h2 class="section__title">Let's talk about all things!</h2>
                        <p class="content">We’re here to help and answer any question you might have. Write to us or
                            give us a call. We will reply to you as soon as possible. But yes, it can take up to 24
                            hours.</p>
                        <div class="contact__meta">
                            <ul class="contact__meta__list">
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
                                    <a href="mailto:jennings@example.com">jennings@example.com</a>
                                </li>
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
                                    <a href="tel:555-0129">(629) 555-0129</a>
                                </li>
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
                                    1901 Thornridge Cir. Shiloh, Hawaii 81063
                                </li>
                            </ul>
                            <div class="social__icon">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full-page__inner">
                <div class="full-page__content">
                    <div class="full-page__logo d-md-none d-bock">
                        <a href="home.html"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo.png"
                                alt="logo" /></a>
                    </div>
                    <div class="popup__title">
                        <h2 class="mb-20">Contact Us</h2>
                    </div>
                    <form action="#" class="form__wrapper">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please enter email" placeholder="Enter your email" />
                        </div>
                        <div class="flex__form col_2">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter your full name" />
                            </div>
                            <div class="form-group">
                                <label for="subject">subject</label>
                                <div class="select__style">
                                    <select name="subject" id="subject" class="form-control select-subject">
                                        <option value="subject">Select Subject</option>
                                        <option value="subject">Select Subject</option>
                                        <option value="subject">Select Subject</option>
                                        <option value="subject">Select Subject</option>
                                        <option value="subject">Select Subject</option>
                                        <option value="subject">Select Subject</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="area">Description</label>
                            <textarea name="area" cols="30" rows="5" id="area" class="form-control form-area"
                                placeholder="Write your message"></textarea>
                        </div>
                        <div class="submit__btn">
                            <button type="submit" class="btn btn-primary mt-0 w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
