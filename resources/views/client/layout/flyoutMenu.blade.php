 <div class="flyoutMenu">
     <div class="flyout__flip">
         <div class="flyout__inner">
             <div class="menu__header-top">
                 <div class="brand__logo">
                     <a href="{{ route('index') }}"><img src="{{ asset('client-frontend') }}/assets/images/logo/logo.png"
                             alt="logo" /></a>
                 </div>
                 <!-- Close -->
                 <div class="closest__btn action__btn">
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
             <!-- Search Form -->
             <form action="{{ route('shop') }}" method="get" class="search__form full__width">
                 <input type="search" class="form-control" name="search"
                     placeholder="{{ __('Tìm kiếm tên sản phẩm') }}" value="{{ request()->search }}" />
                 <button type="submit">
                     <img src="{{ asset('client-frontend') }}/assets/images/search.png" alt="search" />
                 </button>
             </form>
             <!-- Search Form -->
             <div class="flyout__menu">
                 <ul class="flyout-main__menu">
                     @foreach ($menu as $item)
                         @if (empty($item['children']))
                             <li>
                                 <a href="{{ route($item['link']) }}"
                                     class="{{ url()->current() == route($item['link']) ? 'active' : '' }}">{{ $item['name'] }}</a>
                             </li>
                         @else
                             <li class="has__dropdown">
                                 <a href="#" class="nav__link">{{ $item['name'] }}</a>
                                 <ul class="sub__menu">
                                     @foreach ($item['children'] as $parent)
                                         <li class="has__dropdown">
                                             <a href="javascript:void(0)"
                                                 class="title nav__link">{{ App::currentLocale() == 'vi' ? $parent['parent'] : $parent['parent_se'] }}</a>
                                             <ul class="sub__sub-menu">
                                                 @foreach ($parent['children'] as $children)
                                                     <li><a
                                                             href="{{ route('shop', ['category' => App::currentLocale() == 'vi' ? $children['name'] : $children['name_se']]) }}">{{ App::currentLocale() == 'vi' ? $children['name'] : $children['name_se'] }}</a>
                                                     </li>
                                                 @endforeach
                                             </ul>
                                         </li>
                                     @endforeach

                                 </ul>
                             </li>
                         @endif
                     @endforeach




                 </ul>
             </div>
         </div>
     </div>
 </div>
