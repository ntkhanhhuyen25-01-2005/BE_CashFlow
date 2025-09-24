<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NganSachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ngan_saches')->delete();
        DB::table('ngan_saches')->truncate();

        DB::table('ngan_saches')->insert([
            [
                'id_nguoi_dung' => 1,
                'id_danh_muc' => 1, // Ăn uống
                'han_muc' => 3000000,
                'thang_nam' => '2025-09-01',
            ],
            [
                'id_nguoi_dung' => 1,
                'id_danh_muc' => 2, // Di chuyển
                'han_muc' => 1000000,
                'thang_nam' => '2025-09-01',
            ],
            [
                'id_nguoi_dung' => 2,
                'id_danh_muc' => 3, // Hóa đơn
                'han_muc' => 2000000,
                'thang_nam' => '2025-09-01',
            ],
            [
                'id_nguoi_dung' => 2,
                'id_danh_muc' => 4, // Mua sắm
                'han_muc' => 1500000,
                'thang_nam' => '2025-09-01',
            ],
            [
                'id_nguoi_dung' => 3,
                'id_danh_muc' => 5, // Giải trí
                'han_muc' => 1200000,
                'thang_nam' => '2025-09-01',
            ],
            [
                'id_nguoi_dung' => 3,
                'id_danh_muc' => 1, // Ăn uống
                'han_muc' => 2500000,
                'thang_nam' => '2025-10-01',
            ],
            [
                'id_nguoi_dung' => 4,
                'id_danh_muc' => 2, // Di chuyển
                'han_muc' => 900000,
                'thang_nam' => '2025-10-01',
            ],
            [
                'id_nguoi_dung' => 4,
                'id_danh_muc' => 3, // Hóa đơn
                'han_muc' => 1800000,
                'thang_nam' => '2025-10-01',
            ],
            [
                'id_nguoi_dung' => 5,
                'id_danh_muc' => 4, // Mua sắm
                'han_muc' => 2000000,
                'thang_nam' => '2025-10-01',
            ],
            [
                'id_nguoi_dung' => 5,
                'id_danh_muc' => 5, // Giải trí
                'han_muc' => 1500000,
                'thang_nam' => '2025-10-01',
            ],
        ]);
    }
}
