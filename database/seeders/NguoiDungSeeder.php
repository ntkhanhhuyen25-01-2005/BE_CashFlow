<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nguoi_dungs')->delete();
        DB::table('nguoi_dungs')->truncate();
        DB::table('nguoi_dungs')->insert([
            [
                'ho_va_ten' => 'Nguyễn Văn An',
                'email' => 'an.nguyen@example.com',
                'so_dien_thoai' => '0912345678',
                'so_cccd' => '012345678901',
                'ngay_sinh' => '1990-03-15',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 1,
            ],
            [
                'ho_va_ten' => 'Trần Thị Bình',
                'email' => 'binh.tran@example.com',
                'so_dien_thoai' => '0987654321',
                'so_cccd' => '123456789012',
                'ngay_sinh' => '1992-07-21',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 1,
            ],
            [
                'ho_va_ten' => 'Lê Văn Cường',
                'email' => 'cuong.le@example.com',
                'so_dien_thoai' => '0901122334',
                'so_cccd' => '234567890123',
                'ngay_sinh' => '1988-11-02',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 1,
            ],
            [
                'ho_va_ten' => 'Phạm Thị Dung',
                'email' => 'dung.pham@example.com',
                'so_dien_thoai' => '0933221100',
                'so_cccd' => '345678901234',
                'ngay_sinh' => '1995-05-05',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 0,
            ],
            [
                'ho_va_ten' => 'Hoàng Văn Hưng',
                'email' => 'hung.hoang@example.com',
                'so_dien_thoai' => '0977554433',
                'so_cccd' => '456789012345',
                'ngay_sinh' => '1993-09-19',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 1,
            ],
            [
                'ho_va_ten' => 'Vũ Thị Lan',
                'email' => 'lan.vu@example.com',
                'so_dien_thoai' => '0966889900',
                'so_cccd' => '567890123456',
                'ngay_sinh' => '1998-12-30',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 1,
            ],
            [
                'ho_va_ten' => 'Đỗ Văn Minh',
                'email' => 'minh.do@example.com',
                'so_dien_thoai' => '0944112233',
                'so_cccd' => '678901234567',
                'ngay_sinh' => '1991-04-12',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 0,
            ],
            [
                'ho_va_ten' => 'Bùi Thị Ngọc',
                'email' => 'ngoc.bui@example.com',
                'so_dien_thoai' => '0955667788',
                'so_cccd' => '789012345678',
                'ngay_sinh' => '1996-08-25',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 1,
            ],
            [
                'ho_va_ten' => 'Nguyễn Văn Quang',
                'email' => 'quang.nguyen@example.com',
                'so_dien_thoai' => '0922998877',
                'so_cccd' => '890123456789',
                'ngay_sinh' => '1989-01-10',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 1,
            ],
            [
                'ho_va_ten' => 'Trần Thị Thu',
                'email' => 'thu.tran@example.com',
                'so_dien_thoai' => '0911002200',
                'so_cccd' => '901234567890',
                'ngay_sinh' => '1997-06-18',
                'mat_khau' => Hash::make('12345678'),
                'tinh_trang' => 0,
            ],
        ]);
    }
}
