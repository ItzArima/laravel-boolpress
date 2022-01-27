<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'qty',
        'category_id'
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
