<?php

namespace App;

use App\Company;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class JobContacts extends Model
{
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

        public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
