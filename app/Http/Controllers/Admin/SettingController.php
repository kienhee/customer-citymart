<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::where('id', 1)->first();
        return view('admin.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->isCalendar == 'on' ? $request['isCalendar'] = 1 : $request['isCalendar'] = 0;
        $request->isKanban == 'on' ? $request['isKanban'] = 1 : $request['isKanban'] = 0;
        $data = $request->validate([
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'isCalendar' => 'nullable|boolean',
            'isKanban' => 'nullable|boolean',
        ], [
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'phone.string' => 'Số điện thoại phải là chuỗi.',
            'address.string' => 'Địa chỉ phải là chuỗi.',
            'facebook.url' => 'Địa chỉ Facebook không hợp lệ.',
            'twitter.url' => 'Địa chỉ Twitter không hợp lệ.',
            'instagram.url' => 'Địa chỉ Instagram không hợp lệ.',
            'linkedin.url' => 'Địa chỉ LinkedIn không hợp lệ.',
            'isCalendar.boolean' => 'Trường lịch là kiểu boolean.',
            'isKanban.boolean' => 'Trường Kanban là kiểu boolean.',
        ]);

        $check = Setting::where('id', 1)->update($data);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }
}
