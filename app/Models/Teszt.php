<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teszt extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
                'kerdes',
                'v1',
                'v2',
                'v3',
                'v4',
                'helyes',
                'kategoriaId'
    ];
}
