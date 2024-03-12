<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;

class ClientController extends Controller
{
    public function index()
    {
        $categories = Category::where('category_id', "<>", 0)->get();
        $productsByCategory = [];
        $productSale = Product::where('discount', '>', 0)->orderBy('created_at', 'desc')->limit(10)->get();
        foreach ($categories as $category) {
            $products = Product::where('category_id', $category->id)->limit(10)->orderBy('created_at', 'desc')->get()->toArray();
            if (!empty($products)) {
                $productsByCategory[] = [
                    'category_name' => $category->name,
                    'products' => $products
                ];
            }
        }
        return view('client.index', compact('productsByCategory', 'productSale'));
    }
    public function shop(Request $request)
    {
        $result = Product::query();

        if ($request->has('category') && $request->category != null) {
            $category = Category::where('name', $request->category)->first();
            if (!$category) {
                abort(404);
            }
            $result->where('category_id', $category->id);
        }

        if ($request->has('search') && $request->search != null) {
            $result->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->has('color') && $request->color != null) {
            $result->where('colors', 'like', '%' . $request->color . '%');
        }
        if ($request->has('price') && $request->price != null) {
            $prices = explode('-', $request->price);

            // Lấy giá trị tối thiểu và tối đa của khoảng giá
            $minPrice = $prices[0];
            $maxPrice = $prices[1];

            // Tìm các sản phẩm có giá nằm trong khoảng giá đã chỉ định
            $result->where('price', '>=', $minPrice)
                ->where('price', '<=', $maxPrice);
        }

        if ($request->has('filter') && $request->filter != null) {
            $filter = $request->filter;
            if ($filter == "price(ASC)") {
                $result->orderBy('price', 'asc');
            } elseif ($filter == "price(DESC)") {
                $result->orderBy('price', 'desc');
            } elseif ($filter == "Sale") {
                $result->where('discount', '>', 0)->orderBy('discount', 'desc');
            } elseif ($filter == "Date") {
                $result->orderBy('created_at', 'asc');
            }
        }
        $products = $result->orderBy('created_at', 'desc')->paginate(20)->withQueryString();
        return view('client.shop', compact('products'));
    }
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if (!$product) {
            abort(404);
        }
        $ReletedProducts = Product::where('category_id', $product->category_id)->where('slug', '<>', $slug)->limit(10)->get();
        return view('client.product-detail', compact('product', 'ReletedProducts'));
    }
    public function getCart()
    {
        // Lấy giỏ hàng từ session
        $cart = Session::get('cart', []);

        return $cart;
    }
    public function addToCart(Request $request)
    {
        // Session::forget('cart');
        // Lấy dữ liệu sản phẩm từ session
        $product = Product::find($request->product_id);
        if (!$product) {
            return response()->json(['title' => __('Sản phẩm không tồn tại!'), 'message' => __('Vui lòng thử lại')], 404);
        }

        // Lấy giỏ hàng từ session, nếu không tồn tại thì tạo mới
        $cart = session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $productExists = false;
        foreach ($cart as $key => $item) {
            if ($item['product_id'] == $request->product_id && $item['size'] == $request->size && $item['color'] == $request->color) {
                // Nếu sản phẩm đã tồn tại, tăng số lượng lên
                $cart[$key]['quantity'] += $request->quantity;
                $productExists = true;
                break;
            }
        }

        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào giỏ hàng
        if (!$productExists) {
            $uuid = Uuid::uuid4();
            $cart[] = [
                'product_id' => $request->product_id,
                'uuid' => $uuid->toString(),
                'images' => $product->images,
                'name' => $product->name,
                'slug' => $product->slug,
                'price' => $product->price,
                'discount' => $product->discount,
                'size' => $request->size,
                'color' => $request->color,
                'quantity' => $request->quantity
            ];
        }

        // Lưu giỏ hàng vào session
        session()->put('cart', $cart);

        return response()->json(['title' => __('Đã thêm vào giỏ hàng!'), 'message' => __('Tiếp tục mua sắm')], 200);
    }
    public function handleActionsCart(Request $request)
    {
        $uuid = $request->uuid;
        $actions = $request->action;
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);
        // Tìm sản phẩm có UUID tương ứng trong giỏ hàng và tăng số lượng
        foreach ($cart as $key => $item) {
            if ($item['uuid'] === $uuid) {
                if ($actions == "incressQnt") {
                    $cart[$key]['quantity']++;
                } elseif ($actions == "decressQnt") {
                    $cart[$key]['quantity']--;
                } else {
                    unset($cart[$key]);
                }
                break;
            }
        }
        $cart = array_values($cart);
        // Lưu giỏ hàng vào session
        session()->put('cart', $cart);

        return response()->json(['title' => __('Đã thêm vào giỏ hàng!'), 'message' => __('Tiếp tục mua sắm'), 'data' => $cart], 200);
    }
    public function checkout()
    {
        $cart = Session::get('cart', []);
        if (calculateTotal($cart) == 0) {
            return redirect()->route('shop');
        }
        return view('client.checkout', compact('cart'));
    }
    public function handleCheckout(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
            'notes' => 'nullable',
            'delivery_type' => 'required',
            'order_id' => 'required',
        ], [
            'name.required' => 'Vui lòng nhập họ và tên đầy đủ.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.numeric' => 'Số điện thoại phải là số.',
            'delivery_type.required' => 'Vui lòng chọn phương thức thanh toán.',
            'order_id.required' => 'Vui lòng reload lại trang web.',
        ]);
        $cart = Session::get('cart', []);
        $quantity = 0;
        foreach ($cart as $item) {
            $quantity += $item['quantity'];
        }
        $data['total'] = calculateTotal($cart);
        $data['quantity'] = $quantity;

        $order = Order::create($data);
        if ($order) {
            $orderDetail = [];
            foreach ($cart as $item) {
                if ($item['discount'] > 0) {
                    $price = ((100 - $item['discount']) / 100) * $item['price'];
                } else {
                    $price = $item['price'];
                }
                $orderDetail[] = [
                    'orderID' => $order->id,
                    'productID' => $item['product_id'],
                    'size' => $item['size'],
                    'color' => $item['color'],
                    'quantity' => $item['quantity'],
                    'price' => $price
                ];
            }
            $checkProcess = OrderDetail::insert($orderDetail);
            if ($checkProcess) {
                Session::forget('cart');

                return redirect()->route('tracking', ['name' => $request->name, 'orderID' => $order->order_id, 'address' => $request->address, 'delivery_type' => $request->delivery_type]);
            }
        }
    }
    public function tracking(Request $request)
    {
        if (!$request->name || !$request->address || !$request->delivery_type || !$request->orderID) {
            return redirect()->route('shop');
        }
        return view('client.tracking');
    }
    public function news()
    {
        return view('client.news');
    }
    public function contact()
    {
        return view('client.contact');
    }
}
