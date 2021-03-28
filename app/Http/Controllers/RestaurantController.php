<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Primera vista
        // Traemos los restaurantes q hemos creado... por mi usuario.
        $userID = Auth::user()->id;
        $rests = restaurant::where('owner_id', $userID)->get();

        return Inertia::render('Restaurants/index', compact('rests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Metodo para crear rest
        return Inertia::render('Restaurants/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Entrada de data
        // $params = $request->all();
        // dd($params);

        $request->validate([
            'name' => 'required',
            'open' => 'required',
            'close' => 'required'
        ]);

        $rest = new restaurant();
        $rest->owner_id = Auth::user()->id;
        $rest->name = $request->input('name');
        $rest->open = $request->input('open');
        $rest->close = $request->input('close');
        $rest->multi_location = $request->input('isActive');

        $rest->save();

        return redirect('/restaurant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(restaurant $restaurant)
    {
        // para ver los restaurantes
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(restaurant $restaurant)
    {
        //
    }


    public function showClient($restaurant)
    {
        # para mostrar restaurante a cliente...
        $rest = restaurant::findOrFail($restaurant);

        $items = $rest->menuItems;

        return Inertia::render('Restaurants/public', compact('rest', 'items'));
    }
}
