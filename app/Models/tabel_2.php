<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tabel_2 extends Model
{
    use HasFactory;
    protected $table='table_2';

    public function tb1(): BelongsTo
    {
        return $this->belongsTo(tabel_1::class);
    }
}
