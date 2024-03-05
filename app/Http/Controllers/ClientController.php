<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('client.product-detail', compact('product'));
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
