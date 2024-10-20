<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $guarded = false;

    public function boss(): HasOneThrough
    {
        return $this->hasOneThrough(Worker::class, Position::class, 'department_id', 'position_id', 'id', 'id')
            ->where('position_id', 4);
    }

    public function workers(): hasManyThrough
    {
        return $this->hasManyThrough(Worker::class, Position::class, 'department_id', 'position_id', 'id', 'id');
    }
}
