<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongBao extends Model
{
    protected $table = 'thong_baos';
    protected $fillable = [
        'ma_nguoi_dung',
        'tieu_de',
        'noi_dung',
        'da_doc'
    ];
}
