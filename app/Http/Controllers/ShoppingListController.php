<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShoppingList\StoreRequest;
use App\Models\Product;
use App\Models\ProductsShoppingList;
use App\Models\ShoppingList;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        // $user = User::find(1);
        // $userRoleId = $userRole->user_role_id();
        // dd($user->userRole->user_role_description);


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
        
        return Inertia::render('ShoppingList/Create', compact('user_id', 'dateList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
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
        $shoppingListID = $shopping_list_id;
        $shoplist = ShoppingList::where('id', $shopping_list_id)->first();

        if ($shoplist->owner_user_id != auth()->id()){
            abort(404);
        }else{
            $productsShoppingList = ProductsShoppingList::where('shopping_list_id', '=', $shopping_list_id)->get();

            $productlist=[];
            foreach ($productsShoppingList as $list) {
                $products = Product::where('id', '=', $list->product_id)->get();
                foreach ($products as $product) {
                    array_push($productlist, $product);
                };
            };
        };

        return Inertia::render('ShoppingList/Show', compact('productlist', 'shoppingListID'));
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
    public function destroy($shopping_list_id)
    {
        $shoppingListID = $shopping_list_id;
        $shoplist = ShoppingList::find($shoppingListID);
        $shoplist->delete();

        return redirect(route('shoppingLists.index'));
    }
}
