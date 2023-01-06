<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductsCategory extends Model
{
    use HasFactory;

    protected $table = "product_categories";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'category_id',
    ];

    public function product_id(): HasMany
	{
		return $this->HasMany(Product::class);
	}

    public function category_id(): HasMany
	{
		return $this->HasMany(Categories::class);
	}
}
