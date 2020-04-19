<?php

namespace App;

use App\User;
use App\Company;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = [
        'project_id',
        'user_id',
        'client_id',
        'body',
        'completed'
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
    
    public function clients()
    {
        return $this->belongsTo(Company::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
