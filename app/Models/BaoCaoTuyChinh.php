<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaoCaoTuyChinh extends Model
{
    protected $table = 'bao_cao_tuy_chinhs';
    protected $fillable = [
        'id_nguoi_dung',
        'ten_bao_cao',
        'bo_loc'
    ];
}
