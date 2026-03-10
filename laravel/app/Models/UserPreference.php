<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight',
        'answer_id',
        'client_id'
    ];

    public function answer()
    {
        return $this->belongsTo(QuizAnswer::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
