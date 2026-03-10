<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FragranceFamily extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function fragrances()
    {
        return $this->belongsToMany(Fragrance::class, 'fragrance_fragrance_family');
    }
}
