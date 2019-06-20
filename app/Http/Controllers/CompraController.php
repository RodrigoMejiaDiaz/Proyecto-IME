<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Articulo;
use App\Categoria_Articulo;
use App\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $categorias_articulos = Categoria_Articulo::all();

        $compra = new Compra();
        $compra->id_user = Auth::id();
        $compra->id_art = $request->get('id_art');
        $compra->estado = 'Seleccionado';
        $compra->nom_art = $request->get('nom_art');
        $compra->img = $request->get('img');
        $compra->precio = $request->get('precio');

        $user = Auth::user();
        $user->compras()->save($compra);

        return redirect()->route('carro');
    }


    public function show(Compra $compra)
    {
        //
    }


    public function edit(Compra $compra)
    {
        //
    }

 
    public function update(Request $request, Compra $compra)
    {
        //
    }



}
