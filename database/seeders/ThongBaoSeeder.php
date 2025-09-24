<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThongBaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thong_baos')->delete();
        DB::table('thong_baos')->truncate();

        DB::table('thong_baos')->insert([
            [
                'ma_nguoi_dung' => 1,
                'tieu_de' => 'Nhắc hạn mức chi tiêu',
                'noi_dung' => 'Bạn đã sử dụng 80% hạn mức chi tiêu cho danh mục Ăn uống trong tháng 9.',
                'da_doc' => false,
            ],
            [
                'ma_nguoi_dung' => 1,
                'tieu_de' => 'Lương tháng 8 đã được ghi nhận',
                'noi_dung' => 'Khoản thu nhập từ Lương tháng 8 đã được thêm vào ví Vietcombank.',
                'da_doc' => true,
            ],
            [
                'ma_nguoi_dung' => 2,
                'tieu_de' => 'Khoản nợ sắp đến hạn',
                'noi_dung' => 'Khoản vay 10.000.000 VND từ Ngân hàng sẽ đến hạn vào 15/12/2025.',
                'da_doc' => false,
            ],
            [
                'ma_nguoi_dung' => 2,
                'tieu_de' => 'Chi tiêu lớn bất thường',
                'noi_dung' => 'Hệ thống ghi nhận giao dịch chi tiêu 5.000.000 VND từ ví MoMo.',
                'da_doc' => false,
            ],
            [
                'ma_nguoi_dung' => 3,
                'tieu_de' => 'Thông báo báo cáo tài chính',
                'noi_dung' => 'Báo cáo chi tiêu tháng 8 đã sẵn sàng để xem.',
                'da_doc' => true,
            ],
            [
                'ma_nguoi_dung' => 3,
                'tieu_de' => 'Nhắc trả góp laptop',
                'noi_dung' => 'Khoản trả góp laptop 1.000.000 VND/tháng đến hạn ngày 15/09/2025.',
                'da_doc' => false,
            ],
            [
                'ma_nguoi_dung' => 4,
                'tieu_de' => 'Thu nhập từ kinh doanh',
                'noi_dung' => 'Bạn vừa nhận 5.000.000 VND từ danh mục Kinh doanh.',
                'da_doc' => true,
            ],
            [
                'ma_nguoi_dung' => 4,
                'tieu_de' => 'Giao dịch giải trí',
                'noi_dung' => 'Bạn đã chi 200.000 VND cho Giải trí ngày 11/09/2025.',
                'da_doc' => false,
            ],
            [
                'ma_nguoi_dung' => 5,
                'tieu_de' => 'Nợ quá hạn',
                'noi_dung' => 'Khoản vay nóng 2.000.000 VND đã quá hạn từ 20/08/2025.',
                'da_doc' => false,
            ],
            [
                'ma_nguoi_dung' => 5,
                'tieu_de' => 'Thông báo đăng nhập',
                'noi_dung' => 'Tài khoản của bạn vừa đăng nhập lúc 08:15 từ thiết bị mới.',
                'da_doc' => true,
            ],
        ]);
    }
}
