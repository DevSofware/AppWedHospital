<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrador;

class AdministradorController extends Controller
{
    public function index(){
        return administrador::orderBy('id','DESC')->paginate();
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
        administrador::create([
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
