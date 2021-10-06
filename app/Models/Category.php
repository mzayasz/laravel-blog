<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //relación uno a muchos

    public function posts()
    {
        $this->hasMany(Post::class);
    }
}
