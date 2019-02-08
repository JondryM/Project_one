<?php

namespace servmed;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $table='funcionario';
    protected $primarykey='idfuncionario';
    public $timestamps=false;

    protected $fillable= [

    		'rif',
    		'nombre',
    		'apellido',
    		'cedula',
    		'correo',
    		'edad',
    		'fecha_nacimiento',
    		'telefono'
    ];

    protected $guarded=[

    ];

}
