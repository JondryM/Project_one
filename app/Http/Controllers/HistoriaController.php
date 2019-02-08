<?php

namespace servmed\Http\Controllers;

use Illuminate\Http\Request;
use servmed\Http\Requests;
use servmed\Http\Controllers\Controller;
use servmed\Historia;
use Illuminate\Support\facades\Redirect;
use sermed\Http\Request\HistoriaFormRequest;
use DB;


class HistoriaController extends Controller
{
    public function __construct()
    {


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request){

            $query=trim($request->get('searchText'));
            $historia=DB::table('historia')->where('nombre_paciente','LIKE','%'.$query.'%')
            ->orderBy('idhistoria','desc')
            ->paginate(7);
            return view('historial.historia.index',["historia"=>$historia,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("historial.historia.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function store(Request $request)
    {

        $historia=new Historia;
        $historia->nombre_paciente = $request->get('nombre_paciente');
        $historia->apellido_paciente = $request->get('apellido_paciente');
        $historia->cedula_paciente = $request->get('cedula_paciente');
        $historia->edad = $request->get('edad');
        $historia->fecha = $request->get('fecha');
        $historia->observaciones = $request->get('observaciones');
        $historia->save();
        return redirect('/historial/historia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("historial.historia.show",["historia"=>Historia::FindOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $historia = Historia::where('idHistoria', $id)
               ->get();
        return view("historial.historia.edit", ["historia" => $historia]);
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

      Historia::where('idhistoria', $request->idhistoria)
              ->update([
                  'nombre_paciente' => $request->nombre_paciente,
                  'apellido_paciente' => $request->apellido_paciente,
                  'cedula_paciente' => $request->cedula_paciente,
                  'edad' => intval($request->edad),
                  'fecha' => $request->fecha,
                  'observaciones' => $request->observaciones,
      ]);

        return redirect('/historial/historia');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $historia=Historia::FindOrFail($id);
     $historia->update();
     return Redirect::to('historial.historia');
    }

    public function delete($id)
    {
      Historia::where('idhistoria', '=', $id)->delete();
    }
}
