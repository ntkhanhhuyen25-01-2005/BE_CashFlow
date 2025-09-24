<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhoanNo extends Model
{
    protected $table = 'khoan_nos';
    protected $fillable = [
        'id_nguoi_dung',
        'ten_khoan_no',
        'so_tien_no',
        'ngay_vay',
        'ngay_tra_du_kien',
        'ngay_tra_thuc_te',
        'ghi_chu',
        'trang_thai'
    ];
}
