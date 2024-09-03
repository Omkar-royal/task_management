<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'public.category';

    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function task(): HasMany
    {

        return $this->hasMany(Task::class, 'category_id', 'id');
    }
}
