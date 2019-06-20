<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Compra;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarroController extends Controller
{

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $articulos = Articulo::all();
        $categorias_articulos = Categoria_Articulo::all();

        $compra = new Compra();
        $compra->id_user = Auth::id();
        $compra->id_art = $request->get('id_art');
        $compra->nom_art = Articulo::find($request->get('id_art'))->value('nom_art');
        $compra->img = Articulo::find($request->get('id_art'))->value('img');
        $compra->precio = Articulo::find($request->get('id_art'))->value('precio');

        $user = Auth::user();
        $user->carcompras()->save($compra);

        return redirect()->route('carro', compact('compra','categorias_articulos'));
    }
    
    public function delete($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();

        return redirect()->route('carro');
    }

    public function show(Carro $carro)
    {
        //
    }


    public function edit(Carro $carro)
    {
        //
    }


    public function update(Request $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        //
    }
}
