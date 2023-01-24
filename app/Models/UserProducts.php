<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\Product;

class UserProducts extends Model
{
    use HasFactory;

    protected $table = "user_products";

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function user(): HasOne
	{
		return $this->HasOne(User::class);
	}

    public function product(): HasOne
	{
		return $this->HasOne(Product::class);
	}
}