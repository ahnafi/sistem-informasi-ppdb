<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends Model
{
    use softDeletes;

    protected $fillable = [
        "title",
        "slug",
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
