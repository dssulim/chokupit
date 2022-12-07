<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Catalog\StoreRequest;
use App\Models\Catalog;
use Inertia\Inertia;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::where('user_id', '=', auth()->id())
            ->orderBy('list_data', 'asc')
                ->get();

        $currentDay = date('Y-m-d');
        $lists = [];
        $dateList = [];

        foreach($catalogs as $catalog => $value) {
            
            if($currentDay > $value->list_data) {
               array_push($dateList, $value->list_data);
            } else {
                array_push($lists, $catalogs[$catalog]);
                array_push($dateList, $value->list_data);
            }
        }
        return Inertia::render('Catalogs/Index', compact('lists', 'catalogs', 'dateList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->id();
        return Inertia::render('Catalogs/Create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request) 
    {   
        $currentDay = date('Y-m-d');

        if($request->list_data < $currentDay) {

           return redirect(route('catalogs.create'))->with('message', $request->list_data);
        };
        
        Catalog::create($request->validated());
        return redirect(route('catalogs.index'));
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
        //
    }
}
