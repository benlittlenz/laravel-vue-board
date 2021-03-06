<?php

namespace App;

use App\User;
use App\Company;
use App\Project;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'phone',
        'address',
        'suburb',
        'city',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function projects() {
        return $this->BelongsToMany(Project::class)->withTimestamps();
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    // public function notesFromProjects()
    // {
    //     return $this->hasManyThrough(
    //         Note::class, Project::class
    //     );
    // }
}
