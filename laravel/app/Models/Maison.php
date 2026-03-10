<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    use HasFactory;

    protected $fillable = ['maison'];

    public function fragrances()
    {
        return $this->hasMany(Fragrance::class);
    }
}
