<?php

namespace servmed;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $table='historia';
    protected $primarykey='idHistoria';
    public $timestamps=false;

    protected $fillable= [

    		'nombre_paciente',
    		'apellido_paciente',
    		'cedula_paciente',
    		'edad',
    		'fecha',
    		'observaciones'
    ];

    protected $guarded=[

    ];

}
