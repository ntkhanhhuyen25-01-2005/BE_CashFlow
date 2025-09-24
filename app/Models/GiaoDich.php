<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiaoDich extends Model
{
    protected $table = 'giao_diches';
    protected $fillable = [
        'id_nguoi_dung',
        'id_vi_tai_khoan',
        'id_danh_muc',
        'id_phuong_thuc_thanh_toan',
        'loai_giao_dich',
        'so_tien',
        'ghi_chu',
        'ngay_giao_dich'
    ];
}
