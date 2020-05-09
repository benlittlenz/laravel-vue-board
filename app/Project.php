<?php

namespace App;

use App\User;
use App\Timer;
use App\Client;
use App\Company;
use App\JobContacts;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'company_id',
        'client_id',
        'title',
        'description'
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function notes()
    {
        return $this->hasMany(Project::class, 'project_id')->orderBy('updated_at', 'desc');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function timers()
    {
        return $this->hasMany(Timer::class);
    }

    public function jobContacts()
    {
        return $this->hasMany(JobContacts::class);
    }
}
