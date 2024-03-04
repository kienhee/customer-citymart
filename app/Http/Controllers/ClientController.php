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
        return view('client.index',compact('productsByCategory'));
    }
    public function shop()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
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
