<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "ADDRESS",
        "date_of_birth",
        "place_of_birth",
        "phone_of_birth",
        "martial_status",
        "username",
        "last_degree",
        "gender"
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
        'password' => 'hashed',
    ];
    public function jobs()
    {
        return $this->hasMany(job::class, 'employer_id', 'id');
    }
    public function applications()
    {
        return $this->hasMany(application::class, 'user_id', 'id');
    }
    public function company()
    {
        return $this->hasOne(company::class, 'user_id', 'id');
    }
}