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
                            <label for="sortBy">Sort by:</label>
                            <select name="sortBy" id="sortBy">
                                <option value="0">Relevance</option>
                                <option value="0">Name (A-Z)</option>
                                <option value="0">Name (Z-A)</option>
                                <option value="0">Date</option>
                                <option value="0">Sale</option>
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
                                        <li onclick="addFillter('price','100-200')">
                                            $100.00 -
                                            $200.00</li>
                                        <li onclick="addFillter('price','100-200')">
                                            $100.00 -
                                            $200.00</li>
                                        <li onclick="addFillter('price','100-200')">
                                            $100.00 -
                                            $200.00</li>
                                        <li onclick="addFillter('price','100-200')">
                                            $100.00 -
                                            $200.00</li>
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




                                {{-- <div class="custom__dropdown custom__dropdown__v2">
                                    <div class="selected">
                                        <div class="selected_item selected_item-v2">Sắp xếp</div>
                                    </div>
                                    <ul class="list list__v2">
                                        <li>Tên (A-Z)</li>
                                        <li>Tên (Z-A)</li>
                                        <li>Ngày Tạo</li>
                                        <li>Giảm giá</li>
                                    </ul>
                                </div> --}}
                            </form>
                            @if (request()->all())
                                <ul class="filtered-query">
                                    @foreach (request()->all() as $key => $item)
                                        <li>
                                            <span class="value">{{ $item }}</span>
                                            <a href="#" onclick="removeFilter('{{ $key }}')"
                                                class="action">&times;</a>
                                        </li>
                                    @endforeach

                                    <li class="clearAll"><a href="{{ route('shop') }}">Clear all</a></li>

                                </ul>
                            @endif
                        </div>

                        <div class="shortBy-select select__style d-lg-flex d-none">
                            <label for="sortBy2">Sort by:</label>
                            <select name="sortBy" id="sortBy2">
                                <option value="0">Relevance</option>
                                <option value="0">Name (A-Z)</option>
                                <option value="0">Name (Z-A)</option>
                                <option value="0">Date</option>
                                <option value="0">Sale</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-card__wrapper justify-content-start items-1-5">
                        @foreach ($products as $item)
                            <x-product id="{{ $item->id }}" images="{{ $item->images }}" name="{{ $item->name }}"
                                slug="{{ $item->slug }}" price="{{ $item->price }}"
                                discount="{{ $item->discount }}" />
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- pagination start  -->
                    <nav class="pagination__wrapper justify-content-center">
                        <ul class="pagination">
                            <li class="pagination__item">
                                <a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>
                            </li>
                            <li class="pagination__item active"><a class="page-link" href="#">1</a></li>
                            <li class="pagination__item"><a class="page-link" href="#">2</a></li>
                            <li class="pagination__item"><a class="page-link" href="#">3</a></li>
                            <li class="pagination__item"><a class="page-link dot" href="#">...</a></li>
                            <li class="pagination__item"><a class="page-link" href="#">8</a></li>
                            <li class="pagination__item"><a class="page-link" href="#">9</a></li>
                            <li class="pagination__item"><a class="page-link" href="#">10</a></li>
                            <li class="pagination__item">
                                <a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- pagination end -->
                </div>
            </div>
        </div>
    </section>
    <!-- All Category Section End -->


@endsection
@section('script')
    <script>
        function addFillter(param, value) {
            // Lấy URL hiện tại
            let currentUrl = window.location.href;

            // Tham số mới mà bạn muốn thêm hoặc thay thế
            let newParam = `${param}=${value}`;

            // Regex để kiểm tra xem tham số đã tồn tại trong URL chưa
            let regex = new RegExp("([?&])" + newParam.split('=')[0] + "=.*?(&|$)", "i");

            // Nếu tham số đã tồn tại, thì thay thế giá trị của nó
            let newUrl = "";
            if (currentUrl.match(regex)) {
                newUrl = currentUrl.replace(regex, '$1' + newParam + '$2');
            } else {
                // Nếu tham số chưa tồn tại, thêm nó vào URL
                newUrl = currentUrl + (currentUrl.indexOf('?') !== -1 ? '&' : '?') + newParam;
            }

            // Chuyển hướng tới URL mới
            window.location.href = newUrl;

        }

        function removeFilter(param) {
            // Lấy URL hiện tại
            let currentUrl = window.location.href;

            // Tham số mà bạn muốn xoá
            let paramToRemove = param;

            // Regex để tìm và xoá tham số từ query string
            let regex = new RegExp("([?&])" + paramToRemove + "=.*?(&|$)", "i");

            // Xoá tham số từ URL
            let newUrl = currentUrl.replace(regex, '$1').replace(/&$/, '');

            // Chuyển hướng tới URL mới
            window.location.href = newUrl;
        }
    </script>
@endsection
