<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // esta tabla es polimorfica
    public function commentable()
    {
        return $this->morphTo();
    }

    //relación uno a muchos (invertida)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
