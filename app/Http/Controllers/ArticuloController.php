<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Categoria_Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticuloController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show','categorias_articulos');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        $categorias_articulos = Categoria_Articulo::all();
        return view('index', compact('articulos','categorias_articulos'));
    }

    public function show($id)
    {
        $nom_cat = Articulo::find($id)->value('nom_cat');
        $articulos = Articulo::limit(5)->where('nom_cat','=', $nom_cat)->get();
        $categorias_articulos = Categoria_Articulo::all();
        return view('articulos.articulo',['articulo'=>Articulo::find($id)],compact('articulos','categorias_articulos'));
    }

    public function categorias_articulos($nom_cat)
    {
        $categorias_articulos = Categoria_Articulo::all();
        $articulos = Articulo::where('nom_cat', '=', $nom_cat)->get();
        return view('articulos.categoria_articulo', compact('articulos','categorias_articulos'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        //
    }
}
