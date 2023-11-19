<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        'total'
    ];
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id');
    }
    public function services(): HasOne
    {
        return $this->hasOne(Service::class, 'id');
    }
}
