<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductShop extends Model
{
    use HasFactory;

    protected $table = "product_shops";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'shop_id',
    ];

    public function product_id(): HasMany
	{
		return $this->HasMany(Product::class);
	}

    public function shop_id(): HasMany
	{
		return $this->HasMany(Shop::class);
	}
}
