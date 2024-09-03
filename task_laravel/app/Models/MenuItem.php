<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{
    use HasFactory;

    
    protected $table = 'public.menu_item';

    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function role(): BelongsTo
    {
        return  $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
