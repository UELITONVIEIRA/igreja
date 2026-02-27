<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'preacher',
        'series',
        'description',
        'thumbnail_url',
        'video_url',
        'duration',
        'preached_at',
    ];

    protected function casts(): array
    {
        return [
            'preached_at' => 'date',
        ];
    }

    public function scopeLatestPreached($query)
    {
        return $query->orderBy('preached_at', 'desc');
    }

    public function scopeSearch($query, ?string $term)
    {
        if (! $term) {
            return $query;
        }

        return $query->where(function ($q) use ($term) {
            $q->where('title', 'like', "%{$term}%")
              ->orWhere('preacher', 'like', "%{$term}%")
              ->orWhere('series', 'like', "%{$term}%");
        });
    }
}
