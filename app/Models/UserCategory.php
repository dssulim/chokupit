<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserCategory extends Model
{
    use HasFactory;

    protected $table = "user_categories";

    protected $fillable = [
        'user_id',
        'category_id',
    ];

    public function user_id(): HasMany
	{
		return $this->HasMany(User::class);
	}

    public function category_id(): HasMany
	{
		return $this->HasMany(Categories::class);
	}
}
