<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class ClienteController extends Controller
{
 //----------clientes-lista--------------------
    public function clientes() {
        return view('clientes')->with(['clientes' => Cliente::all()]);
    }

    //------------Alta---------------------
    public function cliente_alta(){
        return view("cliente_alta");
    }

    public function cliente_registrar(Request $request){
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'fn' => 'required',
        ]);

        if ($request->file('foto') != '') {
            $file = $request->file('foto');
            $img = $file->getClientOriginalName();
            $ldate = date("Ymd_His_");
            $img2 = $ldate . $img;
            \Storage::disk('local')->put($img2, \File::get($file));
        } 
        else {
            $img2 = "barber.jpg";
        }

        Cliente::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'fn' => $request->input('fn'),
            'foto' => $img2
        ]);

        return redirect()->route('clientes');
    }

    //---------detalle-------------------
    public function cliente_detalle($id){   
        $query = Cliente::find($id);
        return view('cliente_detalle')->with(['cliente' => $query]);
    }

    //---------Editar---------------------------

    public function cliente_editar($id){
        $query = Cliente::find($id);
        return view('cliente_editar')->with(['cliente' => $query]); 
    }

    public function cliente_salvar($id, Request $request){
        $query = Cliente::find($id);

        if($request->file('foto1') != '') {
            $file = $request->file('foto1');
            $img = $file->getClientOriginalName();
            $ldate = date('Ymd_His_');
            $img2 = $ldate . $img;
            \Storage::disk('local')->put($img2, \File::get($file));  
        } else {
            $img2 = "barber.jpg";
        }

        $query->nombre = $request->nombre;
        $query->email = $request->email;
        $query->telefono = $request->telefono;
        $query->direccion = $request->direccion;
        $query->fn = $request->fn;
        $query->foto = $img2;
        $query->save();

        return redirect()->route("clientes");
    }

    //-----------borrar-------------------
    public function cliente_borrar($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clientes');
    }

}
