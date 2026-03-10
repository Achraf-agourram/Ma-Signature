<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'type',
        'quiz_id',
        'admin_id'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class, 'question_id');
    }
}
