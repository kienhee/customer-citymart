<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index');
    }
    public function list()
    {
        $orders = Order::select(['id', 'name', 'email', 'phone', 'address', 'total', 'quantity', 'status', 'delivery_type', 'created_at']);

        return DataTables::of($orders)
            ->editColumn('customer', function ($order) {
                return '
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3">
                        <img src="' . asset('admin-frontend/assets/img/avatar.png') . '" alt="Avatar" class="w-px-30 h-px-30  rounded-circle object-fit-cover">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <a href="' . route('dashboard.orders.orderDetail', $order->id) . '" class="text-body text-truncate">
                        <span class="fw-medium">' . $order->name . '</span>
                    </a>
                    <small class="text-muted">' . $order->email . '</small>
                    <small class="text-muted">' . $order->phone . '</small>
                    <small class="text-muted">' . $order->address . '</small>
                </div>
            </div>';
            })
            ->editColumn('created_at', function ($order) {
                return '<p class="m-0">' . $order->created_at->format('d M Y') . '</p>
                <small>' . $order->created_at->format('h:i A') . '</small>';
            })
            ->editColumn('quantity', function ($order) {
                return '<strong class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="bx bx bx-package"></i></span>x' . $order->quantity . '</strong>';
            })
            ->editColumn('total', function ($order) {
                return '<strong class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="bx bx-money"></i></span>' . $order->total . '   Kr </strong>';
            })
            ->editColumn('status', function ($order) {
                return '<span class="badge me-1 ' . ($order->status == 1 ? 'bg-label-success' : 'bg-label-danger') . '">' . ($order->status == 1 ? 'Đã xem' : 'Chưa xem') . '</span>';
            })
            ->editColumn('delivery_type', function ($order) {
                return '<span class="badge me-1 bg-label-success">' . ($order->delivery_type == 'cash' ? 'Thanh toán khi nhận hàng' : 'Thanh toán bằng Swish') . '</span>';
            })
            ->addColumn('actions', function ($order) {
                return '
          <div class="d-inline-block text-nowrap">
            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
            <div class="dropdown-menu dropdown-menu-end m-0">
                <a href="' . route('dashboard.orders.orderDetail', $order->id) . '" class="dropdown-item">Sửa</a>
                  <form action="' . route('dashboard.permission.delete-permission', $order->id) . '" class="dropdown-item" method="POST" onsubmit="return confirm(\'Bạn có chắc chắn muốn xóa vĩnh viễn?\')">
                            ' . csrf_field() . '
                            <button type="submit" class="btn p-0 w-100 justify-content-start" >Xóa vĩnh viễn </button>
                        </form>
            </div>
        </div>';
            })


            ->rawColumns(['customer', 'created_at', 'quantity', 'total', 'status', 'delivery_type', 'actions'])
            ->make();
    }
    public function orderDetail(Order $order)
    {
        // dd($order);
        $products = OrderDetail::where('orderID', $order->id)->get();
        return view('admin.order.orderDetail', compact('order'));
    }
}
