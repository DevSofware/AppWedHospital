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
    public function store(medico $request)
    {
        medico::create($request->validated());
        return back()->with('status', 'medico generada con éxito');
    }
    public function edit(){
    }
    public function destroy(){
    }
}
