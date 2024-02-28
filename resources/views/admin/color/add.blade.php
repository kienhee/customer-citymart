@extends('admin.layout.index')
@section('title', 'Thêm màu mới')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.colors.index') }}">Bảng màu</a>
            </li>
            <li class="breadcrumb-item active">Thêm màu mới</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">

                <div class="px-3 pt-2">
                    <x-notice />
                </div>
                <div class="card-header  d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Thêm màu sắc</h5>
                    <a href="{{ route('dashboard.colors.index') }}" class="btn btn-outline-primary">
                        Danh sách màu
                    </a>

                </div>
                <!-- Account -->
                <div class="card-body">
                    <form action="{{ route('dashboard.colors.store') }}" method="POST">
                        @csrf
                        <div class="row ">
                            <div class="mb-3 col-md-9">
                                <label for="name" class="form-label">Tên màu: <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror " type="text"
                                    id="name" name="name" value="{{ old('name') }}"
                                    placeholder="VD: Xanh da trời, Vàng da bò, Đỏ son ...v.v" autofocus />
                                @error('name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="code" class="form-label">Mã màu (#HEX): <span
                                        class="text-danger">*</span></label>
                                <input class="form-control  coloris @error('code') is-invalid @enderror " type="text"
                                    id="code" name="code" value="{{ old('code') }}" placeholder="Mã hex" autofocus
                                    data-coloris />
                                @error('code')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Thêm mới</button>
                            <button type="reset" class="btn btn-outline-secondary">Đặt lại</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
@endsection
