<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiaoDichDinhKySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('giao_dich_dinh_kies')->delete();
        DB::table('giao_dich_dinh_kies')->truncate();

        DB::table('giao_dich_dinh_kies')->insert([
            [
                'id_nguoi_dung' => 1,
                'id_danh_muc' => 3, // Hóa đơn điện nước
                'id_vi_tai_khoan' => 2,
                'so_tien' => 750000,
                'tan_suat' => 'hang_thang',
                'ngay_bat_dau' => '2025-01-01',
                'ngay_ket_thuc' => null,
            ],
            [
                'id_nguoi_dung' => 2,
                'id_danh_muc' => 5, // Giải trí
                'id_vi_tai_khoan' => 3,
                'so_tien' => 200000,
                'tan_suat' => 'hang_tuan',
                'ngay_bat_dau' => '2025-02-01',
                'ngay_ket_thuc' => null,
            ],
            [
                'id_nguoi_dung' => 3,
                'id_danh_muc' => 4, // Mua sắm
                'id_vi_tai_khoan' => 1,
                'so_tien' => 500000,
                'tan_suat' => 'hang_thang',
                'ngay_bat_dau' => '2025-03-01',
                'ngay_ket_thuc' => '2025-12-31',
            ],
            [
                'id_nguoi_dung' => 4,
                'id_danh_muc' => 1, // Ăn uống
                'id_vi_tai_khoan' => 5,
                'so_tien' => 1000000,
                'tan_suat' => 'hang_thang',
                'ngay_bat_dau' => '2025-04-01',
                'ngay_ket_thuc' => null,
            ],
            [
                'id_nguoi_dung' => 5,
                'id_danh_muc' => 2, // Di chuyển
                'id_vi_tai_khoan' => 4,
                'so_tien' => 300000,
                'tan_suat' => 'hang_thang',
                'ngay_bat_dau' => '2025-05-01',
                'ngay_ket_thuc' => '2026-05-01',
            ],
            [
                'id_nguoi_dung' => 1,
                'id_danh_muc' => 6, // Lương (thu nhập định kỳ)
                'id_vi_tai_khoan' => 2,
                'so_tien' => 15000000,
                'tan_suat' => 'hang_thang',
                'ngay_bat_dau' => '2025-01-31',
                'ngay_ket_thuc' => null,
            ],
            [
                'id_nguoi_dung' => 2,
                'id_danh_muc' => 7, // Thưởng (tạm xem là định kỳ)
                'id_vi_tai_khoan' => 3,
                'so_tien' => 1000000,
                'tan_suat' => 'hang_quy',
                'ngay_bat_dau' => '2025-01-01',
                'ngay_ket_thuc' => null,
            ],
            [
                'id_nguoi_dung' => 3,
                'id_danh_muc' => 8, // Kinh doanh
                'id_vi_tai_khoan' => 1,
                'so_tien' => 5000000,
                'tan_suat' => 'hang_thang',
                'ngay_bat_dau' => '2025-06-01',
                'ngay_ket_thuc' => null,
            ],
            [
                'id_nguoi_dung' => 4,
                'id_danh_muc' => 9, // Đầu tư
                'id_vi_tai_khoan' => 5,
                'so_tien' => 2000000,
                'tan_suat' => 'hang_thang',
                'ngay_bat_dau' => '2025-07-01',
                'ngay_ket_thuc' => null,
            ],
            [
                'id_nguoi_dung' => 5,
                'id_danh_muc' => 10, // Khác
                'id_vi_tai_khoan' => 4,
                'so_tien' => 800000,
                'tan_suat' => 'hang_tuan',
                'ngay_bat_dau' => '2025-08-01',
                'ngay_ket_thuc' => '2025-12-31',
            ],
        ]);
    }
}
