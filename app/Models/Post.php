<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'body',
        'publishment',
        'category'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCoverUrlAttribute()
    {
        $mediaItems = $this->getFirstMediaUrl('cover');

        if ($mediaItems) {
            return $mediaItems;
        } else {
            return asset('img/default.jpg');
        }
    }

    public function scopeFilter($query, $params)
    {
        $query->where(function ($query) use ($params) {
            if (@$params['search']) {
                $query->where('name', 'like', '%' . $params['search'] . '%');
            }
            if (@$params['publishment']) {
                $query->where('publishment', $params['publishment']);
            }

            if (@$params['category'] != "" && @$params['category'] != "semua-artikel") {
                $query->whereRelation('category', 'slug', $params['category']);
            }
        });
    }
}
