<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserRoles extends Model
{
    use HasFactory;

    protected $table = "user_roles";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_roles_name',
        'user_roles_description',
        'created_at',
        'updated_at',
    ];
}
