<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MembersOfShoppingList extends Model
{
    use HasFactory;

    protected $table = "members_of_shopping_list";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'shopping_list_id',
        'user_id',
    ];

    public function shopping_list_id(): HasMany
	{
		return $this->HasMany(ShoppingList::class, 'id', 'shopping_list_id');
	}
    
    public function user_id(): HasMany
	{
		return $this->HasMany(User::class, 'id', 'user_id');
	}
}
