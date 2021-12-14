<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medico;

class MedicoController extends Controller
{
    public function index(){
        return medico::orderBy('id','DESC')->paginate();
        
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
        medico::create([
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
