<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    public function index(){
        return usuario::orderBy('id','DESC')->paginate();
    }
    public function create(){
    }
    public function show(){
    }
    public function edit(){
    }
    public function destroy(){
    }
}
