<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "is_published",
        "views_count",
        "slug",
        "author_id",
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'author_id')->first();
    }
}
