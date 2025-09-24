<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NganSach extends Model
{
    protected $table = 'ngan_saches';
    protected $fillable = [
        'id_nguoi_dung',
        'id_danh_muc',
        'han_muc',
        'thang_nam'
    ];
}
