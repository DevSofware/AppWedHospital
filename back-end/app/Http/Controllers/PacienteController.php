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
    public function store(paciente $request)
    {
        paciente::create($request->validated());
        return back()->with('status', 'paciente generada con éxito');
    }
    public function edit(){
    }
    public function destroy(){
    }
}
