<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMucGiaoDich extends Model
{
    protected $table = 'danh_muc_giao_diches';
    protected $fillable = [
        'ten_danh_muc',
        'loai_danh_muc',
        'id_nguoi_dung'
    ];
}
