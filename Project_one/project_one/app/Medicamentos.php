<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    protected $table='medicamento';
    protected $primarykey='idinventario';
    public $timestamps=false;

    protected $fillable= [

    		'nombre',
    		'descripcion',
    		'num_inventario'
    ];

    protected $guarded=[

    ];

}
