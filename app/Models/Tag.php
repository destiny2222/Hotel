<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','slug'
    ];

    public function getSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    

    public function blogs()
    {
        // 1 post may have tags
        // any tag may be applied to many posts
        return $this->belongsToMany(Blog::class,'blog_tag', 'id_blog', 'id_tag');
    } 

    public function getRouteKeyName()
    {
        return 'name';
    }
}
