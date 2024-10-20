<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    protected $guarded = false;

    public function workers(): MorphToMany
    {
        return $this->morphedByMany(Worker::class, 'taggable');
    }

    public function clients(): MorphToMany
    {
        return $this->morphedByMany(Client::class, 'taggable');
    }


}
