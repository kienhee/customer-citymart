@extends('admin.layout.index')
@section('title', 'Thêm sản phẩm')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.products.index') }}">Quản lý sản phẩm</a>
            </li>
            <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
        </ol>
    </nav>
    <form action="{{ route('dashboard.products.store') }}" class="row" method="POST">
        @csrf
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <div class="px-3 pt-2">
                    <x-notice />
                </div>
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Thêm mới sản phẩm</h5>
                    <a href="{{ route('dashboard.products.index') }}" class="btn btn-outline-primary">
                        <i class='bx bx-list-ul'></i> &nbsp;Danh sách sản phẩm
                    </a>

                </div>
                <div class="card-body row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Tên sản phẩm(vi): <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('name') is-invalid @enderror " type="text"
                            oninput="createSlug('name','slug')" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Tên sản phẩm - Việt Nam" autofocus />
                        @error('name')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="name_se" class="form-label">Tên sản phẩm(se): <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('name_se') is-invalid @enderror " type="text"
                            oninput="createSlug('name_se','slug')" id="name_se" name="name_se"
                            value="{{ old('name_se') }}" placeholder="Tên sản phẩm - Thuỵ Điển"  />
                        @error('name_se')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description" class="form-label">Mô tả ngắn(vi): </label>
                        <textarea class="form-control @error('description') is-invalid @enderror " id="description" rows="3"
                            name="description" placeholder="Mô tả ngắn về sản phẩm - Việt Nam">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="description_se" class="form-label">Mô tả ngắn(se): </label>
                        <textarea class="form-control @error('description_se') is-invalid @enderror " id="description_se" rows="3"
                            name="description_se" placeholder="Mô tả ngắn về sản phẩm - Thuỵ Điển">{{ old('description_se') }}</textarea>
                        @error('description_se')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="content-product" class="form-label">Thông tin sản phẩm (vi): <span
                                class="text-danger">*</span></label>
                        <textarea class="form-control my-editor @error('content') is-invalid @enderror " id="content-product" rows="3"
                            name="content" placeholder="Mô tả chi tiết: Thông tin xuất xứ, chất liệu, ..v.v">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="content-product" class="form-label">Thông tin sản phẩm (se): <span
                                class="text-danger">*</span></label>
                        <textarea class="form-control my-editor @error('content_se') is-invalid @enderror " id="content-product" rows="3"
                            name="content_se" placeholder="Mô tả chi tiết: Thông tin xuất xứ, chất liệu, ..v.v">{{ old('content_se') }}</textarea>
                        @error('content_se')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-tile mb-0">Hình ảnh sản phẩm</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="upload__box">
                            <label id="upload" data-input="thumbnail" data-preview="holder"
                                class="form-label upload-label mb-3">
                                <p class="mb-0">Thêm hình
                                    ảnh <span class="text-danger">*</span></p>
                                <small>(Nên chọn hình tỉ lệ 1:1)</small>
                            </label>

                            <input id="thumbnail" class="form-control" type="text" name="images" hidden multiple>
                            <div id="holder" class="d-flex justify-content-center gap-3 flex-wrap">
                                @if (old('images'))
                                    @foreach (explode(',', old('images')) as $item)
                                        <img src="{{ $item }}"
                                            style="height: 10rem; width: 10rem;object-fit: contain">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        @error('images')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-tile mb-0">Thuộc tính</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 ">
                        <label for="quantity" class="form-label">Số lượng: <span class="text-danger">*</span></label>
                        <input class="form-control @error('quantity') is-invalid @enderror " type="text"
                            id="quantity" name="quantity" value="{{ old('quantity') }}" placeholder="Số lượng" />
                        @error('quantity')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="category_id" class="form-label">Danh mục: <span class="text-danger">*</span></label>
                        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id"
                            id="category_id">
                            <option value="">Vui lòng lựa chọn</option>
                            @if (getAllCategories()->count() > 0)
                                @foreach (menuSelect(getAllCategories()) as $category)
                                    <option @if (old('category_id') == $category->id) @selected(true) @endif
                                        @if ($category->level == 0) @disabled(true) @endif
                                        value="{{ $category->id }}">
                                        {{ str_repeat('|---', $category->level) }}
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif

                        </select>

                        @error('category_id')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="select-multiple" class="form-label">Màu sắc: </label>
                        <select id="select-multiple" class="@error('colors') is-invalid @enderror" multiple
                            name="colors" placeholder="Chọn màu sắc" data-search="true"
                            data-silent-initial-value-set="true">
                            @foreach (getAllColors() as $color)
                                <option
                                    {{ strpos(old('colors'), $color->name . '-' . $color->code) !== false ? 'selected' : '' }}
                                    value="{{ $color->name }}-{{ $color->code }}">{{ $color->name }}
                                </option>
                            @endforeach

                        </select>
                        @error('colors')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sizes" class="form-label">Loại: <span class="text-danger">*</span></label>
                        <input id="sizes" name="sizes" class="form-control @error('sizes') is-invalid @enderror"
                            placeholder="Vui lòng nhập chọn loại" value="{{ old('sizes') }}" />
                        <input type="hidden" value="{{ json_encode(suggestionSizes()) }}" id="whitelist">
                        @error('sizes')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-tile mb-0">Định giá</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 ">
                        <label for="price" class="form-label">Giá bán: <span class="text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">$</span>
                            <input type="text" name="price" value="{{ old('price') }}"
                                class="form-control @error('price') is-invalid @enderror"
                                placeholder="Vui lòng thêm thông tin">
                            <span class="input-group-text">Kr</span>
                        </div>
                        @error('price')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="discount" class="form-label">discount (%):</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">%</span>
                            <input type="text" name="discount"
                                class="form-control @error('discount') is-invalid @enderror"
                                value="{{ old('discount') }}" placeholder="Vui lòng thêm thông tin">
                        </div>
                        @error('discount')
                            <p class="text-danger my-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Thêm sản phẩm</button>
                </div>
            </div>
        </div>
    </form>





@endsection
@section('script')
    <script src="{{ asset('vendor/laravel-filemanager/js/upload-images-product.js') }}"></script>
    <script>
        $('#upload').filemanager('image');
        const whitelist = JSON.parse($('#whitelist').val());
        new Tagify(document.getElementById('sizes'), {
            whitelist: whitelist,
            maxTags: 10,
            dropdown: {
                maxItems: 20,
                classname: 'tags-inline',
                enabled: 0,
                closeOnSelect: false
            }
        });
    </script>
@endsection
