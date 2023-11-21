<?php

namespace App\Http\Controllers;

use App\Models\Motos;
use Illuminate\Http\Request;
use App\Http\Requests\MotosRequest;
use Exception;

class MotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos=Motos::paginate(15);
        return view('Motos.Index',compact('motos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Motos.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MotosRequest $request)
    {
        try{
            $request->validated();
            $moto =new Motos();
            $moto->Marca=$request->input('Marca');
            $moto->Modelo=$request->input('Modelo');
            $moto->NumeroChasis=$request->input('NumeroChasis');
            $moto->Matricula=$request->input('Matricula');
            $moto->save();
            return redirect()->route('Motos.index')
            ->withadd('Moto añadida');
        }catch (Exception $e){
            return redirect()->route('Motos.index')
            -> withadd('Hay un error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Motos $motos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $motos=Motos::find($id);
        return view('Motos.Edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MotosRequest $request, Motos $motos)
    {
        try{
            $request->validated();
            $motos->Marca=$request->Marca;
            $motos->Modelo=$request->Modelo;
            $motos->NumeroChasis=$request->NumeroChasis;
            $motos->Matricula=$request->Matricula;
            $motos->save();
            return redirect()->route('Motos.index')
            ->withadd('Cliente Creado');
        }catch (Exception $e){
            return redirect()->route('Motos.index')
            -> withadd('Hay un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motos $motos)
    {
        $motos->delete();
        return redirect('/Motos');
    }
}
