<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'public.roles';

    protected $guarded = ['id', 'created_at', 'updated_at'];
    const ADMIN_ROLE_ID = 2;
    const USER_ROLE_ID = 1;

}
