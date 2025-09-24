<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhuongThucThanhToanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phuong_thuc_thanh_toans')->delete();
        DB::table('phuong_thuc_thanh_toans')->truncate();

        DB::table('phuong_thuc_thanh_toans')->insert([
            [
                'ten_phuong_thuc' => 'Tiền mặt',
                'mo_ta' => 'Thanh toán trực tiếp bằng tiền mặt',
            ],
            [
                'ten_phuong_thuc' => 'Chuyển khoản ngân hàng',
                'mo_ta' => 'Thanh toán qua Internet Banking hoặc Mobile Banking',
            ],
            [
                'ten_phuong_thuc' => 'Thẻ ATM',
                'mo_ta' => 'Thanh toán bằng thẻ ATM nội địa',
            ],
            [
                'ten_phuong_thuc' => 'Thẻ tín dụng',
                'mo_ta' => 'Thanh toán bằng thẻ Visa/Mastercard',
            ],
            [
                'ten_phuong_thuc' => 'Ví MoMo',
                'mo_ta' => 'Thanh toán qua ví điện tử MoMo',
            ],
            [
                'ten_phuong_thuc' => 'ZaloPay',
                'mo_ta' => 'Thanh toán qua ví điện tử ZaloPay',
            ],
            [
                'ten_phuong_thuc' => 'ShopeePay',
                'mo_ta' => 'Thanh toán qua ví điện tử ShopeePay',
            ],
            [
                'ten_phuong_thuc' => 'VNPay',
                'mo_ta' => 'Thanh toán qua cổng VNPay QR',
            ],
        ]);
    }
}
