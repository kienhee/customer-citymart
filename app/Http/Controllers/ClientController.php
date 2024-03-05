<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        foreach ($categories as $category) {
            $products = Product::where('category_id', $category->id)->limit(10)->orderBy('created_at', 'desc')->get()->toArray();
            if (!empty($products)) {
                $productsByCategory[] = [
                    'category_name' => $category->name,
                    'products' => $products
                ];
            }
        }
        return view('client.index', compact('productsByCategory'));
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


        $products = $result->orderBy('created_at', 'desc')->paginate(10);
        return view('client.shop', compact('products'));
    }
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
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
            return response()->json(['title' => 'Sản phẩm không tồn tại!', 'message' => 'Vui lòng thử lại'], 404);
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

        return response()->json(['title' => 'Đã thêm vào giỏ hàng!', 'message' => 'Tiếp tục mua sắm'], 200);
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

        return response()->json(['title' => 'Xoá thành công!', 'message' => 'Tiếp tục mua sắm'], 200);
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
