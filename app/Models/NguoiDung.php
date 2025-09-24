<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    protected $table = 'nguoi_dungs';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'so_cccd',
        'ngay_sinh',
        'mat_khau',
        'tinh_trang',
        'hash_active',
        'hash_block',
        'hash_reset'
    ];
}
