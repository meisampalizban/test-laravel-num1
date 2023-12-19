<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tabel_3 extends Model
{
    use HasFactory;
    protected $table = 'table_3';

    public function tb1(): BelongsTo
    {
        return $this->belongsTo(tabel_1::class,'plan_id','id');
    }
}
