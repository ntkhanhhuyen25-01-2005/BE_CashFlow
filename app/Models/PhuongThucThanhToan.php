<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhuongThucThanhToan extends Model
{
    protected $table = 'phuong_thuc_thanh_toans';
    protected $fillable = [
        'ten_phuong_thuc',
        'mo_ta'
    ];
}
