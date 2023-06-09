<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'description'];

    public function posts(): HasMany 
    {
        return $this->hasMany(Post::class);
    }
}
