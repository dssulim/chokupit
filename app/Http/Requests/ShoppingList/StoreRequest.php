<?php

namespace App\Http\Requests\ShoppingList;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(User $user) :array
    {
        return [
            'list_name' => ['required', 'string'],
            'owner_user_id' => ['required', 'integer'],
            'shopping_list_date' => ['string'],
            'shop_id' => ['integer']
        ];
    }
}
