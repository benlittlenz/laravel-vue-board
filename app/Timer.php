<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'project_id',
        'stopped_at',
        'started_at'
    ];

    protected $dates = ['started_at', 'stopped_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scopeRunning($query)
    {
        return $query->whereNull('stopped_at');
    }
}
