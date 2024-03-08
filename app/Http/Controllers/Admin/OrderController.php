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
        $wait = Order::where('status', 0)->count();
        $complete = Order::where('status', 2)->count();
        $return = Order::where('status', 3)->count();
        $cancel = Order::where('status', 4)->count();
        return view('admin.order.index', compact('wait', 'complete', 'return', 'cancel'));
    }
    public function list(Request $request)
    {
        $orders = Order::select(['id', 'order_id', 'name', 'email', 'phone', 'address', 'total', 'quantity', 'status', 'delivery_type', 'created_at']);
        // Xử lý tìm kiếm theo email
        // Xử lý tìm kiếm theo email
        if ($request->has('search_email') && $request->search_email != null) {
            $email = $request->input('search_email');
            $orders->where('email', 'like', "%$email%");
        }

        // Xử lý tìm kiếm theo số điện thoại
        if ($request->has('search_phone') && $request->search_phone != null) {
            $phone = $request->input('search_phone');
            $orders->where('phone', 'like', "%$phone%");
        }
        if ($request->has('search_order_id') && $request->search_order_id != null) {
            $order_id = $request->input('search_order_id');
            $orders->where('order_id', 'like', "%$order_id%");
        }

        // Xử lý tìm kiếm theo trạng thái đơn hàng
        if ($request->has('search_status') && $request->search_status != null) {
            $status = $request->input('search_status');
            $orders->where('status', $status);
        }
        return DataTables::of($orders)
            ->editColumn('OrderID', function ($order) {
                return '   <a href="' . route('dashboard.orders.orderDetail', $order->id) . '" class="text-body text-truncate">
                        <span class="fw-medium">' . $order->order_id . '</span>
                    </a>';
            })
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
                </div>
            </div>';
            })
            ->editColumn('created_at', function ($order) {
                return '<p class="m-0">' . $order->created_at->format('d/m/Y') . '</p>
                <small>' . $order->created_at->format('h:i A') . '</small>';
            })
            ->editColumn('quantity', function ($order) {
                return '<strong class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="bx bx bx-package"></i></span>x' . $order->quantity . '</strong>';
            })
            ->editColumn('total', function ($order) {
                return '<strong class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="bx bx-money"></i></span>' . $order->total . '   Kr </strong>';
            })
            ->editColumn('status', function ($order) {
                if ($order->status == 0) {
                    return '<h6 class="mb-0 d-block text-warning"><i class="bx bxs-circle fs-tiny me-2"></i>Chờ xác nhận</h6>';
                } elseif ($order->status == 1) {
                    return '<h6 class="mb-0 d-block text-success"><i class="bx bxs-circle fs-tiny me-2"></i>Đang vận chuyển</h6>';
                } elseif ($order->status == 2) {
                    return '<h6 class="mb-0 d-block text-success"><i class="bx bxs-circle fs-tiny me-2"></i>Hoàn thành đơn hàng</h6>';
                } elseif ($order->status == 3) {
                    return '<h6 class="mb-0 d-block text-danger"><i class="bx bxs-circle fs-tiny me-2"></i>Hoàn trả</h6>';
                } elseif ($order->status == 4) {
                    return '<h6 class="mb-0 d-block text-danger"><i class="bx bxs-circle fs-tiny me-2"></i>Huỷ bỏ</h6>';
                }
                // return ';
            })
            ->editColumn('delivery_type', function ($order) {
                if ($order->delivery_type == 'cash') {
                    return '<span class="badge px-2 bg-label-success w-100" text-capitalized="">tiền mặt</span>';
                } elseif ($order->delivery_type == 'swish') {
                    return '<span class="badge px-2 bg-label-success w-100" text-capitalized="">Swish</span>';
                }
            })
            ->addColumn('actions', function ($order) {
                return '
          <div class="d-inline-block text-nowrap">
            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
            <div class="dropdown-menu dropdown-menu-end m-0">
                <a href="' . route('dashboard.orders.orderDetail', $order->id) . '" class="dropdown-item">Xem thêm</a>
                  <form action="' . (route('dashboard.orders.changeStatus', $order->id)) . '" class="dropdown-item" method="POST">
                        ' . csrf_field() . '
                        <input type="hidden" name="status" value="0">
                        <button type="submit" class="btn p-0 w-100 justify-content-start" >Chờ xác nhận </button>
                    </form>
                <form action="' . (route('dashboard.orders.changeStatus', $order->id)) . '" class="dropdown-item" method="POST">
                        ' . csrf_field() . '
                        <input type="hidden" name="status" value="1">
                        <button type="submit" class="btn p-0 w-100 justify-content-start" >Đang vận chuyển </button>
                    </form>
                <form action="' . (route('dashboard.orders.changeStatus', $order->id)) . '" class="dropdown-item" method="POST">
                        ' . csrf_field() . '
                        <input type="hidden" name="status" value="2">
                        <button type="submit" class="btn p-0 w-100 justify-content-start" >Hoàn thành đơn hàng </button>
                    </form>
                <form action="' . (route('dashboard.orders.changeStatus', $order->id)) . '" class="dropdown-item" method="POST">
                        ' . csrf_field() . '
                        <input type="hidden" name="status" value="3">
                        <button type="submit" class="btn p-0 w-100 justify-content-start" >Hoàn trả </button>
                    </form>
                <form action="' . (route('dashboard.orders.changeStatus', $order->id)) . '" class="dropdown-item" method="POST">
                        ' . csrf_field() . '
                        <input type="hidden" name="status" value="4">
                        <button type="submit" class="btn p-0 w-100 justify-content-start" >Huỷ bỏ </button>
                    </form>
            </div>
        </div>';
            })


            ->rawColumns(['OrderID', 'customer', 'created_at', 'quantity', 'total', 'status', 'delivery_type', 'actions'])
            ->make();
    }
    public function orderDetail(Order $order)
    {
        $products = OrderDetail::where('orderID', $order->id)->get();
        return view('admin.order.orderDetail', compact('order', 'products'));
    }
    public function changeStatus(Request $request, $id)
    {
        $status = $request->status;
        $check = Order::where('id', $id)->update(['status' => $status]);
        if ($check) {
            return back()->with('msgSuccess', 'Đổi trạng thái thành công');
        }
        return back()->with('msgError', 'Đổi trạng thái thất bại!');
    }
}
