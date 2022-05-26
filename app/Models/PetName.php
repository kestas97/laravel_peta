<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetName extends Model
{
    use HasFactory;

    public function petData()
    {
        return $this->hasOne(PetData::class, 'pet_id', 'id');
    }
}
