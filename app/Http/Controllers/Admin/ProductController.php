<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $result = Product::query();

        if ($request->has('keywords') && $request->keywords != null) {
            $result
                ->where('name', 'like', '%' . $request->keywords . '%');
        }
        if ($request->has('category_id') && $request->category_id != null) {
            $result->where('category_id', '=', $request->category_id);
        }

        if ($request->has('sort') && $request->sort != null) {
            $result->orderBy('created_at', $request->sort);
        } else {
            $result->orderBy('created_at', 'desc');
        }
        if ($request->has('status') && $request->status != null && $request->status == 'active') {
            $result->where('deleted_at', '=', null);
        } elseif ($request->has('status') && $request->status != null && $request->status == 'inactive') {
            $result->onlyTrashed();
        } else {
            $result->withTrashed();
        }
        $products = $result->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        return view('admin.product.add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|max:255|unique:products,name',
            'description' => 'nullable|max:255',
            'content' => 'required',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric',
            'colors' => 'nullable',
            'sizes' => 'required',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric|max_digits:2',
            'images' => 'required'
        ], [
            'name.required' => 'Vui lòng nhập trường này!',
            'content.required' => 'Vui lòng nhập trường này!',
            'quantity.required' => 'Vui lòng nhập trường này!',
            'category_id.required' => 'Vui lòng nhập trường này!',
            'sizes.required' => 'Vui lòng nhập trường này!',
            'images.required' => 'Vui lòng thêm ảnh cho sản phẩm',
            'price.required' => 'Vui lòng nhập trường này!',
            'quantity.numeric' => 'Giá trị phải là số!',
            'category_id.numeric' => 'Giá trị phải là số!',
            'price.numeric' => 'Giá trị phải là số!',
            'discount.numeric' => 'Giá trị phải là số!',
            'name.max' => 'Tối đa :max kí tự',
            'description.max' => 'Tối đa :max kí tự',
            'discount.max_digits' => 'Tối đa :max_digits số',
            'tax.max_digits' => 'Tối đa :max_digits số',
            'name.unique' => 'Tên này đã được sử dụng',
        ]);
        $validate['slug'] = Str::slug($request->name);

        $check = Product::insert($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Thêm thành công');
        }
        return back()->with('msgError', 'Thêm thất bại!');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|max:255|unique:products,name,' . $id,

            'description' => 'nullable|max:255',
            'content' => 'required',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric',
            'colors' => 'nullable',
            'sizes' => 'required',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric|max_digits:2',
            'images' => 'required'
        ], [
            'name.required' => 'Vui lòng nhập trường này!',
            'content.required' => 'Vui lòng nhập trường này!',
            'quantity.required' => 'Vui lòng nhập trường này!',
            'category_id.required' => 'Vui lòng nhập trường này!',
            'sizes.required' => 'Vui lòng nhập trường này!',
            'images.required' => 'Vui lòng thêm ảnh cho sản phẩm',
            'price.required' => 'Vui lòng nhập trường này!',
            'quantity.numeric' => 'Giá trị phải là số!',
            'category_id.numeric' => 'Giá trị phải là số!',
            'price.numeric' => 'Giá trị phải là số!',
            'discount.numeric' => 'Giá trị phải là số!',
            'name.max' => 'Tối đa :max kí tự',
            'description.max' => 'Tối đa :max kí tự',
            'discount.max_digits' => 'Tối đa :max_digits số',
            'tax.max_digits' => 'Tối đa :max_digits số',
            'name.unique' => 'Tên này đã được sử dụng',

        ]);

        $validate['slug'] = Str::slug($request->name);

        $check = Product::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }

    public function softDelete($id)
    {
        $check =
            Product::destroy($id);
        if ($check) {
            return back()->with('msgSuccess', 'Đổi trạng thái thành công');
        }
        return back()->with('msgError', 'Đổi trạng thái thất bại!');
    }

    public function restore($id)
    {
        $check = Product::onlyTrashed()->where('id', $id)->restore();
        if ($check) {
            return back()->with('msgSuccess', 'Khôi phục dùng thành công');
        }
        return back()->with('msgError', 'Khôi phục dùng thất bại!');
    }

    public function forceDelete($id)
    {
        $check = Product::onlyTrashed()->where('id', $id)->forceDelete();
        if ($check) {
            return back()->with('msgSuccess', 'Xóa thành công');
        }
        return back()->with('msgError', 'Xóa thất bại!');
    }
}
