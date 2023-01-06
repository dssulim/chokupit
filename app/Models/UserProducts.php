<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserProducts extends Model
{
    use HasFactory;

    protected $table = "user_products";

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function user_id(): HasMany
	{
		return $this->HasMany(User::class);
	}

    public function product_id(): HasMany
	{
		return $this->HasMany(Product::class);
	}
}