<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionarios;
use Illuminate\Support\facades\Redirect;
use sermed\Http\Request\FuncionarioFormRequest;
use DB;


class FuncionariosController extends Controller
{
    public function __construct()
    {


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('historial.funcionarios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("historial.funcionarios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function store(Request $request)
    {

        $funcionarios=new Funcionarios;
        $funcionarios->rif = $request->get('rif');
        $funcionarios->nombre = $request->get('nombre');
        $funcionarios->apellido = $request->get('apellido');
        $funcionarios->cedula = $request->get('cedula');
        $funcionarios->correo = $request->get('correo');
        $funcionarios->edad = $request->get('edad');
        $funcionarios->fecha_nacimiento = $request->get('fecha_nacimiento    ');
        $funcionarios->telefono = $request->get('telefono');
        $funcionarios->save();
        return redirect('/historial/funcionarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("historial.funcionarios.show",["funcionario"=>Funcionarios::FindOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $funcionarios = Funcionarios::where('idfuncionario', $id)
               ->get();
        return view("historial.funcionarios.edit", ["funcionario" => $funcionarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      Funcionarios::where('idfuncionario', $request->idfuncionario)
              ->update([
                  'rif' => $request->rif,
                  'nombre' => $request->nombre,
                  'apellido' => $request->apellido,
                  'cedula' => $request->cedula,
                  'correo' => $request->correo,
                  'edad' => $request->edad,
                  'fecha_nacimiento' => $request->fecha_nacimiento,
                  'telefono' => $request->telefono,
      ]);

        return redirect('/historial/funcionarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $funcionarios=Funcionarios::FindOrFail($id);
     $funcionarios->update();
     return Redirect::to('historial.funcionarios');
    }

    public function delete($id)
    {
      Funcionarios::where('idfuncionario', '=', $id)->delete();
    }
}
