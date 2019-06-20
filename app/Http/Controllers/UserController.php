<?php

namespace App\Http\Controllers;

use App\User;
use App\Compra;
use App\Articulo;
use App\Categoria_Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
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

    public function compras()
    {
        $categorias_articulos = Categoria_Articulo::all();

        $user_id = Auth::id();
        $user = Auth::user();
        $compras = Compra::where('id_user', '=', $user_id)->get();
        return view('user.carro', compact('compras', 'user','categorias_articulos'));
    }

    public function edit(User $user)
    {
        return view('user.edit');
    }

    public function update(Request $request,$id)
    {
        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();
        $user = Auth::user($id);
        $user->name = $request->get('username');
        $user->email = $request->get('email');
        $user->dni = $request->get('dni');
        $user->ruc = $request->get('ruc');
        $user->dir = $request->get('dir');
        $user->cel = $request->get('cel');
        $user->ciudad = $request->get('ciudad');
        $user->save();
        return redirect('home');

    }

    public function destroy($id)
    {
        $user = Auth::user($id);
        $user->delete();
        return redirect('home');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

}
