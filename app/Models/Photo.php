<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $fillable = [
        'name',
        'detail',
        'image'
    ];

    public function home()
    {
        return $this->hasMany(Post::class, 'hero_img', 'id');
    }
}
