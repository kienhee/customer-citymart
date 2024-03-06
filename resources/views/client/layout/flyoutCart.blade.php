  <div class="flyoutCart">
      <div class="flyout__flip">
          <div class="flyout__inner">
              <div class="cart__header-top">
                  <div class="main__title">Giỏ hàng</div>
                  <div class="close__btn action__btn">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M18 6L6 18" stroke="#344054" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                          <path d="M6 6L18 18" stroke="#344054" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                      <!-- Close -->
                  </div>
              </div>
              <div class="cart__title">
                  <h3>Product</h3>
                  <h3>Price</h3>
              </div>
              <div class="cart__items" id="cart__items">

              </div>
              <!-- Cart Items End -->
              <!-- Cart SubTotal Start -->
              <ul class="cart__subtotal">
                  <li>
                      <span class="label">Subtotal</span>
                      <span class="value" id="cart__subtotal">0 Kr</span>
                  </li>
                  <li>
                      <span class="label">Shipping:</span>
                      <span class="value">$15.22</span>
                  </li>
              </ul>
              <!-- Cart SubTotal End -->
              <!-- Total Start -->
              <div class="cart__total">
                  <h3>Total <span>(Incl. VAT)</span></h3>
                  <div class="total">$60.22</div>
              </div>
              <!-- Total End -->
          </div>
          <!-- Cart Button Start -->
          <div class="cart__btns">
              <a href="{{ route('checkout') }}" class="btn btn-primary">Go To Checkout</a>
              <a href="#" class="btn btn-outline">Continue shopping</a>
          </div>
          <!-- Cart Button End -->
      </div>
  </div>
