<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductsShoppingList extends Model
{
    use HasFactory;

    protected $table = "product_shopping_list";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'shopping_list_id',
        'product_id',
        'status',
    ];

    public function shopping_list_id(): HasMany
	{
		return $this->HasMany(ShoppingList::class);
	}

    public function product_id(): HasMany
	{
		return $this->HasMany(Product::class);
	}
}
