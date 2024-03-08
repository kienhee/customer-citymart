@extends('client.layout.index')
@section('title', 'Cửa hàng')

@section('content')
    <!-- All Category Section Start -->
    <section class="archive-category">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title mb-30">
                        <h2>Products</h2>
                        <div class="shortBy-select select__style d-lg-none d-flex">
                           <label for="sortBy">sắp xếp:</label>
                            <select name="sortBy" id="sortBy">
                                <option value="all">Tất cả</option>
                                <option value="price(ASC)">Giá tăng dần</option>
                                <option value="price(DESC)">Giá giảm dần</option>
                                <option value="Date">Ngày tạo</option>
                                <option value="Sale">Giảm giá</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="filter__area">
                        <div class="section-title__wrap">
                            <form action="#" class="product-filter">
                                <div class="custom__dropdown custom__dropdown__v2">
                                    <div class="selected">
                                        <div class="selected_item selected_item-v2">Danh mục sản phẩm</div>
                                    </div>
                                    <ul class="list list__v2">
                                        @foreach (categoriesChildren() as $category)
                                            <li onclick="addFillter('category','{{ $category->name }}')">
                                                {{ $category->name }}</li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="custom__dropdown custom__dropdown__v2">
                                    <div class="selected">
                                        <div class="selected_item selected_item-v2">Khoảng giá</div>
                                    </div>
                                    <ul class="list list__v2">
                                        <li onclick="addFillter('price','50-100')">
                                            50 Kr -
                                            100 Kr</li>
                                        <li onclick="addFillter('price','200-300')">
                                            200 Kr -
                                            300 Kr</li>
                                        <li onclick="addFillter('price','400-500')">
                                            400 Kr -
                                            500 Kr</li>
                                        <li onclick="addFillter('price','600-700')">
                                            600 Kr -
                                            700 Kr</li>
                                    </ul>
                                </div>
                                <div class="custom__dropdown custom__dropdown__v2">
                                    <div class="selected">
                                        <div class="selected_item selected_item-v2">Màu sắc</div>
                                    </div>
                                    <ul class="list list__v2">
                                        @foreach (getAllColors() as $color)
                                            <li onclick="addFillter('color','{{ $color->name }}')"><span class="color"
                                                    data-bg="{{ $color->code }}"></span>{{ $color->name }}
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>

                            </form>
                            @if (request()->all())
                                <ul class="filtered-query">

                                    @foreach (request()->all() as $key => $item)
                                        @if ($key != 'page')
                                            <li>
                                                <span class="value">{{ $item }}</span>
                                                <a href="#" onclick="removeFilter('{{ $key }}')"
                                                    class="action">&times;</a>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li class="clearAll"><a href="{{ route('shop') }}">Clear all</a></li>
                                </ul>
                            @endif
                        </div>

                        <div class="shortBy-select select__style d-lg-flex d-none">
                            <label for="sortBy">sắp xếp:</label>
                            <select name="sortBy" id="sortBy">
                                <option value="all">Tất cả</option>
                                <option value="price(ASC)">Giá tăng dần</option>
                                <option value="price(DESC)">Giá giảm dần</option>
                                <option value="Date">Ngày tạo</option>
                                <option value="Sale">Giảm giá</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($products->count() > 0)
                        <div class="product-card__wrapper justify-content-start items-1-5">
                            @foreach ($products as $item)
                                <x-product id="{{ $item->id }}" images="{{ $item->images }}" name="{{ $item->name }}"
                                    description="{{ $item->description }}" slug="{{ $item->slug }}"
                                    price="{{ $item->price }}" discount="{{ $item->discount }}"
                                    quantity="{{ $item->quantity }}" colors="{{ $item->colors }}"
                                    sizes="{{ $item->sizes }}" />
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-muted h1 fw-bold">Không tìm thấy sản phẩm nào</p>
                    @endif

                </div>
            </div>

            @php
                $paginator = $products->toArray();
            @endphp
            @if (count($paginator['links']) > 3)
                <div class="row">
                    <div class="col-12">
                        <!-- pagination start  -->
                        <nav class="pagination__wrapper justify-content-center">
                            <ul class="pagination">
                                <li class="pagination__item ">
                                    <a class="page-link"
                                        href="{{ $paginator['current_page'] == 1 ? 'javascript:void(0)' : $paginator['prev_page_url'] }}"><i
                                            class="fa-solid fa-angle-left"></i></a>
                                </li>
                                @for ($i = 1; $i <= $paginator['last_page']; $i++)
                                    <li class="pagination__item {{ $paginator['current_page'] == $i ? 'active' : '' }}"><a
                                            class="page-link"
                                            href="{{ $paginator['current_page'] == $i ? 'javascript:void(0)' : $paginator['path'] }}?page={{ $i }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="pagination__item">
                                    <a class="page-link "
                                        href="{{ $paginator['current_page'] == $paginator['last_page'] ? 'javascript:void(0)' : $paginator['next_page_url'] }}"><i
                                            class="fa-solid fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- pagination end -->
                    </div>
                </div>
            @endif

        </div>
    </section>
    <!-- All Category Section End -->


@endsection
