@extends('admin.layout.index')
@section('title', 'Đơn hàng')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.orders.index') }}">Quản lý đơn hàng</a>
            </li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
    </nav>

    <!-- Order Details Table -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
        <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1 mt-3">
                Order {{ $order->order_id }}
                @if ($order->status == 0)
                    <span class="mb-0 w-100 text-warning"><i class="bx bxs-circle fs-tiny me-2"></i>Chờ xác nhận</span>
                @elseif($order->status == 1)
                    <span class="mb-0 w-100 text-success"><i class="bx bxs-circle fs-tiny me-2"></i>Đang vận chuyển</span>
                @elseif($order->status == 2)
                    <span class="mb-0 w-100 text-success"><i class="bx bxs-circle fs-tiny me-2"></i>Hoàn thành đơn
                        hàng</span>
                @elseif($order->status == 3)
                    <span class="mb-0 w-100 text-danger"><i class="bx bxs-circle fs-tiny me-2"></i>Hoàn trả</span>
                @elseif($order->status == 4)
                    <span class="mb-0 w-100 text-danger"><i class="bx bxs-circle fs-tiny me-2"></i>Huỷ bỏ</span>
                @endif



                <span
                    class="badge bg-label-success">{{ $order->delivery_type == 'cash' ? 'Thanh toán khi nhận hàng' : 'Thanh toáng bằng swish' }}</span>
            </h5>
            <p class="text-body">{{ $order->created_at->format('d/m/Y h:i A') }}</p>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <div class="pt-3 px-3">

                    <x-notice />
                </div>
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-0">Chi tiết đơn hàng</h5>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="datatables-order-details table">
                        <thead>
                            <tr>
                                <th class="w-50">Sản phẩm</th>
                                <th class="w-25">Giá</th>
                                <th class="w-50">Số lượng</th>
                                <th class="w-50"> Tổng</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if ($products->count() > 0)

                                @foreach ($products as $item)
                                    <tr>

                                        <td class="d-flex gap-2 align-items-center">
                                            <img src="{{ getThumb(explode(',', $item->product->images)[0]) ?? '' }}"
                                                alt="Avatar" class="w-px-50 h-px-50  rounded-circle object-fit-cover">
                                            <div class="d-flex flex-column">
                                                <strong>{{ $item->product->name }}</strong>
                                                @if ($item->size)
                                                    <small>Size: {{ $item->size }}</small>
                                                @endif
                                                @if ($item->color)
                                                    <small>Color: {{ explode('-', $item->color)[0] }}</small>
                                                @endif
                                                {{-- <small class="text-muted">{{ $item->description }}</small> --}}
                                            </div>
                                        </td>


                                        <td>
                                            <strong>
                                                {{ $item->price }} Kr
                                            </strong>
                                        </td>

                                        <td>
                                            <strong>
                                                x {{ $item->quantity }}
                                            </strong>
                                        </td>
                                        <td>
                                            <strong>
                                                {{ $item->price * $item->quantity }} Kr
                                            </strong>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center">Không có dữ liệu!</td>
                                </tr>

                            @endif


                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-end align-items-center m-3 mb-2 p-1">
                        <div class="order-calculations">
                            <div class="d-flex justify-content-between">
                                <h6 class="w-px-100 mb-0">Thành tiền:</h6>
                                <h6 class="mb-0">{{ $order->total }} Kr</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title m-0">Khách hàng</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-start align-items-center mb-4">
                        <div class="avatar me-2">
                            <img src="{{ asset('admin-frontend/assets/img/avatar.png') }}" alt="Avatar"
                                class="rounded-circle" />
                        </div>
                        <div class="d-flex flex-column">
                            <a href="app-user-view-account.html" class="text-body text-nowrap">
                                <h6 class="mb-0">{{ $order->name }} </h6>
                            </a>
                            <small class="text-muted">Email: {{ $order->email }} </small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-4">
                        <span
                            class="avatar rounded-circle bg-label-success me-2 d-flex align-items-center justify-content-center"><i
                                class="bx bx-cart-alt bx-sm lh-sm"></i></span>
                        <h6 class="text-body text-nowrap mb-0">{{ $order->quantity }} Sản phẩm</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6>Thông tin khách hàng</h6>
                    </div>
                    <p class="mb-0">Số điện thoại: {{ $order->phone }}</p>
                    <p class="mb-0">Địa chỉ: {{ $order->address }}</p>
                    <p class="mb-1">Ghi chú: {{ $order->notes }}</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between">
                    <h6 class="card-title m-0">Thay đổi trạng thái</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.orders.changeStatus', $order->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <select class="form-select" name="status">
                                <option value="0" @if ($order->status == 0) selected @endif>Chờ xác nhận
                                </option>
                                <option value="1" @if ($order->status == 1) selected @endif>Đang giao hàng
                                </option>
                                <option value="2" @if ($order->status == 2) selected @endif>Hoàn thành đơn
                                    hàng
                                </option>
                                <option value="3" @if ($order->status == 3) selected @endif>Hoàn trả</option>
                                <option value="4" @if ($order->status == 4) selected @endif>Huỷ bỏ</option>
                            </select>
                        </div>
                        <button class="btn btn-primary w-100">Xác nhận</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection
