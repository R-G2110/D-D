<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'height',
        'weight',
        'background',
        'armor_class',
        'FOR',
        'DES',
        'COS',
        'INT',
        'SAG',
        'CAR',
        'image',
        'slug',
    ];
}
