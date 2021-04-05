<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $user_id = Auth::user()->id;
        // $rests = restaurant::where('owner_id', $userID)->paginate(2);
        // $rests = restaurant::where('owner_id', $userID)->get();

        // dd($rests);

        return Inertia::render('Restaurants/index', compact('user_id'));
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
            'close' => 'required',
        ]);

        $rest = new restaurant();
        $rest->owner_id = Auth::user()->id;
        $rest->name = $request->input('name');
        $rest->open = $request->input('open');
        $rest->close = $request->input('close');
        $rest->multi_location = $request->input('isActive');

        $rest->save();

        // $request->session()->flash('msg', 'Restaurant created.');

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
        dd($restaurant);
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

    public function showClient($restaurant, Request $request)
    {
        # para mostrar restaurante a cliente...

        $rest = restaurant::findOrFail($restaurant);

        // $items = ($request->input('filter')) ? $rest->menuItems
        // ->where('is_published', 1)
        // ->where('type', $request->input('filter'))
        // :
        // $rest->menuItems->where('is_published', 1) ;

        $filter = $request->input('filter');

        if ($filter) {
            # Si hay filtro ...

            if ($filter == 'all') {
                # code...
                $items = $rest->menuItems->where('is_published', 1);
            } else {
                # code...
                $items = $rest->menuItems
                    ->where('is_published', 1)
                    ->where('type', $request->input('filter'));
            }
        } else {
            # no hay filtro...
            $items = $rest->menuItems->where('is_published', 1);
        }

        // dd($items);

        $types = $items->pluck('type', 'type');
        $types->push('all');

        return Inertia::render('Restaurants/public', compact('rest', 'items', 'types'));
    }

    public function generateQR($rest)
    {
        # generamos el qr del rest...
        // dd($rest);
        return QrCode::size(300)->generate('https://8affc5dd75b2.ngrok.io/rest/' . $rest);
    }

    public function getRest($user_id)
    {
        # code...
        // dd($user_id);
        $rests = restaurant::where('owner_id', $user_id)->paginate(2);

        return $rests;
    }
}
