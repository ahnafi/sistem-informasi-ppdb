<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes, HasFactory;
    
    protected $fillable = [
        "title",
        "slug",
        "content",
        "thumbnail",
        "is_featured",
        "author_id",
        "category_id"
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function banner(): HasOne
    {
        return $this->hasOne(Banner::class);
    }

    public function getContentAttribute($value)
    {
        // Proses konten jika diperlukan
        // Misalnya, jika ada format khusus dari editor Trix yang perlu dikonversi
        return $value;
    }
}
