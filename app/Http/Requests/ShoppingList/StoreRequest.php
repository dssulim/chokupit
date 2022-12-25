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
            'name' => ['required', 'string'],
            'user_id' => ['required', 'integer'],
            'list_data' => ['string']
        ];
    }
}
