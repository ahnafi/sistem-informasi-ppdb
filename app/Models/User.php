<?php

namespace App\Models;

use BezhanSalleh\FilamentShield\Support\Utils;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, HasPanelShield;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'email_verified_at'
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
        ];
    }

//    protected static function booted(): void
//    {
//        if (config('filament-shield.writer_user.enabled', false)) {
//            FilamentShield::createRole(name: config('filament-shield.writer_user.name', 'writer_user'));
//            static::created(function ($user) {
//                $user->assignRole(config('filament-shield.writer_user.name', 'writer_user'));
//            });
//            static::deleted(function ($user) {
//                $user->removeRole(config('filament-shield.writer_user.name', 'writer_user'));
//            });
//        }
//    }
    protected static function booted(): void
    {
        if (Utils::isSuperAdminEnabled()) {
            static::created(function ($user) {
                $user->assignRole(Utils::getSuperAdminName());
            });
            static::deleted(function ($user) {
                $user->removeRole(Utils::getSuperAdminName());
            });
        }
    }

    /**
     * @throws \Exception
     */
    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === "admin") {
            return $this->hasRole(Utils::getSuperAdminName());
        } else if ($panel->getId() === "writer") {
            return $this->hasRole(Utils::getSuperAdminName()) || $this->hasRole(config("filament-shield.writer_user.name", "writer_user"));
        } else {
            return false;
        }
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
