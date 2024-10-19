<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Department extends Model
{
    protected $table = 'departments';

    protected $guarded = false;

    public function boss(): HasOneThrough
    {
        return $this->hasOneThrough(Worker::class, Position::class, 'department_id', 'position_id', 'id', 'id')
            ->where('position_id', 4);
    }
}
