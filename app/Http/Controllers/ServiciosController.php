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
        return view('servicios.Create');
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
    public function edit($id)
    {
        //
        $servicios=Servicios::find($id);
        return view('servicios.Edit',compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiciosRequest $request, int $serviciosId)
    {
        //
        try {
            $service=Servicios::find($serviciosId);
            $service ->Servicio = $request ->Servicio;
            $service->save();
            return redirect()->route('servicios.index')
            ->withadd('Se creo el producto correctamente');
        } catch (Exception $e) {
            return redirect()->route('servicios.create')
            ->witherrors('Ha ocurrido un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $serviciosId)
    {
        //
        $servicio=Servicios::find($serviciosId);
        $servicio->delete();
        return redirect('/servicios');
    }
}
