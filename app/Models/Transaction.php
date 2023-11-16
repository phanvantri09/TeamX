<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';

    protected $fillable = [
        'id_service',
        'id_user',
        'status',
        'img',
        'type',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'id_user');
    }
}
