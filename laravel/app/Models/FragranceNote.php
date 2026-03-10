<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FragranceNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'fragrance_id',
        'note_id'
    ];

    public function fragrance()
    {
        return $this->belongsTo(Fragrance::class);
    }

    public function note()
    {
        return $this->belongsTo(Note::class);
    }
}
