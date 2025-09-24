<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViTaiKhoan extends Model
{
    protected $table = 'vi_tai_khoans';
    protected $fillable = [
        'ten_vi',
        'so_tai_khoan',
        'so_du',
        'thu_tu_sap_xep'
    ];
}
