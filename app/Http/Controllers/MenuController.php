<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Pagina principal

        $rest_id = $request->input('rest');

        $menuItems = menu::where('rest_id', $rest_id)->get();

        // dd($menuItems);

        return Inertia::render('Menu/index', compact('menuItems', 'rest_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Pagina formulario de create
        $rest_id = $request->input('rest');

        // dd($rest_id);

        return Inertia::render('Menu/add', compact('rest_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Metodo de crear menu item
        // validacion
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        // Si pasa validacion lo creamos
        $item = new menu();
        $item->rest_id = $request->input('rest');
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->type = 'food';
        $item->description = $request->input('description');
        $item->is_published = $request->input('isActive');
        $item->save();

        return redirect('/menu?rest=' . $request->input('rest'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        //
    }
}
