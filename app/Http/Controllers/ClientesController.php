<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientesRequest;
use App\Models\Clientes;
use Exception;

class ClientesController extends Controller
{
    public function index(){
        $cliente =Clientes::paginate(10);
        return view('clientes.index',compact('cliente'));
    }
    public function create(){
        return view('clientes.create');
    }
    public function store(ClientesRequest $request){
        try{
            $request->validated();
            $client =new Clientes();
            $client->Primernombre = $request -> input('Primernombre');
            $client->Segundonombre = $request -> input('Segundonombre');
            $client->PrimerApellido = $request -> input('PrimerApellido');
            $client->SegundoApellido = $request -> input('SegundoApellido');
            $client->Direccion = $request -> input('Direccion');
            $client->Celular = $request -> input('Celular');
            $client->save();
            return redirect()->route('clientes.index')
            ->withadd('Cliente Creado');
        }catch (Exception $e){
            return redirect()->route('clientes.create')
            -> withadd('Hay un error');

        }
        //
    }
    public function show(Clientes $cliente){

    }
    public function edit($id){
        $cliente=Clientes::find($id);
        return view('clientes.Edit',compact('cliente'));
    }
    public function update(ClientesRequest $request, Clientes $cliente)
    {
        try {
            $request->validated();
            $cliente->Primernombre = $request -> Primernombre;
            $cliente->Segundonombre = $request -> Segundonombre;
            $cliente->PrimerApellido = $request -> PrimerApellido;
            $cliente->SegundoApellido = $request -> SegundoApellido;
            $cliente->Direccion = $request -> Direccion;
            $cliente->Celular = $request -> Celular;
            $cliente->save();
            return redirect()->route('clientes.index')
            -> withadd('Cliente Actualizado');
        } catch (Exception $e) {
            return redirect()->back()
            -> withadd('Hay un error');
        }
    }
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect('/clientes');
    }
}
