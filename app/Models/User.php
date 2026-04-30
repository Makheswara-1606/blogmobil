<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi dengan profile
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // Relasi dengan posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Accessor untuk foto profil
    public function getPhotoUrlAttribute()
    {
        if ($this->profile_photo && \Storage::disk('public')->exists($this->profile_photo)) {
            return asset('storage/' . $this->profile_photo);
        }
        
        return asset('img/default.png');
    }

    // Check if user has profile photo
    public function hasProfilePhoto()
    {
        return !empty($this->profile_photo);
    }

    // Get user initial for avatar
    public function getInitialAttribute()
    {
        return strtoupper(substr($this->name, 0, 1));
    }

    // Check if user is admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Check if user is blogger
    public function isBlogger()
    {
        return $this->role === 'blogger';
    }
}