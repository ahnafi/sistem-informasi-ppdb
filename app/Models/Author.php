<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        "name",
        "avatar",
        "bio"
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
