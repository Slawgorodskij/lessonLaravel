<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];
    public function news(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(News::class);
    }
}
