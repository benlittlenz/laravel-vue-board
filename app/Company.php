<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function notes()
    {
        return $this->hasMany(Project::class, 'project_id')->orderBy('updated_at', 'desc');
    }

    public function items()
    {
        return $this->hasMany(Item::class)->orderBy('created_at', 'desc');
    }
}
