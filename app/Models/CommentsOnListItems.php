<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class CommentsOnListItems extends Model
{
    use HasFactory;

    protected $table = "comments_on_list_items";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'shopping_list_id',
        'product_id',
        'commentstor_user_id',
        'text',
        'created_at',
        'updated_at',
    ];

    public function shopping_list_id(): HasOne
	{
		return $this->HasOne(ShoppingList::class, 'id', 'shopping_list_id');
	}

    public function product_id(): HasOne
	{
		return $this->HasOne(Products::class);
	}

    public function commentstor_user_id(): HasOne
	{
		return $this->HasOne(User::class);
	}
}
