<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'progress',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }
}
