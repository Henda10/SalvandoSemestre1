<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;
use App\Http\Requests\PedidosRequest;
use App\Models\Clientes;
use App\Models\Servicios;
use Exception;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos=Pedidos::with('Clientes')->get();
        $pedidos=Pedidos::with('servicios')->get();
        $pedidos=Pedidos::paginate(10);
        return view('pedidos.Index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes=Clientes::all();
        $servicios=Servicios::all();
        return view('pedidos.create', compact('clientes', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedidosRequest $request)
    {
         try {
            $request->validated();
            $service = new Pedidos();
            $service->Descripcion = $request->input('Descripcion');
            $service->PrecioDelivery = $request->input('PrecioDelivery');
            $service->Estado = $request->input('Estado');
            $service->fk_clientes = $request->input('Cliente');
            $service->fk_servicios = $request->input('Servicio');
            $service->save();
            return redirect()->route('pedidos.index')
                ->withadd('Usuario Creado');
        } catch (Exception $e) {
            return redirect()->route('pedidos.create')
                ->withadd('Hay un error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $clientes=Clientes::all();
        $servicios=Servicios::all();
        $pedidos=Pedidos::find($id);
        return view('pedidos.edit', compact('clientes', 'servicios', 'pedidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PedidosRequest $request, int $pedidosId)
    {
        //
        try {
            $pedidos=Pedidos::find($pedidosId);
            $pedidos->Descripcion = $request->input('Descripcion');
            $pedidos->PrecioDelivery = $request->input('PrecioDelivery');
            $pedidos->Estado = $request->input('Estado');
            $pedidos->fk_clientes = $request->input('Cliente');
            $pedidos->fk_servicios = $request->input('Servicio');
            $pedidos->save();
            return redirect()->route('pedidos.index')
                ->withadd('Usuario Creado');
        } catch (Exception $e) {
            return redirect()->route('pedidos.create')
                ->withadd('Hay un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $pedidosId)
    {
        //
        $pedidos=Pedidos::find($pedidosId);
        $pedidos->delete();
        return redirect('/pedidos');
    }
}
