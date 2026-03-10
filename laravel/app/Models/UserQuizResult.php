<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuizResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'score',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
