<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class QuanTriVien extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'quan_tri_vien';
    protected $fillable = [
        'ten_tai_khoan',
        'mat_khau',
        'ten',
        'vai_tro_id',
        'email',
        'sdt',
        'hinh_dai_dien',
        'bi_khoa'
    ];
    protected $hidden = ['mat_khau'];

}
