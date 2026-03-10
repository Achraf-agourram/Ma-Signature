<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
    ];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'client_id');
    }

    public function createdQuestions()
    {
        return $this->hasMany(QuizQuestion::class, 'admin_id');
    }

    public function quizResult()
    {
        return $this->hasOne(UserQuizResult::class, 'client_id');
    }

    public function profileScent()
    {
        return $this->hasOne(ProfileScent::class, 'client_id');
    }

    public function swipes()
    {
        return $this->hasMany(Swipe::class, 'client_id');
    }

    public function preferences()
    {
        return $this->hasMany(UserPreference::class, 'client_id');
    }

    public function fragranceStatuses()
    {
        return $this->hasMany(UserFragranceStatus::class, 'client_id');
    }

    public function collections()
    {
        return $this->hasMany(UserCollection::class, 'client_id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'client_id');
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
