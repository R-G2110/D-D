<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    public function characters(){
        return $this->hasMany(Character::class);
    }

    protected $fillable = [
        'name',
        'description',
        'Mod_FOR',
        'Mod_DES',
        'Mod_COS',
        'Mod_INT',
        'Mod_SAG',
        'Mod_CAR'
    ];
}
