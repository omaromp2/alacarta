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
    public function index()
    {
        // Pagina principal
        $menuItems = menu::all();

        return Inertia::render('Menu/index', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Pagina formulario de create
        return Inertia::render('Menu/add');
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
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->type = 'food';
        $item->description = $request->input('description');
        $item->is_published = $request->input('isActive');
        $item->save();

        return redirect('/menu');
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
