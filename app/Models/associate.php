<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class associate extends Model
{
    use HasFactory;

    public function sons(){
        return $this->hasMany(son::class);

    }
}
