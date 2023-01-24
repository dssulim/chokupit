<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;
use App\Models\ShoppingList;

class ProductsShoppingList extends Model
{
    use HasFactory;

    protected $table = "product_shopping_list";
    
    public $timestamps = false;

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

    public function shoppingList(): HasMany
	{
		return $this->HasMany(ShoppingList::class,  'shopping_list_id', 'id');
	}

    public function product(): HasMany
	{
		return $this->HasMany(Product::class);
	}
}
