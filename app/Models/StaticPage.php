<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;
    
    protected $fillable = ['slug', 'name', 'description', 'featured_image', 'meta_title', 'meta_description'];
}
