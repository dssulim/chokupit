<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShoppingList\StoreRequest;
use App\Models\Product;
use App\Models\ProductsShoppingList;
use App\Models\ShoppingList;
use Inertia\Inertia;

class ShoppingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppingLists = ShoppingList::where('owner_user_id', '=', auth()->id())
            ->orderBy('shopping_list_date', 'asc')
            ->get();

        $currentDay = date('Y-m-d');
        $lists = [];
        $dateList = [];

        foreach ($shoppingLists as $shoppingList => $value) {

            if ($currentDay > $value->shopping_list_date) {
                array_push($dateList, $value->shopping_list_date);
            } else {
                array_push($lists, $shoppingLists[$shoppingList]);
                array_push($dateList, $value->shopping_list_date);
            }
        }
        
        // dd([$lists, $shoppingLists, $dateList]);
        return Inertia::render('ShoppingList/Index', compact('lists', 'shoppingLists', 'dateList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->id();
        $lists = ShoppingList::where('owner_user_id', '=', auth()->id())->select('shopping_list_date')->get();

        $dateList = [];
        foreach($lists as $list => $value) {
            array_push($dateList, $value->list_data);
        }
        // $this->store();
        // dd([$user_id, $lists, $dateList]);
        return Inertia::render('ShoppingList/Create', compact('user_id', 'dateList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreRequest $request)
    public function store(StoreRequest $request)
    {
        // $currentDay = date('Y-m-d');
        // ShoppingList::create(['owner_user_id'=>1, 'shopping_list_date'=>$currentDay, 'list_name'=>'Тест 2', 'shop_id'=>'1']);
        ShoppingList::create($request->validated());
        
        return redirect(route('shoppingLists.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($shopping_list_id)
    {
        $productsShoppingList = ProductsShoppingList::where('shopping_list_id', '=', $shopping_list_id)->get();

        $lists=[];
        foreach ($productsShoppingList as $list) {
            array_push($lists, Product::where('id', '=', $list->product_id)->get());
        };
        dd($lists);

        // return Inertia::render('ShoppingList/Show', compact('lists'));
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
        //
    }
}
