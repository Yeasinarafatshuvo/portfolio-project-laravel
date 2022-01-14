<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    //one to one relationship with reverse
    public function Profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'id');
    }


}
