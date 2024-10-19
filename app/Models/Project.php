<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $table = 'projects';

    protected $guarded = false;

    public function workers(): BelongsToMany
    {
        return $this->belongsToMany(Worker::class, 'project_workers', 'project_id', 'worker_id');
    }
}
