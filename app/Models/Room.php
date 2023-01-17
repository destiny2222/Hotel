<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'price',
        'cover_image',
        'name',
        'slug',
        'images',
        'discription',
        'status',
    ];

    // public function booking(){
    //     $this->belongsTo(Booking::class);
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->name);
    }

    protected $casts = [
        // 'images' => 'array'
    ];

           //mutator
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }
    //accessor
    public function getImagesAttribute($value)
    {
        return json_decode($value);
    }
}
