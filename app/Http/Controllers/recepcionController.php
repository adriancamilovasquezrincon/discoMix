<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recibir;

class recepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibir= recibir::join('invitars', 'recibirs.rec_id','=','invitars.id')
        ->select('ingresados', 'fecha','invitars.nro_doc','invitars.nombres','invitars.apellidos','invitars.sexo')
        ->orderBy('invitars.nombres', 'asc')
        ->get();
        return[
            'recep'=>$recibir
        ];
    }
    public function store(Request $request)
    
    {
        $recibir = new recibir();
        $recibir->ingresados= $request->ingresados;
        $recibir->fecha= $request->fecha;
        $recibir->rec_id= $request->recId;
 
        $recibir->save();
    }

    public function update(Request $request, $id)
    {
        $recibir = recibir::findOrFail($request->id);
        $recibir->ingresados= $request->ingresados;
        $recibir->fecha= $request->fecha;
        $recibir->rec_id= $request->recId;
 
        $recibir->save();
    }

    public function destroy($id)
    {
        $recibir = recibir::findOrFail($request->id);
        
        $recibir->delete();
    }
}
