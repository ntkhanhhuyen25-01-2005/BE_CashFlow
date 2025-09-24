<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoanNoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khoan_nos')->delete();
        DB::table('khoan_nos')->truncate();

        DB::table('khoan_nos')->insert([
            [
                'id_nguoi_dung' => 1,
                'ten_khoan_no' => 'Vay bạn bè',
                'so_tien_no' => 2000000,
                'ngay_vay' => '2025-08-01',
                'ngay_tra_du_kien' => '2025-09-01',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Mượn tiền ăn cưới',
                'trang_thai' => 0, // Đang nợ
            ],
            [
                'id_nguoi_dung' => 2,
                'ten_khoan_no' => 'Vay ngân hàng',
                'so_tien_no' => 10000000,
                'ngay_vay' => '2025-07-15',
                'ngay_tra_du_kien' => '2025-12-15',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Khoản vay tiêu dùng',
                'trang_thai' => 0,
            ],
            [
                'id_nguoi_dung' => 3,
                'ten_khoan_no' => 'Mua trả góp điện thoại',
                'so_tien_no' => 8000000,
                'ngay_vay' => '2025-06-10',
                'ngay_tra_du_kien' => '2025-12-10',
                'ngay_tra_thuc_te' => '2025-08-20',
                'ghi_chu' => 'Đã tất toán sớm',
                'trang_thai' => 1, // Đã trả hết
            ],
            [
                'id_nguoi_dung' => 4,
                'ten_khoan_no' => 'Mượn tiền đồng nghiệp',
                'so_tien_no' => 500000,
                'ngay_vay' => '2025-07-01',
                'ngay_tra_du_kien' => '2025-07-30',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Chưa trả, quá hạn',
                'trang_thai' => 2, // Quá hạn
            ],
            [
                'id_nguoi_dung' => 5,
                'ten_khoan_no' => 'Nợ tiền nhà',
                'so_tien_no' => 3000000,
                'ngay_vay' => '2025-08-05',
                'ngay_tra_du_kien' => '2025-09-05',
                'ngay_tra_thuc_te' => '2025-09-02',
                'ghi_chu' => 'Đã thanh toán',
                'trang_thai' => 1,
            ],
            [
                'id_nguoi_dung' => 1,
                'ten_khoan_no' => 'Vay mua xe máy',
                'so_tien_no' => 15000000,
                'ngay_vay' => '2025-01-01',
                'ngay_tra_du_kien' => '2025-12-01',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Đang trả góp hàng tháng',
                'trang_thai' => 0,
            ],
            [
                'id_nguoi_dung' => 2,
                'ten_khoan_no' => 'Mượn người thân',
                'so_tien_no' => 4000000,
                'ngay_vay' => '2025-05-20',
                'ngay_tra_du_kien' => '2025-08-20',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Chưa trả',
                'trang_thai' => 2,
            ],
            [
                'id_nguoi_dung' => 3,
                'ten_khoan_no' => 'Trả góp laptop',
                'so_tien_no' => 12000000,
                'ngay_vay' => '2025-04-15',
                'ngay_tra_du_kien' => '2026-04-15',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Trả góp 12 tháng',
                'trang_thai' => 0,
            ],
            [
                'id_nguoi_dung' => 4,
                'ten_khoan_no' => 'Vay nóng',
                'so_tien_no' => 2000000,
                'ngay_vay' => '2025-08-10',
                'ngay_tra_du_kien' => '2025-08-20',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Quá hạn chưa trả',
                'trang_thai' => 2,
            ],
            [
                'id_nguoi_dung' => 5,
                'ten_khoan_no' => 'Vay học phí',
                'so_tien_no' => 6000000,
                'ngay_vay' => '2025-09-01',
                'ngay_tra_du_kien' => '2026-03-01',
                'ngay_tra_thuc_te' => null,
                'ghi_chu' => 'Đang chờ trả',
                'trang_thai' => 0,
            ],
        ]);
    }
}
