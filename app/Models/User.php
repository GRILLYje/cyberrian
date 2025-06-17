<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image',
        'is_banned',
        'is_locked',
        'timeout_until',
    ];

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
            'timeout_until' => 'datetime',
        ];
    }

    public function isBanned(): bool
    {
        return (bool) $this->is_banned;
    }

    public function isLocked(): bool
    {
        return (bool) $this->is_locked;
    }

    public function isTimedOut(): bool
    {
        return $this->timeout_until && $this->timeout_until->isFuture();
    }

    public function ban()
    {
        $this->update(['is_banned' => true]);
    }

    public function unban()
    {
        $this->update(['is_banned' => false]);
    }

    public function lock()
    {
        $this->update(['is_locked' => true]);
    }

    public function unlock()
    {
        $this->update(['is_locked' => false]);
    }

    public function setTimeout($duration = '1 day')
    {
        $this->update(['timeout_until' => now()->add($duration)]);
    }

    public function clearTimeout()
    {
        $this->update(['timeout_until' => null]);
    }
}
