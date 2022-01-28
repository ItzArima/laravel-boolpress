<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image'
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
