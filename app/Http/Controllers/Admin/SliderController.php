<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::where('id', 1)->first();

        return view('admin.slider.index', compact('sliders'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'images' => 'required'
        ], [
            'images.required' => 'Vui lòng thêm ảnh!',
        ]);
       
        $check = Slider::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }

   
}
