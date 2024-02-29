@extends('admin.layout.index')
@section('title', 'Cập nhật')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.sizes.index') }}">Kích thước</a>
            </li>
            <li class="breadcrumb-item active">Cập nhật</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="px-3 pt-2">
                    <x-notice />
                </div>
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Quản lý kích thước</h5>
                    <a href="{{ route('dashboard.sizes.index') }}" class="btn btn-outline-primary">
                        Danh sách
                    </a>
                </div>
                <!-- Account -->
                <div class="card-body">
                    <form action="{{ route('dashboard.sizes.update', $size->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row ">
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Tên kích thước: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror " type="text"
                                    id="name" name="name" value="{{ old('name') ?? $size->name }}"
                                    placeholder="VD: Size L, M, XL, 1.5, 25 ...v.v" autofocus />
                                @error('name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Lưu lại</button>
                            <button type="reset" class="btn btn-outline-secondary">Đặt lại</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
@endsection
