<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitados;

class invitadosController extends Controller
{

    public function index()
    {
        $invitados = Invitados::orderBy('nombres','asc')->where('tipo_persona','=','1')
        ->where('edad','<=','30')->get();
        return [
            'datos'=> $invitados
        ];
    }

    public function primero()
    {
        $invitados = Invitados::where('sexo','=','M')->get();
        return [
            'datos'=> $invitados
        ];
    }

    public function segundo()
    {
        $invitados = Invitados::where('sexo','=','F')->get();
        return [
            'datos'=> $invitados
        ];
    }
    public function tercero()
    {
        $invitados = Invitados::where('tipo_persona','=','invitado')
        ->Where('sexo','=','M')
        ->get();
        return [
            'datos'=> $invitados
        ];
    }

    public function cuarto()
    {
        $invitados = Invitados::select('nombres','apellidos','direccion','telefono')
        ->orderBy('nombres','asc')
        ->get();
        return [
            'datos'=> $invitados
        ];
    }
    public function quinto()
    {
        $invitados = Invitados::where('sexo','=','M')
        ->orWhere('sexo','=','F')
        ->get();
        return [
            'datos'=> $invitados
        ];
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
