<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Http\Requests\ServiciosRequest;
use Exception;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicio=Servicios::all();
        return view('servicios.Index',compact('servicio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.Create',compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiciosRequest $request)
    {
        try {
            $request->validated();
            $service = new servicios();
            $service ->Servicio = $request ->Servicio;
            $service->save();
            return redirect()->route('servicios.index')
            ->withadd('Se creo el producto correctamente');
        } catch (Exception $e) {
            return redirect()->route('products.create')
            ->witherrors('Ha ocurrido un error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicios $servicios)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicios $servicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicios $servicios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicios $servicios)
    {
        //
    }
}
