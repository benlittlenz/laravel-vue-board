<?php

namespace App;

use App\User;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
}
