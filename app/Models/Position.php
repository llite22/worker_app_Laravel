<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $guarded = false;

    public function workers(): HasMany
    {
        return $this->hasMany(Worker::class, 'position_id', 'id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function ageWorker(): HasOne
    {
        return $this->hasOne(Worker::class)->ofMany('age', 'min');
    }

    public function surnameWorker(): HasOne
    {
        return $this->hasOne(Worker::class)->where('surname', 'Doe');
    }

}
