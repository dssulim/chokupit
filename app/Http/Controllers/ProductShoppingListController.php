<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductsShoppingList;
use App\Http\Controllers\ShoppingListController;
use App\Models\Product;
use App\Http\Requests\ProductShoppingList\StoreRequest;
use Illuminate\Http\Request;

class ProductShoppingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $product = Product::create($request->validated());
        $shopping_list_id = $request->only('shopping_list_id');
        
        $product->ProductsShoppingList()->create(['product_id'=>$product->id,'shopping_list_id'=>$shopping_list_id['shopping_list_id'], 'status'=>'0']);

        return redirect(route('shoppingLists.show', $shopping_list_id['shopping_list_id']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procuct = Product::find($id);

        ProductsShoppingList::where('shopping_list_id', $procuct->productsShoppingList->shopping_list_id)
        ->where('product_id', $id)->delete();
        
        $procuct->delete();
        
        return redirect(route('productShoppingList.index'));
    }
}
