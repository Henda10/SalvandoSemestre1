<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Http\Requests\CategoriasRequest;
use Illuminate\Http\Request;
use Exception;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria =Categorias::paginate(10);
        return view('categorias.index',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validated();
            $categoria =new Categorias();
            $categoria->Categoria=$request->input('Categoria');
            $categoria->save();
            return redirect()->route('categorias.create')
            ->withadd('Cliente Creado');
        }catch (Exception $e){
            return redirect()->route('categorias.create')
            -> withadd('Hay un error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorias $categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorias $categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categorias)
    {
        //
    }
}
