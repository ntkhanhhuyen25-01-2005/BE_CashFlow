<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DinhKemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dinh_kems')->delete();
        DB::table('dinh_kems')->truncate();

        DB::table('dinh_kems')->insert([
            [
                'id_giao_dich' => 1,
                'ten_file' => 'hoa_don_cafe.jpg',
                'duong_dan_file' => 'uploads/dinhkem/hoa_don_cafe.jpg',
            ],
            [
                'id_giao_dich' => 2,
                'ten_file' => 'bien_nhan_grab.png',
                'duong_dan_file' => 'uploads/dinhkem/bien_nhan_grab.png',
            ],
            [
                'id_giao_dich' => 3,
                'ten_file' => 'hoa_don_dien.pdf',
                'duong_dan_file' => 'uploads/dinhkem/hoa_don_dien.pdf',
            ],
            [
                'id_giao_dich' => 4,
                'ten_file' => 'don_hang_shopee.jpg',
                'duong_dan_file' => 'uploads/dinhkem/don_hang_shopee.jpg',
            ],
            [
                'id_giao_dich' => 5,
                'ten_file' => 've_xem_phim.pdf',
                'duong_dan_file' => 'uploads/dinhkem/ve_xem_phim.pdf',
            ],
            [
                'id_giao_dich' => 6,
                'ten_file' => 'bang_luong_thang8.xlsx',
                'duong_dan_file' => 'uploads/dinhkem/bang_luong_thang8.xlsx',
            ],
            [
                'id_giao_dich' => 7,
                'ten_file' => 'thuong_du_an.pdf',
                'duong_dan_file' => 'uploads/dinhkem/thuong_du_an.pdf',
            ],
            [
                'id_giao_dich' => 8,
                'ten_file' => 'chuyen_khoan_kinh_doanh.jpg',
                'duong_dan_file' => 'uploads/dinhkem/chuyen_khoan_kinh_doanh.jpg',
            ],
            [
                'id_giao_dich' => 9,
                'ten_file' => 'bao_cao_dau_tu.docx',
                'duong_dan_file' => 'uploads/dinhkem/bao_cao_dau_tu.docx',
            ],
            [
                'id_giao_dich' => 10,
                'ten_file' => 'phu_huynh_gui_tien.jpg',
                'duong_dan_file' => 'uploads/dinhkem/phu_huynh_gui_tien.jpg',
            ],
        ]);
    }
}
