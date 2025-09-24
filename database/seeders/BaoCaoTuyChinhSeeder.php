<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaoCaoTuyChinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bao_cao_tuy_chinhs')->delete();
        DB::table('bao_cao_tuy_chinhs')->truncate();

        DB::table('bao_cao_tuy_chinhs')->insert([
            [
                'id_nguoi_dung' => 1,
                'ten_bao_cao' => 'Chi tiêu tháng 9/2025',
                'bo_loc' => json_encode([
                    'tu_ngay' => '2025-09-01',
                    'den_ngay' => '2025-09-30',
                    'loai' => 'chi_tieu'
                ]),
            ],
            [
                'id_nguoi_dung' => 1,
                'ten_bao_cao' => 'Thu nhập từ lương 2025',
                'bo_loc' => json_encode([
                    'tu_ngay' => '2025-01-01',
                    'den_ngay' => '2025-12-31',
                    'ma_danh_muc' => [6] // danh mục lương
                ]),
            ],
            [
                'id_nguoi_dung' => 2,
                'ten_bao_cao' => 'Chi tiêu theo ví MoMo',
                'bo_loc' => json_encode([
                    'ma_vi' => [1], // ví MoMo
                    'loai' => 'chi_tieu'
                ]),
            ],
            [
                'id_nguoi_dung' => 2,
                'ten_bao_cao' => 'Tổng kết thu nhập & chi tiêu Quý 3/2025',
                'bo_loc' => json_encode([
                    'tu_ngay' => '2025-07-01',
                    'den_ngay' => '2025-09-30',
                ]),
            ],
            [
                'id_nguoi_dung' => 3,
                'ten_bao_cao' => 'Báo cáo chi phí học tập',
                'bo_loc' => json_encode([
                    'ma_danh_muc' => [11], // ví dụ: học phí
                    'loai' => 'chi_tieu'
                ]),
            ],
        ]);
    }
}
