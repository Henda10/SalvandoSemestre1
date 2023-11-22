<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeesRequest;
use Exception;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees =Employees::paginate(10);
        return view('users.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeesRequest $request)
    {
        //
        try{
            $request->validated();
            $employees =new Employees();
            $employees->Primernombre = $request -> input('Primernombre');
            $employees->Segundonombre = $request -> input('Segundonombre');
            $employees->PrimerApellido = $request -> input('PrimerApellido');
            $employees->SegundoApellido = $request -> input('SegundoApellido');
            $employees->Cedula = $request -> input('Cedula');
            $employees->Numero = $request -> input('Numero');
            $employees->save();
            return redirect()->route('usuarios.index')
            ->withadd('Usuario Creado');
        }catch (Exception $e){
            return redirect()->route('usuarios.create')
            -> withadd('Hay un error');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employees=Employees::find($id);
        return view('users.Edit',compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeesRequest $request, Employees $employees)
    {
        try {
            $request->validated();
            $employees->Primernombre = $request -> Primernombre;
            $employees->Segundonombre = $request -> Segundonombre;
            $employees->PrimerApellido = $request -> PrimerApellido;
            $employees->SegundoApellido = $request -> SegundoApellido;
            $employees->Cedula = $request -> Cedula;
            $employees->Numero = $request -> Numero;
            $employees->save();
            return redirect()->route('usuarios.index')
            ->withadd('Usuario Actualizado');
        } catch (Exception $e) {
            return redirect()->route('usuarios.create')
            -> withadd('Hay un error');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employees $employees)
    {
        $employees->delete();
        return redirect('/usuarios');
    }
}
