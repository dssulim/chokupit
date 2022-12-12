<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ShoppingList extends Model
{
    use HasFactory;

    protected $table = "shopping_list";

    protected $fillable = [
        'owner_user_id',
        'list_name',
        'shopping_list_date',
        'shop_id',
        'created_at',
        'updated_at',
    ];

    public function owner_user_id(): HasOne
	{
		return $this->hasOne(User::class, 'id', 'owner_user_id');
	}

    public function shop_id(): HasOne
	{
		return $this->hasOne(Shop::class);
	}
}
