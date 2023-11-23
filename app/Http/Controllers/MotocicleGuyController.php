<?php

namespace App\Http\Controllers;

use App\Models\MotocicleGuy;
use Illuminate\Http\Request;
use App\Http\Requests\MoticicleGuyRequest;
use App\Models\Motos;
use Exception;

class MotocicleGuyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $motocicleGuy = MotocicleGuy::with('motos')->get();
        $motocicleGuy = MotocicleGuy::paginate(10);
        return view('motociclista.Index', compact('motocicleGuy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $motos = Motos::all();
        return view('motociclista.Create', compact('motos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MoticicleGuyRequest $request)
    {
        //
        try {
            $request->validated();
            $guy = new MotocicleGuy();
            $guy->Primernombre = $request->input('Primernombre');
            $guy->Segundonombre = $request->input('Segundonombre');
            $guy->PrimerApellido = $request->input('PrimerApellido');
            $guy->SegundoApellido = $request->input('SegundoApellido');
            $guy->Numero = $request->input('Celular');
            $guy->fk_motos = $request->input('Matricula');
            $guy->save();
            return redirect()->route('motociclistas.index')
                ->withadd('Usuario Creado');
        } catch (Exception $e) {
            return redirect()->route('motociclistas.create')
                ->withadd('Hay un error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MotocicleGuy $motocicleGuy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $motos=Motos::all();
        $motocicleGuy = MotocicleGuy::find($id);
        return view('motociclista.Edit', compact('motocicleGuy', 'motos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MoticicleGuyRequest $request, int $motocicleGuyId)
    {
        //
        try {
            // No es necesario llamar a validated() aquí
            $guy=MotocicleGuy::find($motocicleGuyId);
            $guy->Primernombre = $request->input('Primernombre');
            $guy->Segundonombre = $request->input('Segundonombre');
            $guy->PrimerApellido = $request->input('PrimerApellido');
            $guy->SegundoApellido = $request->input('SegundoApellido');
            $guy->Numero = $request->input('Celular');
            $guy->fk_motos = $request->input('Matricula');
            $guy->save();

            return redirect()->route('motociclistas.index')->with('success', 'Usuario Actualizado');
        } catch (\Exception $e) {
            return redirect()->route('motociclistas.edit', $guy->id)->with('error', 'Hubo un error al actualizar el usuario');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $motocicleGuyId)
    {
        //
        $motocicleGuy=MotocicleGuy::find($motocicleGuyId);
        $motocicleGuy->delete();
        return redirect('/motociclistas');
    }
}
