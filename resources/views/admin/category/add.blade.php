@extends('admin.layout.index')
@section('title', 'Tạo mới danh mục')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.categories.index') }}">Quản lý danh mục sản phẩm</a>
            </li>
            <li class="breadcrumb-item active">Tạo mới</li>
        </ol>
    </nav>
    <form class="row" action="{{ route('dashboard.categories.store') }}" method="POST">
        @csrf
        <div class="col-xl-4 col-lg-5 col-md-5">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column mb-5">

                            <div id="holder" class="mb-3">
                                <img src="{{ asset('admin-frontend') }}/assets/img/upload.png" alt="user image"
                                    class="d-block  rounded user-profile-img object-fit-cover " width="110"
                                    height="110" id="preview" />
                            </div>
                            <span class="input-group-btn">
                                <a id="cover" data-input="thumbnail" data-preview="holder"
                                    class="btn btn-outline-primary">
                                    <i class='bx bx-cloud-upload'></i>&nbsp;Thêm ảnh
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="hidden" name="cover">
                            @error('cover')
                                <p class="text-danger mt-1 fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7">
            <div class="card mb-4">
                <div class="card-body">
                    <x-notice />
                    <div class=" d-flex align-items-center justify-content-end">
                        <a href="{{ route('dashboard.categories.index') }}" class="btn btn-outline-primary">
                            <i class='bx bx-list-ul'></i> &nbsp;Danh mục sản phẩm
                        </a>
                    </div>
                    <form id="formAccountSettings" action="{{ route('dashboard.categories.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Tên danh mục:(Vi) <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror " type="text"
                                    id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Tên danh mục - Việt Nam" autofocus />
                                @error('name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="name_se" class="form-label">Tên danh mục:(Se) <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('name_se') is-invalid @enderror " type="text"
                                    id="name_se" name="name_se" value="{{ old('name_se') }}"
                                    placeholder="Tên danh mục - Thuỵ điển" autofocus />
                                @error('name_se')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Thuộc danh mục: <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id"
                                    id="category_id">
                                    <option value="0">Danh mục gốc</option>
                                    @foreach (categoriesParent() as $item)
                                        <option value="{{ $item->id }}"
                                            @if (old('category_id') == $item->id) @selected(true) @endif>
                                            {{ $item->name }}</option>
                                    @endforeach


                                </select>
                                @error('category_id')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class=" mb-3 ">
                                <label for="description" class="form-label">Mô tả ngắn:</label>

                                <textarea class="form-control @error('description') is-invalid @enderror " id="description" rows="3"
                                    name="description" placeholder="Mô tả danh mục">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Tạo mới </button>
                            <button type="reset" class="btn btn-outline-secondary">Đặt lại</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </form>

@endsection
@section('script')
    <script src="/vendor/laravel-filemanager/js/category-upload.js"></script>
    <script>
        $('#cover').filemanager('image');
    </script>
@endsection
