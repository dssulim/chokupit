<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserShops extends Model
{
    use HasFactory;

    protected $table = "user_shops";

    protected $fillable = [
        'user_id',
        'shop_id',
    ];

    public function user_id(): HasMany
	{
		return $this->hasMany(User::class);
	}
    
    public function shop_id(): HasMany
	{
		return $this->shop_id(Shop::class);
	}
}