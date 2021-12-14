<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
        'Nombre',
        'Apellido',
        'CC',
        'id_user'=>0,
    ];
    public function paciente()
	{
		return $this->belongsTo(paciente::class);
	}
}
