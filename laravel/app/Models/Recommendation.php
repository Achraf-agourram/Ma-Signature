<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'score',
        'profile_scent_id',
        'fragrance_id'
    ];

    public function profileScent()
    {
        return $this->belongsTo(ProfileScent::class);
    }

    public function fragrance()
    {
        return $this->belongsTo(Fragrance::class);
    }
}
