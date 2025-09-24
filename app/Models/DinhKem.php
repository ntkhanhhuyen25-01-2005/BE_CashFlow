<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DinhKem extends Model
{
    protected $table = 'dinh_kems';
    protected $fillable = [
        'id_giao_dich',
        'ten_file',
        'duong_dan_file'
    ];
}
