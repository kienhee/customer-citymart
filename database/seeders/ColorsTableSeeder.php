<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Chạy các seed cho cơ sở dữ liệu.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            ['name' => 'Đỏ', 'code' => '#FF0000'],
            ['name' => 'Xanh lá', 'code' => '#00FF00'],
            ['name' => 'Xanh dương', 'code' => '#0000FF'],
            ['name' => 'Vàng', 'code' => '#FFFF00'],
            ['name' => 'Cam', 'code' => '#FFA500'],
            ['name' => 'Tím', 'code' => '#800080'],
            ['name' => 'Hồng', 'code' => '#FFC0CB'],
            ['name' => 'Nâu', 'code' => '#A52A2A'],
            ['name' => 'Đen', 'code' => '#000000'],
            ['name' => 'Trắng', 'code' => '#FFFFFF'],
            // Thêm nhiều màu khác nếu cần
        ];

        // Chèn dữ liệu vào bảng 'colors'
        DB::table('colors')->insert($colors);
    }
}
