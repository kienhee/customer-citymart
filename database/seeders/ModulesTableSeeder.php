<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'route' => 'users',
                'title' => 'Manage users',
                'description' => 'Quản lý người dùng',
                'created_at' => '2024-01-26 11:05:37',
                'updated_at' => '2024-01-26 11:05:37',
            ],
            [
                'route' => 'library',
                'title' => 'Library',
                'description' => 'Quản lý thư viện hình ảnh, video, tệp..v.v',
                'created_at' => '2024-01-26 11:06:26',
                'updated_at' => '2024-01-26 11:06:26',
            ],
            [
                'route' => 'permission',
                'title' => 'Roles',
                'description' => 'Phân quyền ứng dụng',
                'created_at' => '2024-01-26 11:07:09',
                'updated_at' => '2024-01-26 10:13:34',
            ],
            [
                'route' => 'settings',
                'title' => 'Settings',
                'description' => null,
                'created_at' => '2024-01-26 16:05:10',
                'updated_at' => '2024-01-26 16:05:10',
            ],
            [
                'route' => 'dashboard',
                'title' => 'Dashboard',
                'description' => null,
                'created_at' => '2024-01-26 16:08:38',
                'updated_at' => '2024-01-26 16:08:38',
            ],
        ];

        DB::table('modules')->insert($modules);
    }
}
