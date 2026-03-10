<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fragrance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'intensity',
        'season',
        'vibe',
        'image',
        'description',
        'maison_id'
    ];

    public function maison()
    {
        return $this->belongsTo(Maison::class);
    }

    public function notes()
    {
        return $this->belongsToMany(Note::class, 'fragrance_notes')->withPivot('type')->withTimestamps();
    }

    public function families()
    {
        return $this->belongsToMany(FragranceFamily::class, 'fragrance_fragrance_family');
    }

    public function swipes()
    {
        return $this->hasMany(Swipe::class);
    }

    public function status()
    {
        return $this->hasMany(UserFragranceStatus::class);
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }

    public function collections()
    {
        return $this->hasMany(UserCollection::class);
    }
}
