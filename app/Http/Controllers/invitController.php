<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invitar;

class invitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitar = invitar::orderBy('nombres','asc')
        ->where('edad','>=','30')->paginate(10);
        return [
            'datos'=> $invitar
        ];
    }
    public function primero()
    {
        $invitar = invitar::where('sexo','=','masculino')->get();
        return [
            'datos'=> $invitar
        ];
    }

    public function segundo()
    {
        $invitar = invitar::where('sexo','=','femenino')->get();
        return [
            'datos'=> $invitar
        ];
    }
    public function tercero()
    {
        $invitar = invitar::where('tipo_persona','=','invitado')
        ->Where('sexo','=','masculino')
        ->get();
        return [
            'datos'=> $invitar
        ];
    }

    public function cuarto()
    {
        $invitar = invitar::select('nombres','apellidos','direccion','telefono')
        ->orderBy('nombres','asc')
        ->get();
        return [
            'datos'=> $invitar
        ];
    }
    public function quinto()
    {
        $invitar = invitar::where('sexo','=','masculino')
        ->orWhere('sexo','=','femenino')
        ->get();
        return [
            'datos'=> $invitar
        ];
    }

    public function store(Request $request)
    {
       $invitar = new invitar();
       $invitar->Tipo_documento= $request->tipoDoc;
       $invitar->nro_doc= $request->nroDoc;
       $invitar->nombres= $request->nombres;
       $invitar->apellidos= $request->apellidos;
       $invitar->edad= $request->edad;
       $invitar->sexo= $request->sexo;
       $invitar->telefono= $request->telefono;
       $invitar->direccion= $request->direccion;
       $invitar->email= $request->email;
       $invitar->tipo_persona= $request->tipoPersona;

       $invitar->save();
    }
    public function update(Request $request)
    {
        $invitar = invitar::findOrFail($request->id);
        $invitar->Tipo_documento= $request->tipoDoc;
        $invitar->nro_doc= $request->nroDoc;
        $invitar->nombres= $request->nombres;
        $invitar->apellidos= $request->apellidos;
        $invitar->edad= $request->edad;
        $invitar->sexo= $request->sexo;
        $invitar->telefono= $request->telefono;
        $invitar->direccion= $request->direccion;
        $invitar->email= $request->email;
        $invitar->tipo_persona= $request->tipoPersona;
 
        $invitar->save();
    }


    public function destroy($id)
    {
        $invitar = invitar::findOrFail($request->id);
        
        $invitar->delete();
    }
}
