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
            return redirect()->route('clientes.create')
            ->withadd('Cliente Creado');
        }catch (Exception $e){
            return redirect()->route('clientes.create')
            -> withadd('Hay un error');

        }
    }
    public function show(Clientes $cliente){

    }
    public function edit($id){
        $client=Clientes::find($id);
        return view('clientes.Edit',compact('client'));
    }
    public function update(ClientesRequest $request, Clientes $cliente)
    {
        try {
            $request->validated();
            $client->Primernombre = $request -> Primernombre;
            $client->Segundonombre = $request -> Segundonombre;
            $client->PrimerApellido = $request -> PrimerApellido;
            $client->SegundoApellido = $request -> SegundoApellido;
            $client->Direccion = $request -> Direccion;
            $client->Celular = $request -> Celular;
            $client->save();
            return redirect()->route('clientes.index')
            -> withadd('Categoria Creada');
        } catch (Exception $e) {
            return redirect()->route('clientes.index')
            -> withadd('Hay un error');
        }
    }
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect('/clientes');
    }
}
