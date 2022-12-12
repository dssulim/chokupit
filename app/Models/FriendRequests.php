<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FriendRequests extends Model
{
    use HasFactory;

    protected $table = "friend_requests";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'initiator_user_id',
        'starget_user_id',
        'status',
        'created_at',
        'updated_at',
    ];

    public function initiator_user_id(): HasMany
	{
		return $this->hasMany(User::class, 'id', 'initiator_user_id');
	}

    public function starget_user_id(): HasMany
	{
		return $this->hasMany(User::class, 'id', 'starget_user_id');
	}
}
