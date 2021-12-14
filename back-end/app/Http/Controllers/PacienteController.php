<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;


class PacienteController extends Controller
{
    public function index(){
        return paciente::orderBy('id','DESC')->paginate();
    }
    public function create(){
    }
       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        paciente::create([
            'Nombre'=> $request['Nombre'],
            'Apellido'=>$request['Apellido'],
            'CC'=>$request['CC'],
            'Edad'=>$request['Edad'],
            'Motivo' =>$request['Motivo'],
        ]);

        return back()->with('status', 'paciente generada con éxito');
    }
    public function edit(){
    }
    public function destroy(){
    }
}
