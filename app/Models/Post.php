<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'body',
        'author'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->name);
    }

    public function tag()
    {
        // 1 post may have tags
        // any tag may be applied to many posts
        return $this->belongsToMany(Tag::class,'blog_tag', 'id_blog', 'id_tag');
    } 
}
