<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
        'Nombre',
        'Apellido',
        'CC',
        'Edad',
        'Motivo'
    ];
    public function paciente()
	{
		return $this->belongsTo(paciente::class);
	}
}
  
