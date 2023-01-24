<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\UserProducts;
use App\Models\ProductsShoppingList;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',
    ];

    public function userProducts() : BelongsTo
    {
        return $this->belongsTo(UserProducts::class);
    }

    public function productsShoppingList() : BelongsTo
    {
        return $this->belongsTo(ProductsShoppingList::class);
    }
}
