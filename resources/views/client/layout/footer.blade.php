  <footer class="footer__section">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <div class="footer__wrapper">
                      <div class="footer__widget d-block">
                          <div class="footer__logo">
                              <a href="/"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo.png"
                                      alt="logo" /></a>
                          </div>
                          @if ($footer_info)
                              <p>{{ $footer_info }}</p>
                          @endif

                      </div>
                  </div>
              </div>

              <div class="col-lg-2 col-md-3 col-sm-12">
                  <div class="footer__wrapper">
                      <div class="footer__widget">
                          <div class="title">
                              <h5>Giới thiệu</h5>
                          </div>
                          <ul>
                              <li><a href="/">Trang chủ</a></li>
                              <li><a href="{{ route('shop') }}">Cửa hàng</a></li>
                              <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-12">
                  <div class="footer__wrapper">
                      <div class="footer__widget">
                          <div class="title">
                              <h5>Danh mục sản phẩm</h5>
                          </div>
                          <ul>
                              @foreach (categoriesChildren() as $category)
                                  <li><a
                                          href="{{ route('shop', ['category' => $category->name]) }}">{{ $category->name }}</a>
                                  </li>
                              @endforeach

                          </ul>
                      </div>
                  </div>
              </div>



          </div>
          <div class="row">
              <div class="col-12">
                  <!-- Accordion Start -->
                  <div class="accordion__wrapper">
                      <div class="accordion accordion-flush" id="accordionFlushExample01">
                          <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-heading01">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#flush-collapse01" aria-expanded="false"
                                      aria-controls="flush-collapse01">
                                      Giới thiệu
                                  </button>
                              </h2>
                              <div id="flush-collapse01" class="accordion-collapse collapse"
                                  aria-labelledby="flush-heading01" data-bs-parent="#accordionFlushExample01">
                                  <div class="accordion-body">
                                      <div class="footer__widget">
                                          <ul>
                                              <li><a href="/">Trang chủ</a></li>
                                              <li><a href="{{ route('shop') }}">Cửa hàng</a></li>
                                              <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-heading02">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#flush-collapse02" aria-expanded="false"
                                      aria-controls="flush-collapse02">
                                      Danh mục sản phẩm
                                  </button>
                              </h2>
                              <div id="flush-collapse02" class="accordion-collapse collapse"
                                  aria-labelledby="flush-heading02" data-bs-parent="#accordionFlushExample01">
                                  <div class="accordion-body">
                                      <div class="footer__widget">
                                          <ul>
                                              @foreach (categoriesChildren() as $category)
                                                  <li><a
                                                          href="{{ route('shop', ['category' => $category->name]) }}">{{ $category->name }}</a>
                                                  </li>
                                              @endforeach
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-heading03">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#flush-collapse03" aria-expanded="false"
                                      aria-controls="flush-collapse03">
                                      Resources
                                  </button>
                              </h2>
                              <div id="flush-collapse03" class="accordion-collapse collapse"
                                  aria-labelledby="flush-heading03" data-bs-parent="#accordionFlushExample01">
                                  <div class="accordion-body">
                                      <div class="footer__widget">
                                          <ul>
                                              <li><a href="#">Blog</a></li>
                                              <li>
                                                  <a href="#">Newsletter <span>Best</span></a>
                                              </li>
                                              <li><a href="#">Help centre</a></li>
                                              <li><a href="#">Tutorials</a></li>
                                              <li><a href="#">Support</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-heading04">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#flush-collapse04" aria-expanded="false"
                                      aria-controls="flush-collapse04">
                                      Legal
                                  </button>
                              </h2>
                              <div id="flush-collapse04" class="accordion-collapse collapse"
                                  aria-labelledby="flush-heading04" data-bs-parent="#accordionFlushExample01">
                                  <div class="accordion-body">
                                      <div class="footer__widget">
                                          <ul>
                                              <li><a href="#">Terms</a></li>
                                              <li><a href="#">Privacy</a></li>
                                              <li><a href="#">Licenses</a></li>
                                              <li><a href="#">Settings</a></li>
                                              <li><a href="#">Contact</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Accordion End -->
              </div>
          </div>
      </div>
      <div class="footer__bottom">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="footer__content text-center">
                          <div class="content">
                              <p>
                                  &copy; 2023
                                  <a href="#">SuperMart</a>. All rights reserved
                              </p>
                          </div>
                          <div class="link">
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
                                          class="fa-brands fa-instagram"></i> </a>
                              @endif

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
