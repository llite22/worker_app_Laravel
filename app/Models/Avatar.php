<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Avatar extends Model
{
    protected $guarded = false;

    public function avatarable(): MorphTo
    {
        return $this->morphTo();
    }
}
