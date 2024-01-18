<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accountdetail()
    {
        return $this->hasMany(AccountDetail::class);
    }

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function admin(): bool
    {
        return $this->type == 'admin';
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function audiomessage()
    {
        return $this->hasMany(AudioMessage::class);
    }

    public function herobanner()
    {
        return $this->hasMany(HeroBanner::class);
    }
}
