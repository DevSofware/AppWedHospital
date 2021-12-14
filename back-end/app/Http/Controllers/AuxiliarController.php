<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auxiliar;

class AuxiliarController extends Controller
{
    public function index(){
        return auxiliar::orderBy('id','DESC')->paginate();
    }
   
    public function create(){
    }
         /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auxiliar::create([
            'Nombre'=> $request['Nombre'],
            'Apellido'=>$request['Apellido'],
            'CC'=>$request['CC'],
            'id_user'=>1,
        
        ]);
        return back()->with('status', 'medico generada con éxito');
    }
    public function edit(){
    }
    public function destroy(){
    }
}
