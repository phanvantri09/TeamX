<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'id_brand',
        'content',
        'name',
        'price',
    ];
    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

}
