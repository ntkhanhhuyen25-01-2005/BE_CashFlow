<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vi_tai_khoans')->delete();
        DB::table('vi_tai_khoans')->truncate();

        DB::table('vi_tai_khoans')->insert([
            [
                'ten_vi' => 'Ví MoMo',
                'so_tai_khoan' => '0901234567',
                'so_du' => 2500000.00,
                'thu_tu_sap_xep' => 1,
            ],
            [
                'ten_vi' => 'Ngân hàng Vietcombank',
                'so_tai_khoan' => '0011001234567',
                'so_du' => 12000000.00,
                'thu_tu_sap_xep' => 2,
            ],
            [
                'ten_vi' => 'Ngân hàng BIDV',
                'so_tai_khoan' => '2151005678901',
                'so_du' => 8500000.00,
                'thu_tu_sap_xep' => 3,
            ],
            [
                'ten_vi' => 'Ví ZaloPay',
                'so_tai_khoan' => '0978123456',
                'so_du' => 500000.00,
                'thu_tu_sap_xep' => 4,
            ],
            [
                'ten_vi' => 'Ngân hàng Techcombank',
                'so_tai_khoan' => '19034567890123',
                'so_du' => 4500000.00,
                'thu_tu_sap_xep' => 5,
            ],
            [
                'ten_vi' => 'Ngân hàng Agribank',
                'so_tai_khoan' => '3101234567890',
                'so_du' => 10000000.00,
                'thu_tu_sap_xep' => 6,
            ],
            [
                'ten_vi' => 'Ví ShopeePay',
                'so_tai_khoan' => '0987123456',
                'so_du' => 300000.00,
                'thu_tu_sap_xep' => 7,
            ],
            [
                'ten_vi' => 'Ngân hàng ACB',
                'so_tai_khoan' => '164123456789',
                'so_du' => 7600000.00,
                'thu_tu_sap_xep' => 8,
            ],
            [
                'ten_vi' => 'Ngân hàng MB Bank',
                'so_tai_khoan' => '9704221234567890',
                'so_du' => 5600000.00,
                'thu_tu_sap_xep' => 9,
            ],
            [
                'ten_vi' => 'Tiền mặt',
                'so_tai_khoan' => 'CASH-001',
                'so_du' => 2000000.00,
                'thu_tu_sap_xep' => 10,
            ],
        ]);
    }
}
