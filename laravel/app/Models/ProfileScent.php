<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileScent extends Model
{
    use HasFactory;

    protected $fillable = [
        'dominant_family',
        'preferred_intensity',
        'preferred_season',
        'vibe',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }
}
