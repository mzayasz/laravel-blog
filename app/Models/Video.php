<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //relación uno a muchos (inversa)

    public function user()
    {
        $this->belongsTo(User::class);
    }

}
