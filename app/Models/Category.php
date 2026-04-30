<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Hapus use Illuminate\Support\Str; // Tidak diperlukan lagi

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // Hapus 'slug', // Hapus slug dari fillable
        'description'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke Post
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * HAPUS atau COMMENT bagian boot method ini
     * Karena kolom slug tidak ada di database
     */
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($category) {
    //         $category->slug = Str::slug($category->name);
    //     });

    //     static::updating(function ($category) {
    //         $category->slug = Str::slug($category->name);
    //     });
    // }

    /**
     * Get posts count attribute
     */
    public function getPostsCountAttribute()
    {
        return $this->posts()->where('status', 'published')->count();
    }

    /**
     * Get formatted created date
     */
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d M Y');
    }
}