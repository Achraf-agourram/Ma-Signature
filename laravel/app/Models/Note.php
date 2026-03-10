<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['note'];

    public function fragrances()
    {
        return $this->belongsToMany(Fragrance::class, 'fragrance_notes')->withPivot('type')->withTimestamps();
    }
}
