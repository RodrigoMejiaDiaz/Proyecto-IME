<?php

namespace App\Http\Controllers;

use App\Categoria_Articulo;
use App\Articulo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Categoria_Articulo  $categoria_Articulo
     * @return \Illuminate\Http\Response
     */

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
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria_Articulo  $categoria_Articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria_Articulo $categoria_Articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria_Articulo  $categoria_Articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria_Articulo $categoria_Articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria_Articulo  $categoria_Articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria_Articulo $categoria_Articulo)
    {
        //
    }
}
