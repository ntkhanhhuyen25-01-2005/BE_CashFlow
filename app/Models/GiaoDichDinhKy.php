<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiaoDichDinhKy extends Model
{
    protected $table = 'giao_dich_dinh_kies';
    protected $fillable = [
        'id_nguoi_dung',
        'id_danh_muc',
        'id_vi_tai_khoan',
        'so_tien',
        'tan_suat',
        'ngay_bat_dau',
        'ngay_ket_thuc'
    ];
}
