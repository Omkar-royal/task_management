<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Priority extends Model
{
    use HasFactory;

    protected $table = 'public.priority';

    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function task(): HasMany
    {

        return $this->hasMany(Task::class, 'priority_id', 'id');
    }
}
