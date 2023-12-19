<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class tabel_1 extends Model
{
    use HasFactory;
    protected $table='table_1';

    public function data_tbl_2(): HasOne
    {
        return $this->hasOne(tabel_2::class,'id');
    }

    public function data_tbl_3(): HasOne
    {
        return $this->hasOne(tabel_3::class,'id');
    }
}
