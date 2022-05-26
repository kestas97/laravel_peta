<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetData extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->hasMany(PetStatus::class, 'id', 'status_id');
    }

    public function petName()
    {
        return $this->hasMany(PetName::class, 'id', 'pet_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
