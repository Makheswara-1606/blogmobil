<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'status',
        'views',
        'user_id',
        'category_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Generate slug otomatis
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $slugBase = Str::slug($post->title);
            $slug = $slugBase;
            $i = 1;
            
            while (static::where('slug', $slug)->exists()) {
                $slug = $slugBase . '-' . $i++;
            }
            
            $post->slug = $slug;
        });
    }

    /**
     * Scope untuk posts yang published
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Get excerpt dari content
     */
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->content), 150);
    }

    /**
     * Get readable time
     */
    public function getReadableTimeAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}