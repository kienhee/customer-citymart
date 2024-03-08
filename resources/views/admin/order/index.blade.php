@extends('admin.layout.index')
@section('title', 'Đơn hàng')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Quản lý đơn hàng</a>
            </li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
                <div class="row gy-4 gy-sm-1 ">
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                            <div>
                                <h3 class="mb-2">{{ $wait }}</h3>
                                <p class="mb-0">Chờ xác nhận</p>
                            </div>
                            <div class="avatar me-sm-4">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-calendar bx-sm"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-4" />
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                            <div>
                                <h3 class="mb-2">{{ $complete }}</h3>
                                <p class="mb-0">Đang vận chuyển</p>
                            </div>
                            <div class="avatar me-lg-4">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-check-double bx-sm"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none" />
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                            <div>
                                <h3 class="mb-2">{{ $complete }}</h3>
                                <p class="mb-0">Hoàn thành</p>
                            </div>
                            <div class="avatar me-lg-4">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-check-double bx-sm"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none" />
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                            <div>
                                <h3 class="mb-2">{{ $return }}</h3>
                                <p class="mb-0">Hoàn trả</p>
                            </div>
                            <div class="avatar me-sm-4">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-wallet bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h3 class="mb-2">{{ $cancel }}</h3>
                                <p class="mb-0">Huỷ bỏ</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-secondary">
                                    <i class="bx bx-error-alt bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order List Table -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <div class="row mb-3 mx-2 mt-3">
                <div class="col-sm-3">
                    <label for="search_order_id" class="form-label">Tìm kiếm order_ID:</label>
                    <input type="search" class="form-control" id="search_order_id" placeholder="Nhập orderID để tìm kiếm">
                </div>
                <div class="col-sm-3">
                    <label for="search_email" class="form-label">Tìm kiếm email:</label>
                    <input type="search" class="form-control" id="search_email" placeholder="Nhập email để tìm kiếm">
                </div>
                <div class="col-sm-3">
                    <label for="search_phone" class="form-label">Tìm kiếm số điện thoại:</label>
                    <input type="search" class="form-control" id="search_phone"
                        placeholder="Nhập số điện thoại để tìm kiếm">
                </div>
                <div class="col-sm-3">
                    <label for="search_status" class="form-label">Tìm kiếm trạng thái đơn hàng:</label>
                    <select class="form-select" id="search_status">
                        <option value="">Chọn trạng thái</option>
                        <option value="0">Chờ xác nhận</option>
                        <option value="1">Đang vận chuyển</option>
                        <option value="2">Hoàn thành đơn hàng</option>
                        <option value="3">Hoàn trả</option>
                        <option value="4">Huỷ bỏ</option>
                    </select>
                </div>
            </div>

            <table class="datatables-order table border-top" id="orders-table">
                <thead>
                    <tr>
                        <th>OrderID</th>
                        <th>Khách hàng</th>
                        <th>Ngày tạo</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>thanh toán</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('#orders-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('dashboard.orders.list') !!}',
                    data: function(d) {
                        d.search_order_id = $('#search_order_id').val();
                        d.search_email = $('#search_email').val();
                        d.search_phone = $('#search_phone').val();
                        d.search_status = $('#search_status').val();
                    }
                },
                columns: [{
                        data: 'OrderID',
                        name: 'order_id'
                    },
                    {
                        data: 'customer',
                        name: 'name'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'quantity',
                        name: 'quantity',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'total',
                        name: 'total'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        searchable: false
                    },
                    {
                        data: 'delivery_type',
                        name: 'delivery_type',
                        searchable: false
                    },

                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [2,
                        'desc'
                    ] // 4 tương ứng với chỉ số của cột 'created_at' trong mảng 'columns'
                ],
                initComplete: function() {
                    // Tùy chỉnh nội dung của hộp nhập tìm kiếm
                    $('#orders-table_filter input').attr('placeholder', 'Nhập tên để tìm kiếm');

                    $('#search_status').on('change', function() {
                        // Gửi dữ liệu tìm kiếm trạng thái đơn hàng tới controller qua Ajax
                        $('#orders-table').DataTable().draw();
                    });

                    // Lắng nghe sự kiện khi nhập liệu vào ô tìm kiếm email
                    $('#search_email').on('keyup', function() {
                        // Gửi dữ liệu tìm kiếm email tới controller qua Ajax
                        $('#orders-table').DataTable().draw();
                    });
                    // Lắng nghe sự kiện khi nhập liệu vào ô tìm kiếm email
                    $('#search_order_id').on('keyup', function() {
                        // Gửi dữ liệu tìm kiếm email tới controller qua Ajax
                        $('#orders-table').DataTable().draw();
                    });

                    // Lắng nghe sự kiện khi nhập liệu vào ô tìm kiếm số điện thoại
                    $('#search_phone').on('keyup', function() {
                        // Gửi dữ liệu tìm kiếm số điện thoại tới controller qua Ajax
                        $('#orders-table').DataTable().draw();
                    });
                },
            });



        });
    </script>
@endsection
