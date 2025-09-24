<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucGiaoDichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_muc_giao_diches')->delete();
        DB::table('danh_muc_giao_diches')->truncate();

        DB::table('danh_muc_giao_diches')->insert([
            // Chi tiêu
            [
                'ten_danh_muc' => 'Ăn uống',
                'loai_danh_muc' => 0, // Chi
                'id_nguoi_dung' => 0, // 0 = mặc định hệ thống
            ],
            [
                'ten_danh_muc' => 'Di chuyển',
                'loai_danh_muc' => 0,
                'id_nguoi_dung' => 0,
            ],
            [
                'ten_danh_muc' => 'Hóa đơn điện nước',
                'loai_danh_muc' => 0,
                'id_nguoi_dung' => 0,
            ],
            [
                'ten_danh_muc' => 'Mua sắm',
                'loai_danh_muc' => 0,
                'id_nguoi_dung' => 0,
            ],
            [
                'ten_danh_muc' => 'Giải trí',
                'loai_danh_muc' => 0,
                'id_nguoi_dung' => 0,
            ],

            // Thu nhập
            [
                'ten_danh_muc' => 'Lương',
                'loai_danh_muc' => 1, // Thu
                'id_nguoi_dung' => 0,
            ],
            [
                'ten_danh_muc' => 'Thưởng',
                'loai_danh_muc' => 1,
                'id_nguoi_dung' => 0,
            ],
            [
                'ten_danh_muc' => 'Kinh doanh',
                'loai_danh_muc' => 1,
                'id_nguoi_dung' => 0,
            ],
            [
                'ten_danh_muc' => 'Đầu tư',
                'loai_danh_muc' => 1,
                'id_nguoi_dung' => 0,
            ],
            [
                'ten_danh_muc' => 'Khác',
                'loai_danh_muc' => 1,
                'id_nguoi_dung' => 0,
            ],
        ]);
    }
}
